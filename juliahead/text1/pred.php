<?php
$g=0;//������� �����������
$r=0;//������� ���� � �����������
$t=-4;//��������� -���������� �����
$povt=0;//���������� ������ ���� � �����������
$pror=0;//��������� ����������
$ot=array();
$in=array();
$punkz=array('-','�','(',')','"','�','�','�','�','�','�',';',',',':');//����� ����������
$������='n';//���������� ������
///�������� ����� � ������
#������� ������ � ��������� ����� � ������� ��
while (eregi("-\r\n",$otve)){
$otve=str_replace("-\r\n",'',$otve); 
};
#������� �������� ����� �������� �� �������
while (eregi("\r\n",$otve)){
$otve=str_replace("\r\n",' ',$otve); 
};
///���������� �� ����������� � �����
while (strlen($otve)>0){
$var1=strpos("$otve",".");
$var2=strpos("$otve","!");
$var3=strpos("$otve","?");
$var4=strpos("$otve","�");
if (strlen($var1)<1){
$var1=1000000;
};
if (strlen($var2)<1){
$var2=1000000;
};
if (strlen($var3)<1){
$var3=1000000;
};
if (strlen($var4)<1){
$var4=1000000;
};
if($var1<$var2 and $var1<$var3 and $var1<$var4)
{
$var=$var1;
$in[$g]=1;//�����
}
elseif($var2<$var1 and $var2<$var3 and $var2<$var4)
{
$in[$g]=2;//�����
$var=$var2;
}
elseif($var3<$var1 and $var3<$var2 and $var3<$var4){
$in[$g]=3;//������
$var=$var3;
}
elseif($var4<$var1 and $var4<$var2 and $var4<$var3){
$in[$g]=5;//������
$var=$var4;
};
$ot[$g]=substr("$otve",0,$var);
$var++;
if (!isset($in[$g])){
$in[$g]=1;
$ot[$g]=$otve;
$otve='';
};
$otve=substr("$otve",$var);
$var='0';
if (strlen($ot[$g])==0){
$dp=$g-1;
$dp2=$g-2;
if($in[$g]==1 and $in[$dp]==1){
$in[$dp]=5;
};
if($in[$g]>1 and $in[$dp]>1 and $in[$dp]!==$in[$g]){
$in[$dp]=4;
};
};
///���������� �� �����
//$ot[$g]=trim($ot[$g]);
$otp[$g]=$ot[$g];
$r=0;
while (strlen($otp[$g])>=1){
if (!isset($slo[$r])){
$otp[$g]=trim($otp[$g]);
$varp=strpos("$otp[$g]"," ");
if ($varp==false){
$slo[$r]=$otp[$g];
$otp[$g]='';
}else{
$slo[$r]=substr("$otp[$g]",0,$varp);
$otp[$g]=substr("$otp[$g]",$varp);
while(substr("$otp[$g]",0,1)==' ')
{
$otp[$g]=substr("$otp[$g]",1);
$������_����[$g][$r].=' ';
}
};
//�������������� (�����������) ����� ����������
$np=0;
if (eregi('[-\�\(\)"������;,:]',$slo[$r])){
$prep=100000;
while (isset($punkz[$np])){
$pre=strpos($slo[$r],$punkz[$np]);
$pre++;
if ($pre==true and $pre<$prep){
$prep=$pre;
$no=$np;
};
$np++;
};
if ($prep>=0 and $prep!==100000){
$sloost=substr("$slo[$r]",$prep);
$prep--;
$slo[$r]=substr("$slo[$r]",0,$prep);
if (!strlen($slo[$r])==0){
$r++;
$pror=5;
$������_����[$g][$r]=$������_����[$g][$r-1];
$������_����[$g][$r-1]='';
};
$s[$g][$r]=$slo[$r];
$tre[$g][$r]='p'.$no;
$kon[$g][$r]=$punkz[$no];
$slo[$r]=$punkz[$no];
if ($pror==5){$pror=0;$r--;};
$otp[$g]=$sloost.' '.$otp[$g];
};
};
};
$s[$g][$r]=$slo[$r];
$sl=strtolower($slo[$r]);
//�������� �� ���-�����,�����-�������,����� � � �
if (!empty($�����[$sl]['n'])){
$pe2n=$�����[$sl]['n'];
$uni=$�����[$sl]['le'];
$ssv[$g][$r]=$�����[$sl]['ss'];
$nome[$g][$r]='z'.$�����[$sl]['n'];
$tre[$g][$r]=$�����[$sl]['t'];
$chi[$g][$r]=$�����[$sl]['c'];
$pad[$g][$r]=$�����[$sl]['p'];
$vre[$g][$r]=$�����[$sl]['w'];
$rod[$g][$r]=$�����[$sl]['r'];
$lic[$g][$r]=$�����[$sl]['l'];
$kon[$g][$r]=$sl;//��������� ��� ����� � ����������
$�����[$g][$r]=$sl;
$per2p=$per2p.'&'.$uni;
//$utyu=mysql_query("UPDATE p SET le='$per2p',op=op+1 WHERE n='$pe2n';");
}
elseif (preg_match("/[-0-9a-zA-Z]/i",$sl))
{
$tre[$g][$r]=1;
$chi[$g][$r]=1;
$pad[$g][$r]=4;
$kon[$g][$r]=$sl;//��������� ��� ����� � ����������
$�����[$g][$r]=$sl;
$nome[$g][$r]='z'.$sl;	
}
elseif (is_numeric($sl)===true)
{
$tre[$g][$r]=4;
$kon[$g][$r]=$sl;
}
else
{
$sl2=$sl;

//�������� �� ���������
include 'ok.php';
//�������� �� ��������
//if($provok==1)
include 'suffiks.php';//���� ������ ����� ������ � �������,�� ��������� �� ��������
if(!$tre[$g][$r])
{
$kon[$g][$r]=$sl2;
$�����[$g][$r]=$sl;
};
};
//����������� ������ ����
//������������� �����
if (!isset($tre[$g][$r])){
$tre[$g][$r]=99;
};


$res=false;
if($tre[$g][$r]==5)
{
$g2=$g;
for ($i1=$g2;$tre[$i1]; $i1--) {
$r2=count($tre[$i1])-1;
for ($i2=$r2;$tre[$i1][$i2]; $i2--) {
if(
$tre[$i1][$i2]==1
and 
$chi[$g][$r]==$chi[$i1][$i2]
and 
$lic[$g][$r]==$lic[$i1][$i2]
and 
$rod[$g][$r]==$rod[$i1][$i2]
)
{
$tre[$g][$r]=$tre[$i1][$i2];
$chi[$g][$r]=$chi[$i1][$i2];
$pad[$g][$r]=$pad[$i1][$i2];
$kon[$g][$r]=$kon[$i1][$i2];//��������� ��� ����� � ����������
$�����[$g][$r]=$�����[$i1][$i2];
$nome[$g][$r]=$nome[$i1][$i2];	
$res=true;
break;
}
}
if($res===true)
{
break;
}
}
}





$r++;
};
//������� ��������� ����
$slo=array();
//���� ��� ���������� ������������� ������
if (strlen($ot[$g])>1){
$g++;
};




};
?>