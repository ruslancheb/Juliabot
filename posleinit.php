<?php
$filename=$_SERVER['DOCUMENT_ROOT'].'/privet/viras/main.jul';
$h = fopen($filename,'w');
fwrite($h,serialize($result_lleo)); 
fclose($h);
$filename=$_SERVER['DOCUMENT_ROOT'].'/privet/viras/p.jul';
$h=fopen($filename,'w');
//fwrite($h,serialize($�)); 
fwrite($h,print_r($�,true));
fclose($h);
?>