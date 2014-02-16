<?php
define ('Ogon','Ogon');
include('..\..\internet.php');
$db=mysql_connect("localhost","root","");
mysql_select_db("system",$db);
mysql_query('SET NAMES "utf8"', $db);
mysql_query("set character_set_connection=utf8");
mysql_query("set names utf8");
error_reporting(E_PARSE|E_ERROR|E_CORE_ERROR|E_COMPILE_ERROR|E_USER_ERROR);
if ($_POST['text'])
{
$handle2 = fopen($_POST['text2'],'w');
fwrite($handle2,$_POST['text']); 
fclose($handle2);
$text2=$_POST['text'];
$n=1;
$n2=substr_count($text2,"\n");
while($n<=$n2)
{
$nom=strpos($text2,"\n");
$stroka = substr($text2,0,$nom);
$stroka=trim($stroka);
if(substr($stroka,0,1)=='#' or substr($stroka,0,2)=='//')
{
if(substr($stroka,0,1)=='#')
{
$komment=substr($stroka,1);
}
if(substr($stroka,0,2)=='//')
{
$komment=substr($stroka,2);
}

$komment=trim($komment);


//Перевод английских комментариев
if (preg_match("/[-0-9a-zA-Z]/i",$komment))
{
$VALUE=$komment; // the message you want to translate
$APPID="A15954955F2C3914309A3E28782187FFD73523AF"; // your app ID
$FROM="en"; // Initial Language
$TO="ru"; // Destination language
$value=file_get_contents('http://api.microsofttranslator.com/V2/Ajax.svc/Translate?appId='.$APPID.'&from='.$FROM.'&to='.$TO.'&text='.urlencode($VALUE));
$komment=trim($komment,'"');
}

$tags=mysql_real_escape_string($komment);
$mesto=$_POST['text2'];
$u69=mysql_query('INSERT INTO kod_tags (tags,n,mesto) VALUES ("'.$tags.'","'.$n.'","'.$mesto.'");');
}
$text2=substr($text2,$nom+1);
$n++;
};
$_POST['text2']=substr($_POST['text2'],strlen($_SERVER['DOCUMENT_ROOT'])+1);
$res=curl('http://localhost/'.$_POST['text2']);
echo $res;
}



if ($_POST['tags'])
{
$ptags=split($_POST['tags']);
$line='';
foreach ($ptags as $key =>$value)
{
 if(strlen($value)>6)
 {
 $slovo=substr($ptags,0,-3);
 }
 else
 {
 $slovo=$ptags;
 }
 $line.="%".$slovo;
}
$line.="%";
//$zapros='%'.str_replace(" ","%",$_POST['tags']).'%';
$query=mysql_query("SELECT * FROM kod_tags WHERE tags like '$line'");
do
{
echo '<a href="?dir='.$result['mesto'].'">'.$result['tags'].'</a>';
}
while($result=mysql_fetch_array($query));
}
?>
