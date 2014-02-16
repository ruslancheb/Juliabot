<?php
defined('Ogon') or die( '');
///////////////////////////////////////////////Новая переменная PHP\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function nper($put){
global $put,$mus3,$mus2,$nac,$utr,$per,$a;
$mus=mysql_query("SELECT p FROM php_s WHERE n='$put'");
$mus3=mysql_query("UPDATE php_s SET p=p+1 WHERE n='$put';");
$mus2=mysql_fetch_array($mus);
$nac=$mus2['p'];
while ($utr!=1){
$nac++;
$per=$nac.'$a'.$put;
$utr=mysql_query("INSERT INTO php_p (p) VALUES ('$per')");
};
$nac='$a'.$nac;
return $nac;
};
?>