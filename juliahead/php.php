<?php
#���� ������ ������ ���������� � ������
////////////////////////////////////////////////////////////////////////////////////////////PHP\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
#������ ��� �������������� PHP ��������
/*
1)�������������     			   php/init.php
4)����� ����������� ��������       php/vivod.php
���������� ����������
*/
#������ �� ��������� []  => {}.
#?php # echo "�������";?
#$POST= empty($_POST[) || !is_array($_POST) ? array() : $_POST
function php_kod_error($error)
{
switch(error) // ������������� ���������
{
   case 1: // ����������� ��������� 1
   break;
   case 2: // ����������� ��������� 2
   break;
   default:		
	break;   
}
}
function php($str){
global $ps,$f1,$����������,$f2,$vivod;
include('php/init.php');//�������������
while ($prep!=1000000){
$prep=1000000;
//������� ������ ������� �������� � �������
while ($np<count($pun)){
$pre=strpos("$f",$pun[$np],$tyu);
$pre++;
if ($pre==true and $pre<$prep)
{
$prep=$pre;
$no=$np;
};
$np++;
};
$np=0;
$psn=$psn+$prep-$tyu;
$�����[$cicl]=$psn; //���������� ������������ ��������
$tyu=0;
if ($prep>=0 and $prep!==1000000){
//=
if ($sk==0 and $k1==0 and $k2==0 and $no==0)
{
trim(substr($f,0,$prep-1));
include_once('php/prmn.php');//�������� ����� ����������
$ps[$n][$sk]=$cicl;
$f=substr($f,$prep);
}
//( ��� ������������
elseif
(
($k1==0 and $k2==0 and $no==1)
or
($no==4 and $k2==0 and $sk==0)
or
($no==5 and $k1==0 and $sk==0)
)
{
$�������=trim(substr($f,0,$prep-1));
if($��������[$�������])
{
if(!$����������[$n][$���][1])
{
//����:C������ ������ ������������ ���������
//$�������[$����_��_����]=$n;
$f1[$n]=$�������;
$����_���=1;
}
else
{
php_kod_error('1');
}
}
else
{
$f1[$n]=$�������;
}
$ps[$n]=$psn;
$f=substr($f,$prep);
if($k1==0 and $k2==0 and $no==1)$sk++;
$���++;
$re[$n][$sk]=0;
}
//���������������� ������
elseif
(
$k1==0 and $k2==0 and $no==2
)
{
$za=$re[$n][$sk];
$ps[$n][$za]=$psn;
test($���);
include('php/prmn.php');//�������� ����� ����������
$sk--;
$f=substr($f,$prep);
$���=1;//����� �������� ����������
$n++;
}
//�������
elseif($k1==0 and $k2==0 and $no==3)
{
$za=$re[$n][$sk];
$dannie=substr($f,0,$prep-1);
$dannie=trim($dannie);
$f2[$n][$za]=$dannie;
$ps[$n][$za]=$psn;
include('php/prmn.php');//�������� ����� ����������
$re[$n][$sk]++;
$���=1;//����� �������� ����������
$f=substr($f,$prep);
$���=0;
}
//������� �������
elseif($no==4 and $k2==0)
{if($k1==0){$k1=1;}else{$k1=0;$���_�����=2;};
$tyu=$prep;}
//��������� �������
elseif($no==5 and $k1==0)
{if($k2==0){$k2=1;}else{$k2=0;$���_�����=3;};$tyu=$prep;}
//������ �������������
elseif($no==6 and $k2==1)
{
$tyu=$prep+1;
}
elseif($no==6 and $k1==1)
{
$tyu=$prep+1;
}
//;-�������� �������
elseif($no==7 and $k1==0 and $k2==0)
{
include('php/zak_func.php');//�������� �������
//include('php/prmn.php');//�������� ����� ����������
$bs=false;
$f=substr($f,$prep);
$zakrt[$n]=$psn;
$f1n[$n]=$cicl;
$���=0;
}
elseif($no==8 and $k1==0 and $k2==0)
{
$����_��_����++;
$��[$����_��_����]=$n;
//�������� ���������
//$�������[$n]=�������=>�������;

test('6');
$typk[$n]=1;

$put[$n][$sk]=$pute;
$tyu=$prep;
}
elseif($no==9 and $k1==0 and $k2==0)
{
$����_��_����++;
if($����_��_����==$����_��_����)
{
$n_vr=$��[$����_��_����];
$�������[$n_vr]=$n;
}
$jk=1;
$tyu=$prep;
if($prizakr[$xm]=='fu')$fu--;
if($prizakr[$xm]=='if')$if--;
if($prizakr[$xm]=='wh')$wh--;
$prizakr[$xm]='';
$xm--;
}
elseif($no==10 and $k1==0 and $k2==0)
{$pun=array('','','','','',"",'','','','','','*/',"",'','','','','','');}
elseif($no==11 and $k1==0 and $k2==0)
{$f=substr($f,$prep+2);$pun=$�������;}
elseif($no==12 and $k1==0 and $k2==0)
{$f=substr($f,$prep);$pun=$�������;}
elseif($no==13 and $k1==0 and $k2==0)
{$pun=array('','','','','',"",'','','','','','',"\r\n",'','','','','','');}
elseif($no==14 and $k1==0 and $k2==0)
{
$pun=array('','','','','',"",'','','','','','',"\r\n",'','','','','','');
}
#$-����������
elseif($no==15 and $k1==0 and $k2==0)
{
$���_�����=1;
$f=substr($f,$prep);
}
#[-���������� �������� �������
elseif($no==16 and $k1==0 and $k2==0)
{
$tyu=$prep;
}
#]-���������� �������� �������
elseif($no==17 and $k1==0 and $k2==0)
{
$tyu=$prep;
}
#.-���������� �����������
elseif($no==18 and $k1==0 and $k2==0)
{
include_once('php/prmn.php');//�������� ����� ����������
$���++;
$���++;
$f=substr($f,$prep);
}
#\-������ ������������� ������ �������
elseif($no==19 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//!���� ���������
elseif($no==20 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//?���� ������ if
elseif($no==21 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//:���� ���� if
elseif($no==22 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//������ ������ @
elseif($no==23 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//������
elseif($no==24 and $k1==0 and $k2==0 and $sk==0)
{
if($prep!==1)
{
//������,���� ����� ������� ����� ������,�� ����� ������ ������������ �� ��� ������ ������
$�������=trim(substr($f,0,$prep-1));

if($�������=='or' and $f1[$n]){
//���������� �������� �������,���� ������� ���� ������� ��� �������,��������� ��� ���
$n++;
}

if($�������=='function'){$fu++;$prizakr[$xm]='if';$xm++;}
if($�������=='if'){$if++;$prizakr[$xm]='if';$xm++;}
if($�������=='while'){$wh++;$prizakr[$xm]='wh';$xm++;}
$�������[$n]=$fu;//������ �������
$�������[$n]=$if;//������ �������
$�����[$n]=$wh;//������ ������
$�������[$n]=$fu;//������ �������
$�������[$n]=$if;//������ �������
$�����[$n]=$wh;//������ ������
$f1[$n]=$�������;
$ps[$n]=$psn;
$sk++;
$re[$n][$sk]=0;
$bs=true;
}
$f=substr($f,$prep);
}
//,��� ������� if � ������ if � ����� �����������
elseif($no==3 and $sk==0)//���������
{
$f=substr($f,$prep);
}
//������� �������� ?php
elseif($no==26 and $k1==0 and $k2==0)
{
$f=substr($f,$prep+5);$pun=$�������;
}
//������ �������� ���?
elseif($no==27 and $k1==0 and $k2==0)
{
if(!empty($f1[$n]))
{
include('php/zak_func.php');
}
$pun=array('','','','','',"",'','','','','','*/',"",'','','','','','');
}
elseif($no==28 and $k1==0 and $k2==0)
{
}
else{$tyu=$prep;};
if($f1[$n])
{
//$f1[$n][$sk]=substr($f,0,$prep-1);
}
};
$cicl++;
};
###############################################����� ������������ ����#############################
include('php/poisk.php');
##############################################����� �����������###############################################################
include('php/vivod.php');
include('php/musor.php');
};
?>