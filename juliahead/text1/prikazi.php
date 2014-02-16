<?php
if($задача!='n'){
#Нарисуй рисунок
echo "Всё правильно";
#1)Поиск в памяти
$интзап='';
$zapros="SELECT n,ps,cv FROM iz4_php WHERE ps='".$nome[$задача['0']][$задача['1']]."';";#Ищется нарисуй и выводится php-коды для действия
$dopol['0']='w122';
$otvetklm=mysql_query($zapros);
do 
{
$array=unserialize($otvetkl['cv']);
#в ключах номера,в значениях php-коды
#нужен поиск в ключах
#дополнения,прилагательные
foreach($array as $index => $val)
   {
   echo $index.'|';
    if (array_keys($dopol,$index)){
	eval ($val);
	$zaprodei="INSERT INTO iz4_php_spicok_deistvii (deistvie,kod,dopol,vrema) VALUES ('".$otvetkl['cv']."','".$val."','".$dopol."','".date("ymdhis")."')";	
	mysql_query($zaprodei);
	$vid=mysql_insert_id();#возвращает ID, сгенерированный для столбца AUTO_INCREMENT предыдущим запросом INSERT
	include("chasti/ratinghtml.php");#HTML-форма оценки действия
	if(strlen(mysql_error())>1){mysql_query("INSERT INTO errors (whois,kod,error) VALUES ('mysql','$zaprodei','".mysql_error()."')");};#Возвращает строку, содержащую текст ошибки выполнения последней функции MySQL, или '' (пустая строка) если операция выполнена успешно.	
	};#Поиск среди дополнительных слов действия и его выполнения
   };
}
while ($otvetkl=mysql_fetch_array($otvetklm));

foreach($kon[$g] as $key=>$val)
   {
   if ($chp[$g][$key]==1)
      {
	  $интзап=$интзап.' '.$val;
	  $подлежащее=$val;
	  };
   if ($chp[$g][$key]==2)
      {
	  $интзап=$интзап.' '.$val;
	  $сказуемое=$val;
	  };
   if ($chp[$g][$key]==3)
      {
	  $интзап=$интзап.' '.$val;
	  $прилагательное=$val;
	  };
   if ($chp[$g][$key]==5)
      {
	  $интзап=$интзап.' '.$val;
	  $дополнение=$val;
	  };	  
   };
$zapros=$zapros.';';
#2)Интернет
#$julop=goofleu('PHP '.$s[$g][$r].' '.$интзап);
foreach($julop as $val)
   {
     html($val);
   };


$задача='n';
};
?>