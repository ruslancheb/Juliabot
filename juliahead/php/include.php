<?php
/*
���� ����� ����� �� ���� ������� ��� ������� � ���������,�� 
$per=0;
while($perem<$per) 
{
$per++
}
���� ��������� �����  �� � ����� ����������
$perem=0;
*/
//1) If� ���������� ������
//2)���������
//��������
//���� ����������� ��� ��������
//����� ��������� � ����� ���������




$deisid=15;//��� �� ���������������� ���������
$filename=$str;//��� �������������� �����
$dannie[$deisid]=array(5,7,12);




//��������
if (strlen($php)==0)
{
$php.='<?php ?>';
};
//������ ���������� �� ���������� �������� ������
$ch=0;
$p1=count($dannie);
while ($p1>$ch)
{
//������ �� ���������� ��������� ������ ����������
$pereme=nper($filename);
$celperem='';
$vstavka='$'.$pereme.'='.$dannie[$deisid][$p1].';\r\n';//����������� ����������
$lenvsta=strlen($vstavka);
$lenvstas=$lenvstas+$lenvsta;
$php=substr($php,0,4+$lenvstas).$vstavka.substr($php,-2,2);
};
//���������-��������
if ($deisid=='15')
{
$ch=0;
$vstavka='$'.nper($filename).'='.$p2;
$p1=count($dannie);
while ($p1>$ch)
{
$vstavka.='*'.$dannie[$deisid][$p1];
};
$vstavka.=';\r\n';//����������� ����������
};


//��� � ��� ����� ������� �������� ��
//--���������� ������� ������������� ����
//--������� �������
//--������� ��������� ����
//--����� ����������� ��������
//��������������
/*
���� 
1)���������� ����� ���������
2)���� ������
3)�������� �������

����������� ������������ �������
1)���� ����,����,������������
2)�������� ��������
3)���������� �������� 

������� �������:
1)��������,���������,�������,�����������,�������� ������� �� ������� ��� ����������� ��������
2)��������,��������������,�������� ������� � ������� ������  ��� �������� ������� � ������� ������� � �������
3)��������,�������� ��������
4)��������,�������������� ������� �������� ��� �������� ��������
(������ ������)

��22.00




*/
//�������� ���� ���������� � 









/*
$pereh=substr($php,$zakrt['1']['0'],$zakrt['2']['0']-$zakrt['1']['0']);
print_r($zakrt);
echo '|76'.$pereh.'|'.$zakrt['1']['0'].'|'.$zakrt['2']['0'].'90|';
echo '<br>';
*/

?>