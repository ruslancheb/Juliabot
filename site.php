<?php
///////////////////////////////////////////////////////////Юля\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
define ('Ogon','Ogon');
error_reporting(E_PARSE|E_ERROR|E_CORE_ERROR|E_COMPILE_ERROR|E_USER_ERROR);
set_time_limit (100000);
ini_set('memory_limit','1000M');
$db=mysql_connect("localhost","root","");
mysql_select_db("system",$db);
if (!isset($_POST['zapros']))$_POST['zapros']='';
if (!isset($reit))$reit=17;
$nero=0;
if(empty($_POST['zapros'])){$za='';}else{$za=$_POST['zapros'];};
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Проект Юля</title>
<!--Style-->
<style type="text/css">
a:link{color:gray;text-decoration:none;}
a:visited{color:gray;text-decoration:none;}
a:hover{color:gray;text-decoration:none;}
.result
{
background:#DDFFFF;
}
.otvet
{
background:#DDFF9F;
}
</style>
<link rel="icon" href="favicon.gif" type="image/gif"></head>
<link rel="shortcut icon" href="favicon.gif" type="image/gif">
<!--Javascript -->
<script src="script.js"></script>
<body>
<div id="nperv" style="position:absolute;top:100;left:1100;">
</div>
<div style="position:absolute;top:0;left:1100;">
<a href="http://localhost/admin/mysql/phpmyadmin/db_details_structure.php?lang=ru-win1251&server=1&collation_connection=cp1251_general_ci&db=system" target="_blank">Phpmyadmin</a><br>
<a href="http://localhost/privet/dslovo.php" target="_blank">Добавить слово</a>
</div>
<form action="site.php" method="post">
<input type="text" size=160 name="zapros" value="<?php echo htmlspecialchars($za); ?>">
<a href="#" OnMouseOver="B.src='grafika/knopka2.png'" OnMouseOut="B.src='grafika/knopka.png'">
<font color="red"><b><?php echo $reit;?></b></font>
<input type="image" src="grafika/knopka.png" id="B" width="25" height="25">
</a>
</form>
<?php
include 'functions.php';
$pruju=3;
$otve=$za;
include 'init.php';//Чтение из жёсткого диска (Mysql) в оперативную память
if(!empty($za))
{
$filename=$_SERVER['DOCUMENT_ROOT'].'/privet/viras/main.jul';
$handle = fopen($filename, 'r'); 
$Data = fread($handle,filesize($filename)); 
fclose($handle); 
$Data='';
$result_lleo=unserialize($Data);
$settings['poisk_zakonom']=true;
//include 'poisk_zakon.php';
text($za,$pruju,'');
include 'posleinit.php';//Сохранение из оперативной памяти на жёсткий диск (Mysql)
print_r($result_lleo);
}
?>
</body>
</html>