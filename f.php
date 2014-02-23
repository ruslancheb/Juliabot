<?php
//Идеи усоверщшествования скрипта
/*
+Выдавать самые частые файлы вверху = это сделано
Встроить редактор и искать при выделении во всех файлах
Можно связать функцию test со строками и файлами и соответсвенно искать их на странице и встроить в табличку
*/
?>
<html>
<head>
<title>Список файлов</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
<style>
.centr 
{

position:absolute;
top: 0%;
left: 30%;
} 
}
</style>
<div class="centr">
<?php
define ('Ogon','Ogon');
set_time_limit (100000);
ini_set('memory_limit','1000M');
include 'install.php';
error_reporting(E_PARSE|E_ERROR|E_CORE_ERROR|E_COMPILE_ERROR|E_USER_ERROR);
include 'functions.php';
#Вывод списка файлов
$arg=$_SERVER['DOCUMENT_ROOT'];
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
                if($ext=='php')
                {
                echo '<a href="?open='.$obj.'">'.$obj.'</a><br>';
				$fh = fopen($obj, "rb");
				$data = fread($fh,filesize($obj));
				fclose($fh);
				//php($arg."/".$f);
        		//include 'php_include.php';
        		echo '<ul>';
				foreach($path_include as $k=>$v)
				{	
				echo '<li>'.$v.'</li>';
				}
				echo '</ul>';
            	}
            	}
            }
        }
    }
#Последние файлы
$query=mysql_query('SELECT * FROM posl_files ORDER BY n DESC LIMIT 0,10 ');
while($mysql=mysql_fetch_array($query))
{
$obj=$mysql['p'];
echo '<a href="?open='.$obj.'"><font color="green">'.$obj.'</font></a><br>';
}
#Популярные файлы
$query=mysql_query('SELECT * FROM files ORDER BY chi DESC');
while($mysql=mysql_fetch_array($query))
{
$obj=$mysql['p'];
echo '<a href="?open='.$obj.'">'.$obj.'</a><br>';
}
rmDirRec($arg);

if($_GET['open'])
{
$zapros='"C:\Program Files\Notepad++\notepad++.exe" "'.$_GET['open'].'"';
$sql='UPDATE files SET chi=chi+1 WHERE p="'.$_GET['open'].'";';
$result=mysql_query($sql);
$sql='INSERT INTO posl_files (p) VALUES ("'.$_GET['open'].'");';
mysql_query($sql);
$sql='INSERT INTO files (p) VALUES ("'.$_GET['open'].'");';
mysql_query($sql);
system($zapros);
if($_GET['type']=='hide')
{
echo '<script type="text/javascript">window.close();</script>';
}
}

?>
</div>
</body>
</html>