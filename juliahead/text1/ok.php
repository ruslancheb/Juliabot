<?php
/////////////////////////////////////////////////������ ���������\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
defined('Ogon') or die( '');
//���� ��������
$provok=0;
//���������� ���������� ��������
if(strlen($sl)>1){
$t=-(strlen($sl)-1);
};
if ($t<-4)
{
$t=-4;
};
$w=$t;
//�������
while ($t<=0)
{
if ($t==0)
{
$z=0;$k=$sl;
}
else
{
$z=substr("$sl",$t);
$k=substr("$sl",0,$t);
};


//��������� 
if ($z==='��' or $z==='��')
{
$z=substr("$sl",-4,2);
$k=substr("$sl",0,-4);
}

if (strpos($oks[$t],'|'.$z.'|')>0){
if ($�����2[$k]['n']) //���� ������ ������
{
$pe2n=$�����2[$k]['n'];;
$uni=$kor['l'];
$per3n=$per2p.'&'.$uni;
$kort=$�����2[$k]['t'];
$korv=$�����2[$k]['v'];
$great_il['0']=$su[$kort.$korv][$z];
if(!empty($great_il['0']))
{
$ssv[$g][$r]=$kor['ss'];
$nome[$g][$r]='w'.$�����2[$k]['n'];
$tre[$g][$r]=$kort;
$kon[$g][$r]='w'.$k;
$�����[$g][$r]=$k;
switch ($kort) {
case 1:
//C��������������
$rod[$g][$r]=$�����2[$k]['rod'];
$pad[$g][$r]=substr($great_il['0'],0,1);
$chi[$g][$r]=substr($great_il['0'],1,1);
$lic[$g][$r]=3;
break;
case 2:
//������
$vre[$g][$r]=substr($great_il['0'],0,1);
$lic[$g][$r]=substr($great_il['0'],1,1);
$chi[$g][$r]=substr($great_il['0'],2,1);
$rod[$g][$r]=substr($great_il['0'],3,1);
$pov[$g][$r]=substr($great_il['0'],4,1);
break;
case 3:
//��������������
$pad[$g][$r]=substr($great_il['0'],0,1);
$rod[$g][$r]=substr($great_il['0'],1,1);
$chi[$g][$r]=substr($great_il['0'],2,1);
break;
};
$provok=1;
break;
};
}
else
{
if(!isset($tre[$g][$r]) and $t<0 and $setting[3]=='��')//���� ���������� ��� ���������� ��� ������ ���������
{
//������
$kon[$g][$r]=$k;
$�����[$g][$r]=$k;
//���������������
$key=$su[11][$z];
if(!empty($key)){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=$su[12][$z];
if(!empty($key)){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=$su[13][$z];
if(!empty($key)){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=$su[14][$z];
if(!empty($key)){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=$su[15][$z];
if(!empty($key)){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=$su[16][$z];
if(!empty($key)){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;

//��������������
$key=$su[31][$z];
if(!empty($key)){
$tre[$g][$r]=3;
$pad[$g][$r]=substr($key,0,1);
$rod[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
};
$key=false;
$key=$su[32][$z];
if(!empty($key)){
$tre[$g][$r]=3;
$pad[$g][$r]=substr($key,0,1);
$rod[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
};
$key=false;



//�������
$key=$su[21][$z];
if(!empty($key)){
$tre[$g][$r]=2;
$vre[$g][$r]=substr($key,0,1);
$lic[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
$rod[$g][$r]=substr($key,3,1);
$pov[$g][$r]=substr($key,4,1);
};
$key=false;
$key=$su[22][$z];
if(!empty($key)){
$tre[$g][$r]=2;
$vre[$g][$r]=substr($key,0,1);
$lic[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
$rod[$g][$r]=substr($key,3,1);
$pov[$g][$r]=substr($key,4,1);
};
$key=false;
$key=$su[23][$z];
if(!empty($key)){
$tre[$g][$r]=2;
$vre[$g][$r]=substr($key,0,1);
$lic[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
$rod[$g][$r]=substr($key,3,1);
$pov[$g][$r]=substr($key,4,1);
};
$key=false;
$key=$su[24][$z];
if(!empty($key)){
$tre[$g][$r]=2;
$vre[$g][$r]=substr($key,0,1);
$lic[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
$rod[$g][$r]=substr($key,3,1);
$pov[$g][$r]=substr($key,4,1);
};
$key=false;
};
//������ ���������� ��������� � ������� �������� ������� ��������� obuch_o
/*���������
$kort=$kor['t'];
$utr=mysql_query("SELECT * FROM obuch_o WHERE o='$z'");
$reu=mysql_fetch_array($utr);
if(isset($reu['n'])){
$e=$reu['k'];
if (!eregi("$k",$e)){
$e=$e.'^'.$k;
$povto=$reu['p'];
$povto++;
$utr=mysql_query("UPDATE obuch_o SET p='$povto',k='$e' WHERE o='$z'");
};
}
else
{
$povto=1;
$utr=mysql_query("INSERT INTO obuch_o (o,p,k,t) VALUES ('$z','$povto','$k','$kort')");
};
*/
};
};
$t++;
};
#echo $provok;
#if ($provok==0 and $pruju!=3)
if ($provok==0 and $setting[1]=='��'){
#����� � ��������
if ($pruju!=3){
#html("http://slovari.yandex.ru/search.xml?text=".$sl."&st_translate=0",3);
};
while ($w<=0)
{
if ($w==0)
{
$z=0;$k=$sl;
}
else
{
$z=substr($sl,$w);
$k=substr($sl,0,$w);
};
$great_il=array_keys($su,$z);
echo $great_il[0];
$ut=mysql_query("SELECT * FROM o WHERE o='$z'");
do{
if (isset($re['n'])){
$vid=$re['v'];
$n=$re['o'];
$j=$re['t'];
$u67=mysql_query("SELECT * FROM obuch_slova WHERE t='$j' and k='$k'");
$m=mysql_fetch_array($u67);
if ($m['t']==$j){
$vi=$m['v'];
$p=$m['p'];
$e=$m['o'];
$yr=$m['t'];
$p1=$m['p1'];
if (substr_count($e,"^")==0){
$p1++;
$u0=mysql_query("UPDATE obuch_slova SET p1='$p1' WHERE k='$k' and t='$j'");
}
else
{
$u0=mysql_query("UPDATE obuch_slova SET p1='0' WHERE k='$k' and t='$j'");
};
if (!eregi("$n",$e) and $j==$yr){
$vir='';
while (strlen($vid)>=1){
$perb=substr("$vid",0,1);
$vid=substr("$vid",1);
if (eregi("$perb",$vi))
{
$vir=$vir.$perb;
};
};

$p++;
$e=$e.'^'.$n;
$u68=mysql_query("UPDATE obuch_slova SET p='$p',o='$e',v='$vir' WHERE k='$k' and t='$j'");
};
}
else
{
$z=$z;
$p=1;
$u69=mysql_query("INSERT INTO obuch_slova (s,k,t,v,p,o) VALUES ('$sl','$k','$j','$vid','$p','$z')");
};
};
}
while ($re=mysql_fetch_array($ut));
#�����
$time_end = microtime_float();
$time = $time_end - $time_start;
#echo "����� ����������� �������: $time ������\n";
$w++;
};
};


?>