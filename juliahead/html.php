<?php
defined('Ogon') or die( '');
function html($put,$pruju)
{
$razd=array('<','>',"</",' ',"'",'"','<!');
$n=0;
$k1=0;
$k2=0;
$te=0;
$k=0;
$l=0;
$svp='';
$zapret=0;
$phpnabor='';
$флагп=0;
//////////////////////////////////////////////Разбиение по синтаксису\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
$url=parse_url($put);
echo '<style type="text/css">
.phpf {color:blue;}
.phpvp1 {color:black;}
.phpvp2 {color:red;}
.phps {margin:10%}
.result {margin:10%;width:625px;height:700px;}
</style>';
$site=$url[scheme].'//'.$url[host];
$utr2=mysql_query("INSERT INTO httpist (s) VALUES ('$site')");
$utr1=mysql_query("SELECT c FROM httpist WHERE s='$site'");
$resm=mysql_fetch_array($utr1);
# 4 Kb на один куки
# 300 куки всего, в общем до 1,2 Mb максимум
# 20 куки максимум принимаются от конкретного сервера или домена
$string=curl("$put",'',$resm['c'],'');
# Замена на пробел html символа nbsp
$string=str_replace(substr(pack("v*",0xa0),0,-1),' ',$string);
$string2=$string;
while ($prep!=100000){
#echo htmlspecialchars("$string").'<br>';
$prep=100000;
while (isset($razd[$n])){
$pre=strpos($string,$razd[$n],$tyu);
$pre++;
if ($pre==true and $pre<=$prep){
$prep=$pre;
$nr=$n;
};
$n++;
};
#echo '|'.$razd[$nr].'|&='.htmlspecialchars($string).'';
$n=0;
$tyu2=$tyu;
$tyu=0;
if ($nr==0 and $k1==0 and $k2==0)
{
$razd=array('<','>',"</",' ',"'",'"','<!');
$otve=substr("$string",0,$prep-1);
$otve=html_entity_decode($otve);
$otve=str_replace(pack("v*",0x0a0d),'',$otve);
#echo '|d='.$otve.'=>f='.$флагп.'<br>';
if (eregi('а|б|в|г|д|е|ё|ж|з|и|й|к|л|м|н|о|п|р|с|т|у|ф|х|ц|ч|ш|щ|ь|ы|ъ|э|ю|я',$otve) and $zapret==0)
{
text($otve,$pruju);
};
if (eregi('\?php|<\?|<\%',$otve) or $флагп==1)
{
#echo '4кккккккккк';
$phpnabor=$phpnabor.$otve;
#echo '|пхпнабор='.strlen($phpnabor).'#|';
$флагп=1;
};
if (eregi('\?>|\%>',$otve))
{
#echo 'да'.$phpnabor.'да';
$phpnabor=str_replace(substr(pack("v*",0xa0),0,-1),' ',$phpnabor);
$u=1;
$fp=fopen($_SERVER['DOCUMENT_ROOT'].'/privet/test/t'.$u.'.php',"w");
fwrite($fp,$phpnabor);
fclose($fp);
php($_SERVER['DOCUMENT_ROOT'].'/privet/test/t'.$u.'.php');
echo $_SERVER['DOCUMENT_ROOT'].'/privet/test/t'.$u.'.php';
$флагп=0;
};
$string=substr("$string",$prep-1);
$string=substr($string,1);
$te=1;
}
//>-закрытие территории тега
elseif ($nr==1 and $te==1 and $k1==0 and $k2==0)
{
$razd=array('<','>',"</");
#echo htmlspecialchars($string).'<br>';
$tegkl=trim(substr($string,0,$prep-1));
#echo htmlspecialchars($string).'<br>';
#echo htmlspecialchars($tyu2).'<br>';
#echo htmlspecialchars($prep).'<br>';
if (strpos($tegkl,'=')){
$strp=strpos($tegkl,'=');
$tegn=strtolower(substr($tegkl,0,$strp));
$tegz=strtolower(substr($tegkl,$strp+1));
}
else
{
$tegn=$tegkl;
$tegz='';
};
$teg[$k][$l]=$tegn;
$val[$k][$l]=$tegz;
/*
if($teg[$k]['0']=='input')
{
if ($tegn=='type')
{
}
elseif($tegn=='name')
{
$zar5=$zar5.$tegz.'='.$tegn.'&';
}
elseif($tegn=='value')
{
$zar5=$zar5.$tegn.'='.$tegz.'&';
echo $zar5;
}
elseif($tegn=='submit')
{
$zar5=$zar5.$tegn.'='.$tegz.'&';
echo $zar5;
};
}
elseif ($teg[$k]['0']=='form')
{
}
if ($tegn=='action')
{
}
elseif($tegn=='method')
{
if ($tegz=='post')
{
}
elseif ($tegz=='get')
{
};
}
elseif($tegn=='meta' or $tegp==5)
{
if ($tegz=='"text/html; charset=utf-8"')
{
$string=utf8_win($string);
}
elseif ($tegz=='"content="text/html; charset=windows-1251"')
{
};
$tegp=5;
};
*/
$l++;
#Кодировка страниц
#echo '#'.$tegkl.'#';
#echo $tegn.'^'.$tegz.'^'.$tegkl.'*';
if($tegkl=='content="text/html; charset=utf-8"' or $tegkl=='content="text/html; charset=UTF-8"')
{
echo 'Сайт переведен из кодировки  UTF-8 в обычную';
$string=utf8_win($string);
};
//Вычеленение джаваскрипт и стиля 
/*
if ($tegmy=='script' or $tegmy=='style')
{
if($zapret==1){$zapret=0;};
if($zapret==0){$zapret=1;};
};
*/
#echo '|teg='.$tegmy.'|';
if ($tegmy=='br')
{
$phpnabor=$phpnabor.pack("v*",0x0a0d);
};
#if ($tegmy=='meta')
#{
#Другие отсюда начинать
#либо eval либо <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
#if($tegmy=='content' and $tegzn=='"text/html; charset=utf-8"')

#};

$string=substr("$string",$prep);
if ($l>0){$l=1;};
//Нахождение в таблице тегов HTML
$utr1=mysql_query("SELECT * FROM h_s WHERE s='$tegmy' and t='$l'");
$m0=mysql_fetch_array($utr1);
if (isset($m0['n']))
{

}
else
{
$utr2=mysql_query("INSERT INTO h_s (s,t) VALUES ('$tegmy','$l')");
};
//
$l=0;
$te=0;
$k++;
}
elseif ($nr==2 and $k1==0 and $k2==0)
{
$te=1;
$pere[$k]=substr("$string",0,$prep-1);
$otve=html_entity_decode($pere[$k]);
$otve=str_replace(pack("v*",0x0a0d),'',$otve);
#echo '@'.$pere[$k].'@';
if (eregi('а|б|в|г|д|е|ё|ж|з|и|й|к|л|м|н|о|п|р|с|т|у|ф|х|ц|ч|ш|щ|ь|ы|ъ|э|ю|я',$otve) and $zapret==0){text($otve,$pruju);};
if (eregi('\?php|<\?|<\%',$otve) or $флагп==1)
{
#echo '4кккккккккк';
$phpnabor=$phpnabor.$otve;
$флагп=1;
};
if (eregi('\?>|\%>',$otve)){
#echo 'да'.$phpnabor.'да';
$phpnabor=str_replace(substr(pack("v*",0xa0),0,-1),' ',$phpnabor);
$u='1';
#Запись в файл
$phpnabor='
$начало=microtime_float();'.
$phpnabor.
'$конец=microtime_float();
$время=$конец-$начало;
echo $время';
$fp=fopen($_SERVER['DOCUMENT_ROOT'].'/privet/test/t'.$u.'.php',"w");
fwrite($fp,$phpnabor);
fclose($fp);
php($_SERVER['DOCUMENT_ROOT'].'/privet/test/t'.$u.'.php');
$флагп=0;
};
$string=substr("$string",$prep+1);
}
//<! комментарии и другие ненужные вещи
elseif ($nr==6 and $k1==0 and $k2==0)
{
#echo '11111111111111111111';
$te=1;
$string=substr("$string",$prep+2);
$razd=array('','>');
}
//Пробел
elseif ($nr==3 and $te==1 and $k1==0 and $k2==0 and $prep-$tyu2>0)
{
$tegkl=trim(substr($string,0,$prep));
#echo htmlspecialchars($string).'<br>';
#echo htmlspecialchars($tyu2).'<br>';
#echo htmlspecialchars($prep).'<br>';
if (strpos($tegkl,'=')){
$strp=strpos($tegkl,'=');
$tegn=strtolower(substr($tegkl,0,$strp));
$tegz=strtolower(substr($tegkl,$strp+1));
}
else
{
$tegn=$tegkl;
$tegz='';
};
$teg[$k][$l]=$tegn;
$val[$k][$l]=$tegz;
/*
if($teg[$k]['0']=='input')
{
if ($tegn=='type')
{
}
elseif($tegn=='name')
{
$zar5=$zar5.$tegz.'='.$tegn.'&';
}
elseif($tegn=='value')
{
$zar5=$zar5.$tegn.'='.$tegz.'&';
echo $zar5;
}
elseif($tegn=='submit')
{
$zar5=$zar5.$tegn.'='.$tegz.'&';
echo $zar5;
};
}
elseif ($teg[$k]['0']=='form')
{
}
if ($tegn=='action')
{
}
elseif($tegn=='method')
{
if ($tegz=='post')
{
}
elseif ($tegz=='get')
{
};
}
elseif($tegn=='meta' or $tegp==5)
{
if ($tegz=='"text/html; charset=utf-8"')
{
$string=utf8_win($string);
}
elseif ($tegz=='"content="text/html; charset=windows-1251"')
{
};
$tegp=5;
};
*/
$l++;
#Кодировка страниц
#echo '#'.$tegkl.'#';
#echo $tegn.'^'.$tegz.'^'.$tegkl.'*';
if($tegkl=='content="text/html; charset=utf-8"' or $tegkl=='content="text/html; charset=UTF-8"')
{
echo 'Сайт переведен их кодировки  UTF-8 в обычную';
$string=utf8_win($string);
};

/*
&quot;-"
if()
{
};

<form action="" method="POST|GET">
<input type="text|password|hidden" name="" value="">
<textarea name="" value=""></textarea>
<select name="ratp">
    <option selected="selected">Оценка</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
	<option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
	<option>9</option>
    <option>10</option>
	</select>
<input type="submit" name="" value="">
</form>
нужно сохранить навание скрипта,метод и сформировать строку из переменных
index.php?
$get='showtopic=5470&view=getlastpost';

curl($get,$post,$cookies,$head = 1);
*/
$string=substr("$string",$prep);
#echo $string;
}
elseif ($nr==4 and $te==1)
{if($k1==1){$k1=0;}else{$k1=1;};$tyu=$prep;}
elseif ($nr==5 and $te==1)
{if($k2==1){$k2=0;}else{$k2=1;};$tyu=$prep;}
else
{$tyu=$prep;};
};
echo '<textarea style="width:500px; height:150px; font-family:verdana; font-color:green; font-size:9px; border:1px solid #E0E0E0;">'.htmlspecialchars("$string2").'</textarea><br><table border><td>Номер</td><td>Тэг</td><td>Свойства</td><td>Переменная</td><td>Связи</td><tr>';
$kn=$k;
$k=0;
$l=1;
$svoi='';
while ($k<=$kn)
{
while(isset($teg[$k][$l])){
$svoi=$svoi.'|'.$l.'=('.$teg[$k][$l].')|';
$l++;
};
$l=1;
echo '<td>'.$k.'</td><td><a href="http://www.htmlbook.ru/html/'.htmlspecialchars($teg[$k][0]).'.html" color=red>'.htmlspecialchars($teg[$k][0]).'</a></td><td>'.htmlspecialchars($svoi).'</td><td>'.htmlspecialchars($pere[$k]).'</td><td>'.htmlspecialchars($sv[$k]).'</td><tr>';
$svoi='';
$k++;
};
echo '</table><a href="'.$put.'" onclick="window.open(\''.$put.'\',\'…\',\'…\'); return false">Просмотр</a></font>';
};
?>