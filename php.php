<!--
token_get_all
Ошибки
Перебор условий в if
Перебор функций
Генератор запросов MySQL
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Проект Юля</title><link rel="icon" href="favicon.gif" type="image/gif"><br><body>
<script src="http://localhost/privet/codepress/codepress.js" type="text/javascript"></script>
<script type="text/javascript">
var xmlHttp = new XMLHttpRequest();
var timer;
function chk_me(){
clearTimeout(timer);
timer=setTimeout("ajax_send('tags')",1000);
}
function ajax_send(name)
{
if(name=='text')
{
var text=myCpWindow.getCode();
var text2=document.getElementById('pathfile').innerHTML;
var name2='text2';
var params = name+"="+encodeURIComponent(text)+"&"+name2+"="+encodeURIComponent(text2);
}
if(name=='tags')
{
var text=document.getElementById('tags').value;
var params = name+"="+encodeURIComponent(text);
}
var url = "http://localhost/privet/juliahead/php/ajax.php";
    // Открыть соединение с сервером
xmlHttp.open("POST",url,true);
    // Установить функцию для сервера, которая выполнится после его ответа
xmlHttp.onreadystatechange = updatePage;
  //Send the proper header information along with the request
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.setRequestHeader("Content-length", params.length);
xmlHttp.setRequestHeader("Connection", "close");
  // Передать запрос
  xmlHttp.send(params);
}
function updatePage()
{
if (xmlHttp.readyState == 4) {
var response = xmlHttp.responseText;
document.getElementById("test_result").innerHTML = 'Результаты теста<br>'+response;
}
}
function showhide(id1)
{
if (document.getElementById(id1).style.width == "1px")

{
document.getElementById(id1).style.width = "200px";
document.getElementById(id1).style.visibility = "visible";
}
else
{
  document.getElementById(id1).style.width = "1px";
  document.getElementById(id1).style.visibility = "hidden";
  }
}
</script>
<?php
//////////////////////////////////////////////////!!!!Скрипт (3!T)!!!!!\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
define ('Ogon','Ogon');
set_time_limit (100000);
ini_set('memory_limit','500M');
error_reporting(E_PARSE|E_ERROR|E_CORE_ERROR|E_COMPILE_ERROR|E_USER_ERROR);
#ignore_repeated_errors(true);
#Подключение скрипта с функциями
include('functions.php');
if(!$put){$put='testphp.php';};
if($_GET['f'] and strlen($f)<255){$_GET['f']();};
echo '<span style="font-size:6px;left:60%;position:absolute;" onclick="showhide(\'panel\');">Показать панель</span>';
echo '<div style="visibility:hidden;left:60%;top:100px;position:absolute;" id="panel">';
echo 'Редактор кода<br>
<form action="php.php" method="GET">
<input type="submit" value="      Выполнить функцию     ">
<input type=text name=f size=50>
</form>
<form action="php.php" method="post">
<input type=text name=put value="'.$put.'" size=50>
<input type=submit value="Направить на обработку">';
echo '</div>';

if($_GET['dir'])
{$dir=$_GET['dir'];}
else
{$dir=$_SERVER['DOCUMENT_ROOT'].'/privet/test.php';};
$dir2=substr($dir,0,strrpos($dir,"/"));
if(is_dir($dir))
{
$files=scandir($dir);
}
else
{
$ext = strtolower(array_pop(explode(".",$dir)));
$handle = fopen($dir,"r");
$script=fread($handle,filesize($dir));
fclose($handle);
php($dir);
include 'php_include.php';
$files=scandir($dir2);
copy($dir,$dir2.'/temp_php.jok');

$fh =fopen($dir, "a+"); 
fwrite($fh,$vivod); 
fclose($fh);
curl($dir);
unset($dir);
copy($dir2.'/temp_php.jok',$dir);
}
echo '<div style="position:absolute;left:500px;" id="scandir">';
foreach($files as $k=>$v)
{
//if(is_dir($dir2.$v)){$v=$v.'/';};
echo '<a href="?dir='.$dir2.'/'.$v.'">'.$v.'</a><br>';
};
echo '</div>';

echo '
<div style="position:absolute;left:0%;top:20px;">
<div id="pathfile" >'.$dir.'</div>
<input type="text" id="tags" onKeyUp="chk_me();">
<input type="submit" onclick="ajax_send(\'text\');">
';
echo '
<br>
<textarea id="myCpWindow" class="codepress php" style="width:2000px; height:2000px; font-family:verdana; font-color:green; font-size:10px; border:1px solid black;" spellcheck="false">'.htmlspecialchars($script).'</textarea>
<div id="test_result"></div>
</div>';

if(strlen($_POST['put'])>0)php($_SERVER['DOCUMENT_ROOT'].'\\privet\\'.$_POST['put']);

/*
if($gh>0)
{
$gh5=strpos($jk5,$jk2);
}
Дебаггер
    $GLOBALS - список всех глобальных переменных в скрипте (исключая суперглобалов)
    $_GET - содержит список всех полей формы, отправленной браузером с помощью запроса GET
    $_POST - содержит список всех полей формы отправленной браузером с помощью запроса POST
    $_COOKIE - содержит список всех куки, отправленных браузером
    $_REQUEST - содержит все сочетания ключ/значение, которые содержатся в массивах $_GET, $_POST, $_COOKIE
    $_FILES - содержит список всех файлов, загруженных браузером
    $_SESSION - позволяет хранить и использовать переменные сессии для текущего браузера
    $_SERVER - содержит информацию о сервере, такую как, имя файла выполняемого скрипта и IP адрес браузера.
    $_ENV - содержит список переменных среды, передаваемых PHP, например, CGI переменные.
gettype
is_scalar
is_null
is_numeric
is_bool
is_int
is_integer
is_long
is_real
is_float
is_double
is_string
is_array
is_object
is_resource
get_resource_type

// функция обработчика ошибок
function myErrorHandler ($errno, $errstr, $errfile, $errline) {
switch ($errno) {
case FATAL:
echo "<b>FATAL</b> [$errno] $errstr<br>\n";
echo "Fatal error in line ".$errline." of file ".$errfile;
echo ", PHP ".PHP_VERSION." (".PHP_OS.")<br>\n";
echo "Aborting...<br>\n";
exit 1;
break;
case ERROR:
echo "<b>ERROR</b> [$errno] $errstr<br>\n";
break;
case WARNING:
echo "<b>WARNING</b> [$errno] $errstr<br>\n";
break;
default:
echo "Unkown error type: [$errno] $errstr<br>\n";
break;
}
}
// функция для проверки обработки ошибок
function scale_by_log ($vect, $scale) {
if ( !is_numeric($scale) || $scale <= 0 )
trigger_error("log(x) for x <= 0 is undefined, you used: scale = $scale",
FATAL);
if (!is_array($vect)) {
trigger_error("Incorrect input vector, array of values expected", ERROR);
return null;
}
for ($i=0; $i<count($vect); $i++) {
if (!is_numeric($vect[$i]))
trigger_error("Value at position $i is not a number, using 0 (zero)", 
WARNING);
$temp[$i] = log($scale) * $vect[$i];
}
return $temp;
}
// установить в пользовательский обработчик ошибок
$old_error_handler = set_error_handler("myErrorHandler");
bool function_exists ( string function_name )
Проверяет, есть ли в списке определённых функций, встроенных и пользовательских, функция function_name. Возвращает TRUE в случае успешного завершения или FALSE в случае возникновения ошибки. 
declare(ticks=1);
function tick_handler()
{
var_dump($GLOBALS);
//get_defined_vars();
};
register_tick_function('tick_handler');
*/
?>