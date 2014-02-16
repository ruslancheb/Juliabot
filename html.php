<?php 
//////////////////////////////////////////////////!!!!Скрипт (3!T)!!!!!\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
define ('Ogon','Ogon');
#error_reporting(0);
set_time_limit (100000);
$db=mysql_connect("localhost","root","");
mysql_select_db("system",$db); 
#Подключение скрипта с функциями
include('functions.php');
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"><title>ty"Юля"</title><link rel="icon" href="favicon.gif" type="image/gif"><br><body bgcolor=DodgerBlue>';
echo '<center><h1>HTML</h1></center><form action="html.php" method="post"><br><input type=text name=put value="'.$put.'" size=50><input type=submit value="Направить на обработку">';
if(strlen($_POST['put'])>0)html($_POST['put']);
?>

