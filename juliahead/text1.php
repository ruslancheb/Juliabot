<?php
defined('Ogon') or die('');
/////////////////////////////////////////////////////////��������� ��������������� ������\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
$�����=array();//������ ������-� ������ ��������� ��� ��� �������������� ������-����� �����
/*
1)����� ����� �����������
2)����� �����������
3)����� ������
4)����� ����� ����������
�����-�������������� ��������
*/
function text($otve,$pruju,$���_�){
global $�����,$oks,$su,$suf,$sks,$�����,$�����2,$�����,$g,$r,$prc,$ot,$pred,$tre,$kon,$koren3,$��������,$����_��������_����_�����_�����������,$�����_�������_�����_�����������,$chp,$pad,$gll1,$lic,$glc1,$chi,$nom,$����������,$osn,$nome,$���������,$sv31,$sv32,$sv33,$ssv,$sv34,$svn,$setting,$prc1,$prp1,$prr1,$rod,$nom2,$������,$prp8,$vopr,$nom8,$prp,$prr,$nom0,$gll,$glc,$nom1,$pov,$������,$������,$chd,$nomegr,$kongr,$v,$����,$cicl7,$���_��,$������,$i_g,$i,$�����_�������,$koren,$temp_arr,$k2,$v2,$�����_�_�����_������_������,$�����_�_�����_�����_������,$bmli,$funm,$dls,$n,$func,$d1,$d1r,$r_d,$r_s,$mes_a,$mes_b,$x_mes,$stroks,$s,$������_����,$dan,$fuda,$��������_�������,$��_�����,$�����_�_�����_������,$�����_�_�����_�����,$�����_�_�����_���������,$�����_�����_�����������,$��_��,$��������,$functions,$result_temp,$res,$�����_����������,$arr,$result,$bne,$����_������_�����������,$�����������_,$funcot,$k,$slovo,$������_��������_��_����_�_�����,$���_�����,$�����,$otvet,$���������,$�������,$���������,$handle2,$_SERVER,$�����������_������,$������_�����������,$������_������,$fud1,$�������;
global $�,$g,$r,$t,$povt,$pror,$ot,$in,$punkz,$������,$var1,$var2,$var3,$var4,$var,$dp,$dp2,$otp,$slo,$varp,$������_����,$np,$prep,$pre,$no,$sloost,$s,$tre,$kon,$sl,$�����,$pe2n,$uni,$ssv,$nome,$chi,$pad,$vre,$rod,$lic,$per2p,$utyu,$sl2,$provok;
#####################################################C��� ����������###############################################
//register_tick_function('tick_handler');
include 'text1/pred.php';
//unregister_tick_function('tick_handler');
###################################################����������� ����������######################################
//��������� �����������//
$g=0;
$r=0;
$prc='';//����� ����� ����
while (isset($ot[$g])){
for($lo=0;$lo<5;$lo++)
{
include 'text1/chleni.php';//����������� ������ �����������
$r=0;
while (isset($tre[$g][$r]))
{
$����=false;
$cicl7=0;
$���_��=0;

/////////////////////������ ������//////////////////////
$������=$kon[$g][$r];
$�����=$tre[$g][$r];//
$gh=0;
$io=0;//������� �������� ������ ������� �����

foreach($������[$lo] as $kk=>$vk)
{
$key=split('|',$kk);
/*
$key[0]-����� ������� � ����� �� ������
$key[1]-������ �����
$key[2]-����� ����
$key[3]-�����
$key[4]-�����
$key[5]-�����
*/
$flag=true;
if(strlen($key[1])){if(strpos(''.$key[1],''.$kon[$g][$i])===false){$flag=false;}}//������
if(strlen($key[2])){if(strpos(''.$key[2],''.$tre[$g][$i])===false){$flag=false;}}//����� ����
if(strlen($key[3])){if(strpos(''.$key[3],''.$pad[$g][$i])===false){$flag=false;}}//�����
if(strlen($key[4])){if(strpos(''.$key[4],''.$chi[$g][$i])===false){$flag=false;}}//�����
if(strlen($key[5])){if(strpos(''.$key[5],''.$vre[$g][$i])===false){$flag=false;}}//�����

if($flag===true)
{
$�������=$vk;
//���� ������ �������� ��� ��� ����� ,�� ��� ���������� ��������� ���

//����� � ������ �������
for($i=$r;$kon[$g][$i];$i++)
{
for($h=0;$�������[$h];$h++)
{
$v=$�������[$h];
$k=$h;

$flag=true;
//���������� �� ��������� ����

if($v[kon]){if(strpos(''.$v[kon],''.$kon[$g][$i])===false){$flag=false;}}//������
if($v[tre]){if(strpos(''.$v[tre],''.$tre[$g][$i])===false){$flag=false;}}//����� ����
if($v[pad]){if(strpos(''.$v[pad],''.$pad[$g][$i])===false){$flag=false;}}//�����
if($v[chi]){if(strpos(''.$v[chi],''.$chi[$g][$i])===false){$flag=false;}}//�����
if($v[vre]){if(strpos(''.$v[vre],''.$vre[$g][$i])===false){$flag=false;}}//�����

//���������� �� ����������
if($v[int1]){if($io>$v[int1]){}else{$flag=false;};}//0
if($v[int2]){if($io<=$v[int2]){}else{$flag=false;};}//3

//���� ����� �������� ������������� ��������� ����� ������� foreach

//if($i==2 and $h==5){var_dump($flag);echo '|'.$io.'|';}

if($flag===true)
{
//��� for ��������� ������� ��������� �� ���������� �� ������������� ��������
if(!$v['*'])
{
for($z=$io+1;$�������[$z];$z++)
{

if($z==6)
{
echo $�������[$z]['int1'];
}
if(!$�������[$z][int1] and !$�������[$z][int2] and !$�������[$z]['*']){
$io=$z;
break;
};
}
}

//if($i==6 and $h==4){var_dump($flag);}
//5=>2 ������ ��� �� ������ ���������� � 3 ��
//
if(!$exit[$k]){
//$exit[$k]=array('p'=>$g,'n'=>$i);
$exit[$k]=$kon[$g][$i];
}
}

}
//if(count($�������)==count($exit))break; ��� ��� �� ������� ������ � *
}




}
}









if($exit)
{
mysql_query('INSERT INTO esli_to (podl1,skaz1,podl2,skaz2) VALUES ("'.$exit[1].'","'.$exit[2].'","'.$exit[4].'","'.$exit[5].'");');
unset($exit);
}

$r++;
};
$r=0;
//include('text1/otveti.php');
//include('text1/prikazi.php');
$g++;
};
}
$funcot=array();
	foreach ($funcot as $k=>$v)
	{
	$slovo=$������_��������_��_����_�_�����[$v];
	$���_�����=substr($slovo,0,1);
	$�����=substr($slovo,1);
	$otvet.=$���������.$�����.$�������.$���������.' ';
	}
	if(!empty($otvet))
	{
	$h2 = fopen($_SERVER['DOCUMENT_ROOT'].'/privet/voise/g.dic','w');fwrite($h2,$otvet); fclose($h2);
	//system('start E:\Server\home\localhost\privet\voise\Govorilka_cp.exe -e0 -d "E:\Server\home\localhost\privet\voise\Digalo.dic" -f "E:\Server\home\localhost\privet\voise\g.dic"');
	echo '<div class="otvet">'.$otvet.'</div>';
	}
//perebor($func);
//otvet($func);
########################################���������� �� ������ � ��� php#############################
//$�����������_������[$������_�����������]=array($������_������);
########################################################�����######################################
include('text1/vivod.php');#������ ������ �����������
return $�������;
};
?>