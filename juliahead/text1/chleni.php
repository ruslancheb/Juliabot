<?php
$pred=array();
while (isset($tre[$g][$r])){
//test($kon[$g][$r]);
$koren3=$kon[$g][$r];
//test($��������['����']);


$����_��������_����_�����_�����������[$r]=array_search($kon[$g][$r],$�����_�������_�����_�����������);//����, ����������� �� ����� ����� ���� ������� ����� �����������
if($����_��������_����_�����_�����������[$r]!==FALSE)$chp[$g][$r]=7;
//��������������� ������������� ������ (����������)
#����� ����������� � ����������
if (eregi("5|1",$tre[$g][$r]) and eregi("1",$pad[$g][$r]) and !isset($chp[$g][$r])){
if (eregi("$gll1",$lic[$g][$r]) and eregi("$glc1",$chi[$g][$r])){
$chp[$g][$r]=1;
$chp[$g][$nom]=2;
$����������[$osn]=$nome[$g][$r];
$���������[$osn]=$nome[$g][$nom];
$osn++;
//������ ����� � Mysql
$sv31=$nome[$g][$r];
$sv32=$nome[$g][$nom];
$sv33=$ssv[$g][$r];
$sv34=$ssv[$g][$nom];
$svn='a';
if($setting[5]=='��')ssv($sv31,$sv32,$sv33,$sv34,$svn);
};
#����� ����������� � ���������������
#echo '|'.$prc1.'|'.$chi[$g][$r].'|'.$prp1.'|'.$pad[$g][$r].'|'.$prr1.'|'.$rod[$g][$r].'|';
if (similar_text("$prc1",$chi[$g][$r]) and similar_text("$prp1",$pad[$g][$r]) and similar_text("$prr1",$rod[$g][$r])){
$chp[$g][$nom2]=3;
$������[$osn]=$nome[$g][$nom2];
//������ ����� � Mysql
$sv31=$nome[$g][$r];
$sv32=$nome[$g][$nom2];
$sv33=$ssv[$g][$r];
$sv34=$ssv[$g][$nom2];
$svn='d';
if($setting[5]=='��')ssv($sv31,$sv32,$sv33,$sv34,$svn);
};
#����� ����������� � �������
if (similar_text("$prp8",$pad[$g][$r]) and $vopr<$g){
//������ ����� � Mysql
$sv31=$nome[$g][$r];
$sv32=$nome[$g][$nom8];
$sv33=$ssv[$g][$r];
$sv34=$ssv[$g][$nom8];
$svn='b';
if($setting[5]=='��')ssv($sv31,$sv32,$sv33,$sv34,$svn);
};
//����� ����������� � ���������������
$prc=$chi[$g][$r];
$prp=$pad[$g][$r];
$prr=$rod[$g][$r];
$nom0=$r;
//C���� ����������� �� ��������� 
$gll=$lic[$g][$r];
$glc=$chi[$g][$r];
$nom1=$r;
};
//������ (����������� �� �����������)
if (eregi("2",$tre[$g][$r]) and !isset($chp[$g][$r])){
if (eregi("$gll",$lic[$g][$r]) and eregi("$glc",$chi[$g][$r])){
$chp[$g][$r]=2;
$chp[$g][$nom1]=1;
$����������[$osn]=$nome[$g][$nom1];
$���������[$osn]=$nome[$g][$r];
$osn++;
//������ ����� � Mysql
$sv31=$nome[$g][$r];
$sv32=$nome[$g][$nom1];
$sv33=$ssv[$g][$r];
$sv34=$ssv[$g][$nom1];

$svn='a';
if($setting[5]=='��')ssv($sv31,$sv32,$sv33,$sv34,$svn);
};
if ($pov[$g][$r]==1){
$������=array($g,$r);
};
$gll1=$lic[$g][$r];
$glc1=$chi[$g][$r];
$nom=$r;
};
//����������
#����� ���������� � ��������
if (eregi("6",$tre[$g][$r]) and !isset($chp[$g][$r])){
$chp[$g][$r]=5;
$������[$osn][$chd]=$nome[$g][$r];
$chd++;
};
if (eregi("5|1",$tre[$g][$r]) and !eregi(1,$pad[$g][$r]) and !isset($chp[$g][$r])){
$chp[$g][$r]=5;
$������[$osn][$chd]=$nome[$g][$r];
$chd++;
#����� ���������� � ���������������
#echo '|'.$prc1.'|'.$chi[$g][$r].'|'.$prp1.'|'.$pad[$g][$r].'|'.$prr1.'|'.$rod[$g][$r].'|';
if (similar_text("$prc1",$chi[$g][$r]) and similar_text("$prp1",$pad[$g][$r]) and similar_text("$prr1",$rod[$g][$r])){
$chp[$g][$nom2]=3;
//������ ����� � Mysql
$sv31=$nome[$g][$r];
$sv32=$nome[$g][$nom2];
$sv33=$ssv[$g][$r];
$sv34=$ssv[$g][$nom2];
$svn='d';
if($setting[5]=='��')ssv($sv31,$sv32,$sv33,$sv34,$svn);
};
#����� ���������� � �������
if (similar_text("$prp8",$pad[$g][$r])){
//������ ����� � Mysql
$sv31=$nome[$g][$r];
$sv32=$nome[$g][$nom8];
$sv33=$ssv[$g][$r];
$sv34=$ssv[$g][$nom8];
$svn='b';
if($setting[5]=='��')ssv($sv31,$sv32,$sv33,$sv34,$svn);
};
$prc=$chi[$g][$r];
$prp=$pad[$g][$r];
$prr=$rod[$g][$r];
};
//��������������  (����������� �� ����������� � ����������)
if (eregi("3",$tre[$g][$r]) and !isset($chp[$g][$r])){
if (similar_text("$prc",$chi[$g][$r]) and similar_text("$prp",$pad[$g][$r]) and  similar_text("$prr",$rod[$g][$r])){
$chp[$g][$r]=3;
if($tre[$g][$nom0]==1 or $tre[$g][$nom0]==5)
{
$chp[$g][$nom0]=1;
}else{$chp[$g][$nom0]=5;};
//������ ����� � Mysql
$sv31=$nome[$g][$r];
$sv32=$nome[$g][$nom0];
$sv33=$ssv[$g][$r];
$sv34=$ssv[$g][$nom0];
$svn='d';
if($setting[5]=='��')ssv($sv31,$sv32,$sv33,$sv34,$svn);
};
$prc1=$chi[$g][$r];
$prp1=$pad[$g][$r];
$prr1=$rod[$g][$r];
$nom2=$r;
};
//������������� ����� ����
if (!isset($chp[$g][$r])){
$chp[$g][$r]=99;
};
//1)���� ����� �� ���� ���������������� => ��� ���������
//$nomegr=$nome[$g][$r];
//include_once 'text1\slova.php';
$kongr=$kon[$g][$r];
if(!empty($kongr))$pred[$kongr]=$r;

$r++;
};
$r=0;
?>