<?php
error_reporting(0);
include 'install.php';

$koy=mysql_query("SELECT * FROM esli_to2");
do{
$z2=mysql_query("SELECT * FROM esli_to2 WHERE podl1='".$koyr['podl2']."' AND skaz1='".$koyr['skaz2']."';");
do{
if(strlen($z2r['podl1'])>1 and strlen($z2r['podl2'])>1)
{
echo $koyr['podl1'].' '.$koyr['skaz1'].'->'.$z2r['podl1'].' '.$z2r['skaz1'].'->'.$z2r['podl2'].' '.$z2r['skaz2'].'<br>';
}
}
while($z2r=mysql_fetch_array($z2));
}
while($koyr=mysql_fetch_array($koy));
//Меры
//Нужно добавить поддержку вида- "я буду строить",то есть двухсвлонвые сказуемые
//те,приня
?>