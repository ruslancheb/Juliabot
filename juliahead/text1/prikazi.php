<?php
if($������!='n'){
#������� �������
echo "�� ���������";
#1)����� � ������
$������='';
$zapros="SELECT n,ps,cv FROM iz4_php WHERE ps='".$nome[$������['0']][$������['1']]."';";#������ ������� � ��������� php-���� ��� ��������
$dopol['0']='w122';
$otvetklm=mysql_query($zapros);
do 
{
$array=unserialize($otvetkl['cv']);
#� ������ ������,� ��������� php-����
#����� ����� � ������
#����������,��������������
foreach($array as $index => $val)
   {
   echo $index.'|';
    if (array_keys($dopol,$index)){
	eval ($val);
	$zaprodei="INSERT INTO iz4_php_spicok_deistvii (deistvie,kod,dopol,vrema) VALUES ('".$otvetkl['cv']."','".$val."','".$dopol."','".date("ymdhis")."')";	
	mysql_query($zaprodei);
	$vid=mysql_insert_id();#���������� ID, ��������������� ��� ������� AUTO_INCREMENT ���������� �������� INSERT
	include("chasti/ratinghtml.php");#HTML-����� ������ ��������
	if(strlen(mysql_error())>1){mysql_query("INSERT INTO errors (whois,kod,error) VALUES ('mysql','$zaprodei','".mysql_error()."')");};#���������� ������, ���������� ����� ������ ���������� ��������� ������� MySQL, ��� '' (������ ������) ���� �������� ��������� �������.	
	};#����� ����� �������������� ���� �������� � ��� ����������
   };
}
while ($otvetkl=mysql_fetch_array($otvetklm));

foreach($kon[$g] as $key=>$val)
   {
   if ($chp[$g][$key]==1)
      {
	  $������=$������.' '.$val;
	  $����������=$val;
	  };
   if ($chp[$g][$key]==2)
      {
	  $������=$������.' '.$val;
	  $���������=$val;
	  };
   if ($chp[$g][$key]==3)
      {
	  $������=$������.' '.$val;
	  $��������������=$val;
	  };
   if ($chp[$g][$key]==5)
      {
	  $������=$������.' '.$val;
	  $����������=$val;
	  };	  
   };
$zapros=$zapros.';';
#2)��������
#$julop=goofleu('PHP '.$s[$g][$r].' '.$������);
foreach($julop as $val)
   {
     html($val);
   };


$������='n';
};
?>