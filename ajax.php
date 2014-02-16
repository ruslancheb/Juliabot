<?php
define ('Ogon','Ogon');
error_reporting(0);
set_time_limit (30);
$db=mysql_connect('localhost','root','');
mysql_select_db('system',$db);
#Подключение скрипта с функциями
include('functions.php');
foreach($_POST as $k=>$v)
{
$$k=mysql_real_escape_string($v);
}
//Оценивание действий Юли
if (isset($_GET['ocenka']) and isset($_GET['member']))
{
#Ручная оценка действий
$ocenka=mysql_real_escape_string($_POST['ocenka']);
$member=mysql_real_escape_string($_GET['member']);
$zaprodei="UPDATE iz4_php_spicok_deistvii SET ocenka='".$ocenka."' WHERE nomer='".$member."';";
mysql_query($zaprodei);
if(strlen(mysql_error())>1){mysql_query("INSERT INTO errors (whois,kod,error) VALUES ('mysql','$zaprodei','".mysql_error()."')");};;#Возвращает строку, содержащую текст ошибки выполнения последней функции MySQL, или '' (пустая строка) если операция выполнена успешно.	
};
//Редатирование информации о словах
if ($ns)
{
if(substr($ns,0,1)=='w')
{
$ns=substr($ns,1);
$zaprodei="UPDATE slova_korni_typ SET t='".$t."',v='".$v."' WHERE n='".$ns."';";
}
else
{
$zaprodei="UPDATE p SET t='".$t."',v='".$v."' WHERE n='".$ns."';";
}

echo $zaprodei;
//mysql_query($zaprodei);
if(strlen(mysql_error())>1){echo 'Произошла ошибка';mysql_query("INSERT INTO errors (whois,kod,error) VALUES ('mysql','$zaprodei','".mysql_error()."')");}
else{echo 'Записано';};#Возвращает строку, содержащую текст ошибки выполнения последней функции MySQL, или '' (пустая строка) если операция выполнена успешно.	
};

?>