<?php
//Настройки
//error_reporting(0);
set_time_limit (100000);
ini_set('memory_limit', '500M');
$db=mysql_connect("localhost","root","");
mysql_select_db("system",$db);
define ('Ogon','Ogon');
//Подключение всех скриптов находящихся в \juliahead
$t=$_SERVER['DOCUMENT_ROOT'].'\\privet\\juliahead';
$fs=scandir($t);
foreach($fs as $val)
   {
	 if(end(explode(".",$val))=='php' and strlen($val)>3) {include ($t.'\\'.$val); }
   };
?>