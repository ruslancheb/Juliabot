<?php
//���������
//error_reporting(0);
set_time_limit (100000);
ini_set('memory_limit', '500M');
include 'install.php';
define ('Ogon','Ogon');
//����������� ���� �������� ����������� � \juliahead
$t=$_SERVER['DOCUMENT_ROOT'].'\\privet\\juliahead';
$fs=scandir($t);
foreach($fs as $val)
   {
	 if(end(explode(".",$val))=='php' and strlen($val)>3) {include ($t.'\\'.$val); }
   };
?>