<?php
if(eregi("3|4",$in[$g]) and $pruju==3)
{
//��� ��� ������� ������?
//������������ ���������� �������
#����� ���������� ������
$������='';
$zapros="SELECT * FROM unikp WHERE 1";
foreach($kon[$g] as $key=>$val)
   {
   if ($chp[$g][$key]==1)
      {
	  $������=$������.' '.$val;
      $zapros=$zapros." AND o LIKE '% ".$val."%'";
	  $����������=$val;
	  };
   if ($chp[$g][$key]==2)
      {
	  $������=$������.' '.$val;
      $zapros=$zapros." AND o LIKE '% ".$val."%'";
	  $���������=$val;
	  };
   if ($chp[$g][$key]==3)
      {
	  $������=$������.' '.$val;
      $zapros=$zapros." AND o LIKE '% ".$val."%'";
	  $��������������=$val;
	  };
   if ($chp[$g][$key]==5)
      {
	  $������=$������.' '.$val;
	  $����������=$val;
      $zapros=$zapros." AND o LIKE '% ".$val."%'";
	  };
   };
$zapros=$zapros.';';  
#echo $zapros;
echo '</div>
<span>
<a href="javascript: displ(\'var'.$g.'\')">����� ����������� � �������</a>
<div id="var'.$g.'" style="background-color:blue;display:none">';
if (strlen($zapros)>strlen("SELECT * FROM unikp WHERE 1")+1){$otvetklm=mysql_query($zapros);};
do 
{
/*
$ipp=$otvetkl['ui'];
$ip=mysql_real_escape_string($_SERVER["REMOTE_ADDR"]);
if($ipp==$_SERVER["REMOTE_ADDR"])
{
�=>��
��=>��
}
else
{
�=>�� ��� ���
��=>���
};
*/
$pruju=true;
//��� ������������ ��������� � ������ �����
$�������=text($otvetkl['o'],4,$���_�);
echo '|';
foreach($������� as $val)
   {
      echo '<div style="background-color:green">'.$val.'</div>';
   };
echo '|';   
  //����� � ���������� ������ 1)���������� 2)��������� 3)�������������� 4)����������
echo $����������.' '.$���������.' '.$��������������.' '.$����������.'$';   
   $�������=array();
}
while ($otvetkl=mysql_fetch_array($otvetklm));
echo '</div></span><div style="background-color:white">';
$pruju=3;
#2 ����� ������ �� ������ � �������� ������
$������=$ot[$g];
echo $������.'������';

$julop=goofleu($������);
foreach($julop as $val)
   {
     html($val);
   };

};
?>