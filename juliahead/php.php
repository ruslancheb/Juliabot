<?php
#Этот скрипт должен находиться в сердце
////////////////////////////////////////////////////////////////////////////////////////////PHP\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
#Скрипт для редактирования PHP скриптов
/*
1)Инициализация     			   php/init.php
4)Вывод результатов человеку       php/vivod.php
переменная переменных
*/
#Работа со символами []  => {}.
#?php # echo "простой";?
#$POST= empty($_POST[) || !is_array($_POST) ? array() : $_POST
function php_kod_error($error)
{
switch(error) // переключающее выражение
{
   case 1: // константное выражение 1
   break;
   case 2: // константное выражение 2
   break;
   default:		
	break;   
}
}
function php($str){
global $ps,$f1,$переменные,$f2,$vivod;
include('php/init.php');//Инициализация
while ($prep!=1000000){
$prep=1000000;
//Находит первую позицию символов в массиве
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
$адрес[$cicl]=$psn; //Сохранение расположения сивмолов
$tyu=0;
if ($prep>=0 and $prep!==1000000){
//=
if ($sk==0 and $k1==0 and $k2==0 and $no==0)
{
trim(substr($f,0,$prep-1));
include_once('php/prmn.php');//Создание новой переменной
$ps[$n][$sk]=$cicl;
$f=substr($f,$prep);
}
//( или нестандартно
elseif
(
($k1==0 and $k2==0 and $no==1)
or
($no==4 and $k2==0 and $sk==0)
or
($no==5 and $k1==0 and $sk==0)
)
{
$функция=trim(substr($f,0,$prep-1));
if($переходы[$функция])
{
if(!$переменные[$n][$нмп][1])
{
//Цель:Cоздать массив возможностей переходов
//$переход[$откр_кр_скоб]=$n;
$f1[$n]=$функция;
$флаг_усл=1;
}
else
{
php_kod_error('1');
}
}
else
{
$f1[$n]=$функция;
}
$ps[$n]=$psn;
$f=substr($f,$prep);
if($k1==0 and $k2==0 and $no==1)$sk++;
$нмп++;
$re[$n][$sk]=0;
}
//Закрывающающаяся скобка
elseif
(
$k1==0 and $k2==0 and $no==2
)
{
$za=$re[$n][$sk];
$ps[$n][$za]=$psn;
test($нмп);
include('php/prmn.php');//Создание новой переменной
$sk--;
$f=substr($f,$prep);
$нмп=1;//Сброс счётчика переменных
$n++;
}
//Запятая
elseif($k1==0 and $k2==0 and $no==3)
{
$za=$re[$n][$sk];
$dannie=substr($f,0,$prep-1);
$dannie=trim($dannie);
$f2[$n][$za]=$dannie;
$ps[$n][$za]=$psn;
include('php/prmn.php');//Создание новой переменной
$re[$n][$sk]++;
$нмп=1;//Сброс счётчика переменных
$f=substr($f,$prep);
$нмт=0;
}
//Двойная кавычка
elseif($no==4 and $k2==0)
{if($k1==0){$k1=1;}else{$k1=0;$тип_перем=2;};
$tyu=$prep;}
//Одинарная кавычка
elseif($no==5 and $k1==0)
{if($k2==0){$k2=1;}else{$k2=0;$тип_перем=3;};$tyu=$prep;}
//Символ экранирования
elseif($no==6 and $k2==1)
{
$tyu=$prep+1;
}
elseif($no==6 and $k1==1)
{
$tyu=$prep+1;
}
//;-Закрытие функции
elseif($no==7 and $k1==0 and $k2==0)
{
include('php/zak_func.php');//Закрытие функции
//include('php/prmn.php');//Создание новой переменной
$bs=false;
$f=substr($f,$prep);
$zakrt[$n]=$psn;
$f1n[$n]=$cicl;
$нмт=0;
}
elseif($no==8 and $k1==0 and $k2==0)
{
$откр_кр_скоб++;
$пе[$откр_кр_скоб]=$n;
//Открытие переходов
//$переход[$n]=условие=>переход;

test('6');
$typk[$n]=1;

$put[$n][$sk]=$pute;
$tyu=$prep;
}
elseif($no==9 and $k1==0 and $k2==0)
{
$закр_кр_скоб++;
if($откр_кр_скоб==$закр_кр_скоб)
{
$n_vr=$пе[$откр_кр_скоб];
$переход[$n_vr]=$n;
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
{$f=substr($f,$prep+2);$pun=$символы;}
elseif($no==12 and $k1==0 and $k2==0)
{$f=substr($f,$prep);$pun=$символы;}
elseif($no==13 and $k1==0 and $k2==0)
{$pun=array('','','','','',"",'','','','','','',"\r\n",'','','','','','');}
elseif($no==14 and $k1==0 and $k2==0)
{
$pun=array('','','','','',"",'','','','','','',"\r\n",'','','','','','');
}
#$-переменная
elseif($no==15 and $k1==0 and $k2==0)
{
$тип_перем=1;
$f=substr($f,$prep);
}
#[-переменная открытие массива
elseif($no==16 and $k1==0 and $k2==0)
{
$tyu=$prep;
}
#]-переменная закрытие массива
elseif($no==17 and $k1==0 and $k2==0)
{
$tyu=$prep;
}
#.-переменная объединения
elseif($no==18 and $k1==0 and $k2==0)
{
include_once('php/prmn.php');//Создание новой переменной
$нмт++;
$нмп++;
$f=substr($f,$prep);
}
#\-символ экранирования нового символа
elseif($no==19 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//!Знак отрицания
elseif($no==20 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//?если правда if
elseif($no==21 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//:если ложь if
elseif($no==22 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//Символ ошибки @
elseif($no==23 and $k1==0 and $k2==0)
{$f=substr($f,$prep);}
//Пробел
elseif($no==24 and $k1==0 and $k2==0 and $sk==0)
{
if($prep!==1)
{
//Ошибка,если после пробела стоит скобка,то номер скобки увеличвается на два вместо одного
$функция=trim(substr($f,0,$prep-1));

if($функция=='or' and $f1[$n]){
//Увеличение счётчика функций,плюс пометка этой функции как условия,следующей как или
$n++;
}

if($функция=='function'){$fu++;$prizakr[$xm]='if';$xm++;}
if($функция=='if'){$if++;$prizakr[$xm]='if';$xm++;}
if($функция=='while'){$wh++;$prizakr[$xm]='wh';$xm++;}
$функции[$n]=$fu;//массив функций
$условия[$n]=$if;//массив условия
$циклы[$n]=$wh;//массив циклов
$функции[$n]=$fu;//массив функций
$условия[$n]=$if;//массив условия
$циклы[$n]=$wh;//массив циклов
$f1[$n]=$функция;
$ps[$n]=$psn;
$sk++;
$re[$n][$sk]=0;
$bs=true;
}
$f=substr($f,$prep);
}
//,для содания if в тексте if а также объединения
elseif($no==3 and $sk==0)//Применяет
{
$f=substr($f,$prep);
}
//Символы открытия ?php
elseif($no==26 and $k1==0 and $k2==0)
{
$f=substr($f,$prep+5);$pun=$символы;
}
//Символ закрытия пхп?
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
###############################################Поиск одиннакового кода#############################
include('php/poisk.php');
##############################################Вывод результатов###############################################################
include('php/vivod.php');
include('php/musor.php');
};
?>