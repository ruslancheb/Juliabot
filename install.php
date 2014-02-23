
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$table='mysql_korni_typ';//!!Замените на название одной из своих таблиц!!!Название любой существующей таблицы в проекте 
//Проверка существует ли уже файл конфига и дана ли команда изменить установочные данные
if($_POST['install']==1 and !file_exists('config.php'))
{
$text='
<?php 
$mysql_login="'.$_POST['mysql_login'].'";
$mysql_password="'.$_POST['mysql_password'].'";
$mysql_host="'.$_POST['mysql_host'].'";
$mysql_db="'.$_POST['mysql_db'].'";
?>
';
	// Открыть файл
	$f = fopen("config.php", "w");
	// Записать строку 
	fwrite($f,$text); 
	// Закрыть файл
	fclose($f);
}
if(file_exists('config.php'))include 'config.php';
$link = mysql_connect($mysql_host,$mysql_login,$mysql_password);//Подключение к базе данных
$res_link=mysql_select_db($mysql_db,$link);
if($res_link===false)//Проверяем подключился ли с этими данными скрипт к базе данных 
{
?>
<meta charset="utf-8">
Введите данные для установки на ваш сервер этого проекта
<table>
<form action="" method="POST">
<input type="hidden" name="install" value="1">
<tr><td>Mysql-логин:</td><td><input type="text" name="mysql_login"></td></tr>
<tr><td>Mysql-пароль:</td><td><input type="text" name="mysql_password"></td></tr>
<tr><td>Mysql хост:</td><td><input type="text" name="mysql_host"></td></tr>(обычно localhost)
<tr><td>Имя базы данных:</td><td><input type="text" name="mysql_db"></td></tr>
<tr><td><input type="submit" value="Отправить"></td></tr>
</form>
</table>
<?php
exit;
}

function mysql_table_seek($tablename,$dbname)
{
$table_list=mysql_query("SHOW TABLES FROM ".$dbname."");
   while($row=mysql_fetch_array($table_list))
   {
   if($tablename==$row[0])return true;
   }
return false;
}
$res_find=mysql_table_seek($table,$mysql_db);
if($res_find===false)
{
	// Открыть файл
	$f = fopen("tables.sql", "r");
	
	// Записать строку 
	$content=fread($f,filesize("tables.sql")); 
	$file = explode(';',$content);
	// Закрыть файл
	fclose($f);
	foreach($file as $k=>$v)
	{
		mysql_query($v);
	}
}
?>
