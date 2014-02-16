<?php
defined('Ogon') or die( '');
//////////////////////////////////////////Отображение тестовой информации\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function test($test,$line)
{
$array=debug_backtrace();

global $nero,$timer,$ht;
if($test=='dg')
{
$array=debug_backtrace($test);
foreach($array[0] as $k=>$v)
{
echo '$k='.$k.'$v='.$v."\r\n";
}
}
else
{
if($test===NULL){
echo '<!--Отображение тестовой информации--><div style="position:absolute;top:'.$nero.'0;left:0;z-index:1;background-color:blue;color:white;opacity: 0.7" >';
$timer2=microtime_float();
if($timer){echo $timer2-$timer;}
$timer=$timer2;
}
else
{
//file line
//'.$array[0]['line'].'
echo '<!--Отображение тестовой информации--><div style="position:absolute;top:'.$nero.'0;left:0;z-index:1;background-color:yellow;color:black;opacity: 0.7;" >';
echo '<a target="_blank" href="http://localhost/privet/f.php?open='.$array[0]['file'].'&type=hide"><b>'.$array[1]['function'].':</b></a>';
//
if (is_array($test)){
echo nl2br(print_r($test,true));
}
elseif(is_object($test)){echo 'Это объект';}
else{echo $test;};
};
echo '</div>';
$nero++;
$nero++;
}
};

?>