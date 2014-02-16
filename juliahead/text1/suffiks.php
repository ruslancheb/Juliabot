<?php
/////////////////////////////////////////////////Скрипт суффиксов\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
defined('Ogon') or die( '');
$sl=$kon[$g][$r];
//Флаг проверки
$provok=0;
//Вычисление количества запросов
if(strlen($sl)>1){
$t=-(strlen($sl)-1);
};
if ($t<-4)
{
$t=-4;
};
$w=$t;
//Запросы
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

//Постсуффиксы 
if (strpos($sks[$t],'|'.$z.'|')>0){//Если это окончание
$ko=mysql_query("SELECT * FROM slova_korni_typ WHERE k='$k'");
$kor=mysql_fetch_array($ko);
if (isset($kor['t'])) //Если корень найден в таблице корней
{
$pe2n=$kor['n'];
$uni=$kor['l'];
$per3n=$per2p.'&'.$uni;
$utyu=mysql_query("UPDATE slova_korni_typ SET l='$per2p',op=op+1 WHERE n='$pe2n';");
$kort=$kor['t'];
$korv=$kor['v'];
$great_il=array_keys($suf[$kort.$korv],$z); 
if(isset($great_il['0'])){
$ssv[$g][$r]=$kor['ss'];
$nome[$g][$r]='w'.$kor['n'];
if($kort==2)
{
$kort=9;
};

$tre[$g][$r]=$kort;
$kon[$g][$r]=$k;
switch ($kort) {
case 1:
//Деепричастие
$pad[$g][$r]=substr($great_il['0'],0,1);
$chi[$g][$r]=substr($great_il['0'],1,1);
$lic[$g][$r]=3;
break;
case 2:
//Причастие
$vre[$g][$r]=substr($great_il['0'],0,1);
$lic[$g][$r]=substr($great_il['0'],1,1);
$chi[$g][$r]=substr($great_il['0'],2,1);
$rod[$g][$r]=substr($great_il['0'],3,1);
$pov[$g][$r]=substr($great_il['0'],4,1);
break;
case 3:
//Прилагательное
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
/*Существительные
$key=array_search($z,$su[11]); 
if($key!==false){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=array_search($z,$su[12]); 
if($key!==false){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=array_search($z,$su[13]); 
if($key!==false){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=array_search($z,$su[14]); 
if($key!==false){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=array_search($z,$su[15]); 
if($key!==false){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
$key=array_search($z,$su[16]); 
if($key!==false){$tre[$g][$r]=1;$pad[$g][$r]=substr($key,0,1);$chi[$g][$r]=substr($key,1,1);};$key=false;
//Глаголы
$key=array_search($z,$su[21]); 
if($key!==false){
$tre[$g][$r]=2;
$vre[$g][$r]=substr($key,0,1);
$lic[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
$rod[$g][$r]=substr($key,3,1);
$pov[$g][$r]=substr($key,4,1);
};
$key=false;
$key=array_search($z,$su[22]); 
if($key!==false){
$tre[$g][$r]=2;
$vre[$g][$r]=substr($key,0,1);
$lic[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
$rod[$g][$r]=substr($key,3,1);
$pov[$g][$r]=substr($key,4,1);
};
$key=false;
$key=array_search($z,$su[23]); 
if($key!==false){
$tre[$g][$r]=2;
$vre[$g][$r]=substr($key,0,1);
$lic[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
$rod[$g][$r]=substr($key,3,1);
$pov[$g][$r]=substr($key,4,1);
};
$key=false;
$key=array_search($z,$su[24]); 
if($key!==false){
$tre[$g][$r]=2;
$vre[$g][$r]=substr($key,0,1);
$lic[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
$rod[$g][$r]=substr($key,3,1);
$pov[$g][$r]=substr($key,4,1);
};
$key=false;
//Прилагательные
$key=array_search($z,$su[31]); 
if($key!==false){
$tre[$g][$r]=3;
$pad[$g][$r]=substr($key,0,1);
$rod[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
};
$key=false;
$key=array_search($z,$su[32]); 
if($key!==false){
$tre[$g][$r]=3;
$pad[$g][$r]=substr($key,0,1);
$rod[$g][$r]=substr($key,1,1);
$chi[$g][$r]=substr($key,2,1);
};
$key=false;
//Запись неизвестых окончаний в таблицу обучения таблицы окончаний obuch_o
/*Отключено
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
*/
};

}
elseif($setting[4]=='да')
{
$povto=1;
$utr=mysql_query("INSERT INTO obuch_o (o,p,k) VALUES ('$z','$povto','$k');");
};
$t++;
};

?>