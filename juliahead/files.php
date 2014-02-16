<?php
//////////////////////////////////////Создание списка всех файлов с директорий\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function files(){
global $t,$n,$put,$pamstrok,$utr,$r,$pr,$fs,$razm,$mime,$tfsr,$nom,$ujik;
$t=$_SERVER['DOCUMENT_ROOT'].'/privet';
$n=0;
$put[$n]='\\';
$pamstrok='^*';
$utr7=mysql_query("TRUNCATE TABLE files");
while(isset($put[$n]))
{
$r=2;//Чтобы не включать в результат точку и две точки
$pr=0;
$fs=scandir($t.$put[$n]);
while(isset($fs[$r]))
{
if (is_dir($t.$put[$n].$fs[$r]) and !strpos($pamstrok,'*'.$put[$n].$fs[$r].'\\*') and $pr==0)
{
$put[$n+1]=$put[$n].$fs[$r].'\\';
$pr=1;
$pamstrok=$pamstrok.$put[$n+1].'*';
};
if (!is_dir($t.$put[$n].$fs[$r]))
{
$razm=filesize($t.$put[$n].$fs[$r]);
$tfsr=mysql_real_escape_string($put[$n].$fs[$r]);
$utr=mysql_query("INSERT INTO files (f,p,r) VALUES ('$fs[$r]','$tfsr','$razm')");
};
$r++;
};
if ($pr==0)
{
$put[$n]=substr($put[$n],0,-1);
$nom=strripos($put[$n],'\\');
$put[$n+1]=substr($put[$n],0,$nom+1);
if(strlen($put[$n])<2){
$ujik=mysql_query("UPDATE pk SET fi='".date("G")."' WHERE n=1");
echo 'Готово!';
return;
};
};
$n++;
};
};
?>