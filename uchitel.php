<?php
define ('Ogon','Ogon');
error_reporting(E_PARSE|E_ERROR|E_CORE_ERROR|E_COMPILE_ERROR|E_USER_ERROR);
set_time_limit (100000);
ini_set('memory_limit','1000M');
$pruju=3;
$otve=$za;
include 'import_functions.php';
include 'functions.php';
include 'init.php';

function rmDirRec($dir)
    {
        $objs = glob($dir."/*");
        if ($objs)
        {
            foreach($objs as $obj)
            {
                if(is_dir($obj))
                {
                rmDirRec($obj); 
                }
                else
                {
                $ext=end(explode(".", $obj));
                if($ext=='txt')
                {           
					$handle = fopen($obj,"r");
					$text=fread($handle,filesize($obj));
					fclose($handle);
					$text=str_replace("\n",' ',$text);
					$text=str_replace("\r",'',$text);
					preg_match_all("/\.* если(.*) *[?.!]/Ui",$text,$patt);
					foreach ($patt[0] as $k=>$v){text($v);}
				}
            	}
            }
        }
    }
rmDirRec($_SERVER['DOCUMENT_ROOT'].'/teksti/txt/');
//include 'posleinit.php';
/*
$files=scandir($_SERVER['DOCUMENT_ROOT'].'/teksti/txt/');
foreach ($files as $v=>$k)
{
if(end(explode(".",$k))=='txt')
{
$handle = fopen($_SERVER['DOCUMENT_ROOT'].'/teksti/txt/'.$k,"r");
$text=fread($handle,filesize($_SERVER['DOCUMENT_ROOT'].'/teksti/txt/'.$k));
fclose($handle);

$text=str_replace("\n",' ',$text);
$text=str_replace("\r",'',$text);
preg_match_all("/\.* если(.*) *[?.!]/Ui",$text,$patt);
print_r($patt);
foreach ($patt[0] as $k=>$v)
{
text($v);
}

//include 'posleinit.php';//Сохранение из оперативки на жёсткий диск
//echo '<textarea style="width:1000px;height:1000px;">'.htmlspecialchars($text).'</textarea>';
echo '<br>';
}
}
*/
?>