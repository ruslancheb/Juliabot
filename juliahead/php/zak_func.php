<?php
//������� �����������
if($f1[$n]=='include' or $f1[$n]=='require' or $f1[$n]=='include_once' or $f1[$n]=='require_once')
{
$str=$����������_�����[$n][$���][1];
$st=fopen($str,"r");$include=fread($st,filesize($str));fclose($st);//�������� ������������ ������
$f=$include.$f;
}
//�������� ���� �� ������ ����� ��������� �������,���� ��� �� �������� ������� ���� �������������
if($bs===true)
{
$za=$re[$n][$sk];
$f2[$n][$za]=substr($f,0,$prep-1);
$ps[$n][$za]=$psn;
$sk--;
$���=1;//����� �������� ����������
}
elseif($bs===false and !$f1[$n])
{
$f1[$n]='��';
$f2[$n][0]=substr($f,0,$prep-1);
$�������[$n]=$fu;//������ �������
$�������[$n]=$if;//������ �������
$�����[$n]=$wh;//������ ������
$ps[$n]=$psn;
}
?>