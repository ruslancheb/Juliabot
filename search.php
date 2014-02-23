<?php 
/*
Удобно можно найти место строки или таблицы в базе данных где эта строка используется.

*/
error_reporting(E_ERROR | E_PARSE);
set_time_limit(300);//Скрипт будет выполняться 300 секунд или пять минут
?>
<meta charset="utf-8">
<title>Поиск по всем файлам сайта</title>
<h2>Поиск внутри всех файлов сайта</h2>
<form method="GET" action="">
<table>
<tr><td>Строка поиска:</td><td><input type="text" value="<?php echo htmlspecialchars($_GET['search_string']);?>" name="search_string"></td></tr>
<tr><td>Папка поиска:</td><td><?php
if($_GET['path'])
{
$path=$_GET["path"].'/';
}
else
{
$path=$_SERVER['DOCUMENT_ROOT'].'/';
}
$path=preg_replace("$/+$","/",$path); 
echo '<input type="text" size="30" name="path" value="'. htmlspecialchars($path).'"><br>
<small>В каких разделах искать</small>';
$files=scandir($path);
$cheked=array_flip($_GET['files']);
foreach($files as $k=>$v)
{
	if($v!='.' and $v!='..' and is_dir($path.'/'.$v.'/'))
	{
		if(isset($cheked[$v]))
		{
		$checked='checked';
		}
		else
		{
		$checked='';
		}
		if(count($_GET['files'])==0)
		{
		$checked='checked';
		}
	echo '<input '.$checked.' type="checkbox" name="files[]" value="'.htmlspecialchars($v).'">/<a href="?path='.$path.'/'.$v.'/'.'"&ext='.$_GET['ext'].'>'.htmlspecialchars($v).'</a>/&nbsp;';
	}
}
?>
</td></tr>
<tr><td>Расширения файлов :</td><td>
<?php
$cheked=array_flip($_GET['ras']);
$ras=array('php','html','js','css','sql');
	if(isset($cheked['*']))
	{
	$checked2='checked';
	}
	echo '<input type="checkbox" name="ras[]" '.$checked2.' value="*"><b>Все</b>&nbsp;';
foreach($ras as $k=>$v)
{
	if(isset($cheked[$v]))
	{
	$checked='checked';
	}
	else
	{
	$checked='';
	}
	if(count($_GET['ras'])==0)
	{
	$checked='checked';
	}
	echo '<input '.$checked.' type="checkbox" name="ras[]" value="'.htmlspecialchars($v).'">.'.htmlspecialchars($v).'&nbsp;';
}
echo '<input type="text" name="ext" value="'.$_GET['ext'].'">(через запятую ,например <b>swf,gif,jpg</b>)';
?></td></tr>
<tr><td><input type="submit" value="Начать поиск"></td></tr>
</table>
<?php
function search_string($dir)
    {
	global $search_string,$ext2,$req_dir,$result;
        $objs = glob($dir."/*");
        if ($objs)
        {
            foreach($objs as $obj)
            {
                if(is_dir($obj))
                {
					if(count($req_dir)>0)
					{
						foreach($req_dir as $k=>$v)
						{
						$objm=preg_replace("$/+$","/",$obj);
						if(substr($objm,0,strlen($v))==$v)
						{
						search_string($objm.'/'); 
						}
						
						}
					}
					else
					{
					search_string($obj); 
					}
                }
                else
                {
                $ext=end(explode(".",$obj));
				$ext=mb_strtolower($ext,'utf-8');

					if(isset($ext2[$ext]) or (count($ext2)==0))
					{
						$handle = fopen($obj,"r");
						$text=fread($handle,filesize($obj));
						fclose($handle);
						$search_string_win=iconv('utf-8','windows-1251',$search_string);
						if(mb_stripos($text,$search_string,0,'utf-8')!==false)
						{
						$pos=mb_stripos($text,$search_string,0,'utf-8');
						$nlenght=100;
						$klenght=100;
						$npos=$pos-$nlenght;
						if($npos<0){$npos=0;$nlenght=$pos;};
						$ntext=mb_substr($text,$npos,$nlenght,'utf-8');
						$ktext=mb_substr($text,$pos+mb_strlen($search_string,'utf-8'),$klenght,'utf-8');
						$vtext=$ntext.$search_string.$ktext;
						$result[]=array('file'=>$obj,'text'=>$vtext,'kod'=>'utf-8');
						}
						elseif(stripos($text,$search_string_win)!==false)
						{
						$pos=stripos($text,$search_string_win);
						
						$nlenght=100;
						$klenght=100;
						$npos=$pos-$nlenght;
						if($npos<0){$npos=0;$nlenght=$pos;};
						$ntext=substr($text,$npos,$nlenght);

						$ktext=substr($text,$pos+strlen($search_string_win),$klenght);

						$vtext=iconv('windows-1251','utf-8',$ntext).$search_string.iconv('windows-1251','utf-8',$ktext);


						$result[]=array('file'=>$obj,'text'=>$vtext,'kod'=>'windows-1251');
						}
					}
            	}
            }
        }

	}

if($_GET['search_string'] && strlen($_GET['search_string'])>2)
{
echo '
<h3><font color="blue">Результаты поиска</font></h3><br>
<table>
<tr><td><font color="blue">Имя файла</font></td><td><font color="blue">Содержимое файла</font></td><td><font color="blue">Кодировка поиска</font></td></tr>
';
$ext=split(',',mb_strtolower(trim($_GET['ext']),'utf-8'));
foreach($_GET['ras'] as $k=>$v)
{
if($v=='*')
{
unset($ext);
break;
}
$ext[]=$v;
}
if(count($ext)>0)
{
$ext2=array_flip($ext);
}
else
{
unset($ext2);
}





$search_string=trim($_GET['search_string']);

foreach($_GET['files'] as $k=>$v)
{
$path=preg_replace("$/+$","/",trim($_GET['path']).'/'.$v); 
$req_dir[]=$path;
}

//print_r($req_dir);

$_GETpath=preg_replace("$/+$","/",trim($_GET['path']));
 
search_string(trim($_GETpath));

	foreach($result as $k=>$v)
	{
	echo '<tr><td style="width:35%;">'.preg_replace("$/+$","/",iconv('windows-1251','utf-8',$v['file'])).'</td><td  style="width:60%;height:100px;">'.str_replace(htmlspecialchars($search_string),'<font color="red">'.htmlspecialchars($search_string).'</font>',htmlspecialchars($v['text'])).'</td><td>'.$v['kod'].'</td></tr>';
	}
echo '</table>';
}
?>