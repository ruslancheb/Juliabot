<?php
$rn=$n;
$n=1;
/*
echo '
<style>
.phps{background-color:white;}
.phpvp2{color:blue;}
.phpf{color:red;}
.phpvp1{color:green;}
.nomer{color:white;background-color:black;}
</style>
';
*/
echo '<div class=phps>';
while ($n<=$rn){
$r=0;
$f1nr=$f1[$n];
//if($n==397)test($f1[$n]);
$typ2=$typk[$n];
if (!isset($typk[$n]) or $typk[$n]==1){
$utr1=mysql_query("SELECT * FROM fp WHERE f='$f1nr'");
$m0=mysql_fetch_array($utr1);
if (isset($m0['n']))
{
}
else
{
$utr2=mysql_query("INSERT INTO fp (f,t) VALUES ('$f1nr','$typ2')");
};
}
elseif ($typk[$n]==2)
{
#���� ������ ������� � �������
$flag=false;
#���� ������ ������ �� ������� ����������� ������
$flag2=false;
#����������� �����
$ju=1;
while ($flag==false and $ju<10 and $flag2==false){
$utr1=mysql_query("SELECT * FROM funktions_obuch WHERE i='$f1nr'");
$m0=mysql_fetch_array($utr1);
if (isset($m0['n']))
{
$fp=fopen($_SERVER['DOCUMENT_ROOT'].'/privet/functions/'.$f1nr.'.php',"r");
$script=fread($fp,filesize($_SERVER['DOCUMENT_ROOT'].'/privet/functions/'.$f1nr.'.php'));
fclose($fp);
if ($script==$scriptz)
{
$flag2=true;
}; 
$f1nr=$f1nr.$ju;
}
else
{
$utr2=mysql_query("INSERT INTO funktions_obuch (i) VALUES ('$f1nr')");
$flag=true;
};
$ju++;
};
#���� ��� ����� �������,�� �������� � � ���� � ���������� �������
#���� ������� ��� ����������,�� ��� ������������ ������� ��������������
#� ������� ���������� ������������� � ������������� ������� �������
if ($flag==true){
$fp=fopen($_SERVER['DOCUMENT_ROOT'].'/privet/functions/'.$f1nr.'.php',"w");
fwrite($fp,$scriptz);
fclose($fp);
};
};
if($����������[$n][1][1]==1)
{
$��_�����='$'.$����������[$n][1][0];
}
elseif($����������[$n][1][1]==2)
{
$��_�����=mysql_real_escape_string('"'.$����������[$n][1][0].'"');
}
elseif($����������[$n][1][1]==3)
{
$��_�����=mysql_real_escape_string("'".$����������[$n][1][0]."'");
}
else
{
$��_�����='';
}
$vivod.=''.$n.''.!empty($��_�����)?''.$��_�����.'=' :''.''.$f1[$n].'(';
echo ''.$n.'', !empty($��_�����) ? ''.$��_�����.'=' : '', '<span class="phpf" title="n='.$n.'r='.$r.'ps='.$ps[$n].'">'.$f1[$n].'</span>(';

$za=2;
$vivod='';

while(isset($����������[$n][$za][0])){
if($����������[$n][$za][1]==1)
{
$���_�����='$'.$����������[$n][$za][0];
}
elseif($����������[$n][$za][1]==2)
{
$���_�����=mysql_real_escape_string('"'.$����������[$n][1][0].'"');
}
elseif($����������[$n][$za][1]==3)
{
$���_�����=mysql_real_escape_string("'".$����������[$n][1][0]."'");
}
else
{
$��_�����='';
}
$vivod2=$vivod.htmlspecialchars($���_�����).',';
$vivod.=$���_�����.',';
$za++;
};
$vivod=substr($vivod,0,-1);
echo $vivod2;
$vivod.=');';
echo ');';
$za=0;
echo '<br>';

$r=0;
$n++;
};
echo '</div>';
//echo '<div style="top:300px;left:60%;position:absolute;">�������� ���:<br>';
//echo '<textarea  id="myCpWindow2" class="codepress php" style="width:500px; height:150px; font-family:verdana; font-color:green; font-size:9px; border:1px solid #E0E0E0;">'.htmlspecialchars("$php2").'</textarea>';
//echo '<br>������������ ���:<br>';
//echo '<textarea  id="myCpWindow3" class="codepress php" style="width:500px; height:150px; font-family:verdana; font-color:green; font-size:9px; border:1px solid #E0E0E0;">'.htmlspecialchars("$php").'</textarea>';
//echo '</div>';

$�����2=microtime_float();
$�����_�2=$�����2-$������2-0.000015020370483398;//1.5020370483398E-5 ����� ���������� ����� �������
$obsvrem=$obsvrem+$�����_�2;
echo '<br>����� ���������� �������='.$obsvrem;
?>