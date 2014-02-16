<?php
defined('Ogon') or die('');
/////////////////////////////////////////////////////////Обработка художественного текста\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
$связи=array();//Массив связей-В ключах находится тип для редактирования связей-Слова связи
/*
1)Конец части предложения
2)Конец предложения
3)Конец абзаца
4)Конец блока информации
нужно-необязательный параметр
*/
function text($otve,$pruju,$вид_в){
global $корни,$oks,$su,$suf,$sks,$слова,$слова2,$связи,$g,$r,$prc,$ot,$pred,$tre,$kon,$koren3,$синонимы,$флаг_проверки_слов_конца_предложения,$слова_события_конца_предложения,$chp,$pad,$gll1,$lic,$glc1,$chi,$nom,$подлежащее,$osn,$nome,$сказуемое,$sv31,$sv32,$sv33,$ssv,$sv34,$svn,$setting,$prc1,$prp1,$prr1,$rod,$nom2,$прилаг,$prp8,$vopr,$nom8,$prp,$prr,$nom0,$gll,$glc,$nom1,$pov,$задача,$дополн,$chd,$nomegr,$kongr,$v,$флаг,$cicl7,$ном_св,$шаблон,$i_g,$i,$слово_условия,$koren,$temp_arr,$k2,$v2,$поиск_в_предл_начало_массив,$поиск_в_предл_конец_массив,$bmli,$funm,$dls,$n,$func,$d1,$d1r,$r_d,$r_s,$mes_a,$mes_b,$x_mes,$stroks,$s,$пробел_слов,$dan,$fuda,$название_функции,$ид_слова,$поиск_в_предл_начало,$поиск_в_предл_конец,$поиск_в_предл_временная,$поиск_часть_предложения,$сч_сл,$паттерны,$functions,$result_temp,$res,$номер_результата,$arr,$result,$bne,$ключ_записи_конструкции,$конструкция_,$funcot,$k,$slovo,$шаблон_перевода_из_кода_в_текст,$тип_слова,$слово,$otvet,$приставка,$суффикс,$окончание,$handle2,$_SERVER,$конструкция_еслито,$основа_предложения,$другие_основы,$fud1,$возврат;
global $п,$g,$r,$t,$povt,$pror,$ot,$in,$punkz,$задача,$var1,$var2,$var3,$var4,$var,$dp,$dp2,$otp,$slo,$varp,$пробел_слов,$np,$prep,$pre,$no,$sloost,$s,$tre,$kon,$sl,$слова,$pe2n,$uni,$ssv,$nome,$chi,$pad,$vre,$rod,$lic,$per2p,$utyu,$sl2,$provok;
#####################################################Cбор информации###############################################
//register_tick_function('tick_handler');
include 'text1/pred.php';
//unregister_tick_function('tick_handler');
###################################################Переработка информации######################################
//Первичная переработка//
$g=0;
$r=0;
$prc='';//Число части речи
while (isset($ot[$g])){
for($lo=0;$lo<5;$lo++)
{
include 'text1/chleni.php';//Определение членов предложения
$r=0;
while (isset($tre[$g][$r]))
{
$флаг=false;
$cicl7=0;
$ном_св=0;

/////////////////////Скрипт работа//////////////////////
$корень=$kon[$g][$r];
$чречи=$tre[$g][$r];//
$gh=0;
$io=0;//Счётчик массивов внитри массива связи

foreach($шаблон[$lo] as $kk=>$vk)
{
$key=split('|',$kk);
/*
$key[0]-номер шаблона с таким же корнем
$key[1]-корень слова
$key[2]-часть речи
$key[3]-падеж
$key[4]-число
$key[5]-время
*/
$flag=true;
if(strlen($key[1])){if(strpos(''.$key[1],''.$kon[$g][$i])===false){$flag=false;}}//Корень
if(strlen($key[2])){if(strpos(''.$key[2],''.$tre[$g][$i])===false){$flag=false;}}//Часть речи
if(strlen($key[3])){if(strpos(''.$key[3],''.$pad[$g][$i])===false){$flag=false;}}//Падеж
if(strlen($key[4])){if(strpos(''.$key[4],''.$chi[$g][$i])===false){$flag=false;}}//Число
if(strlen($key[5])){if(strpos(''.$key[5],''.$vre[$g][$i])===false){$flag=false;}}//Время

if($flag===true)
{
$условия=$vk;
//Если шаблон оказался тем чем нужно ,то тут подключаем остальной код

//Поиск в прямую сторону
for($i=$r;$kon[$g][$i];$i++)
{
for($h=0;$условия[$h];$h++)
{
$v=$условия[$h];
$k=$h;

$flag=true;
//Совпадения по свойствам слов

if($v[kon]){if(strpos(''.$v[kon],''.$kon[$g][$i])===false){$flag=false;}}//Корень
if($v[tre]){if(strpos(''.$v[tre],''.$tre[$g][$i])===false){$flag=false;}}//Часть речи
if($v[pad]){if(strpos(''.$v[pad],''.$pad[$g][$i])===false){$flag=false;}}//Падеж
if($v[chi]){if(strpos(''.$v[chi],''.$chi[$g][$i])===false){$flag=false;}}//Число
if($v[vre]){if(strpos(''.$v[vre],''.$vre[$g][$i])===false){$flag=false;}}//Время

//Совпадение по интервалам
if($v[int1]){if($io>$v[int1]){}else{$flag=false;};}//0
if($v[int2]){if($io<=$v[int2]){}else{$flag=false;};}//3

//Если нужно добавить множественные интервалы можно сделать foreach

//if($i==2 and $h==5){var_dump($flag);echo '|'.$io.'|';}

if($flag===true)
{
//Тут for дополняет счётчик дополняет до следующего не интервального значения
if(!$v['*'])
{
for($z=$io+1;$условия[$z];$z++)
{

if($z==6)
{
echo $условия[$z]['int1'];
}
if(!$условия[$z][int1] and !$условия[$z][int2] and !$условия[$z]['*']){
$io=$z;
break;
};
}
}

//if($i==6 and $h==4){var_dump($flag);}
//5=>2 потому что он должен начинаться с 3 ей
//
if(!$exit[$k]){
//$exit[$k]=array('p'=>$g,'n'=>$i);
$exit[$k]=$kon[$g][$i];
}
}

}
//if(count($условия)==count($exit))break; тут ещё из условия убрать с *
}




}
}









if($exit)
{
mysql_query('INSERT INTO esli_to (podl1,skaz1,podl2,skaz2) VALUES ("'.$exit[1].'","'.$exit[2].'","'.$exit[4].'","'.$exit[5].'");');
unset($exit);
}

$r++;
};
$r=0;
//include('text1/otveti.php');
//include('text1/prikazi.php');
$g++;
};
}
$funcot=array();
	foreach ($funcot as $k=>$v)
	{
	$slovo=$шаблон_перевода_из_кода_в_текст[$v];
	$тип_слова=substr($slovo,0,1);
	$слово=substr($slovo,1);
	$otvet.=$приставка.$слово.$суффикс.$окончание.' ';
	}
	if(!empty($otvet))
	{
	$h2 = fopen($_SERVER['DOCUMENT_ROOT'].'/privet/voise/g.dic','w');fwrite($h2,$otvet); fclose($h2);
	//system('start E:\Server\home\localhost\privet\voise\Govorilka_cp.exe -e0 -d "E:\Server\home\localhost\privet\voise\Digalo.dic" -f "E:\Server\home\localhost\privet\voise\g.dic"');
	echo '<div class="otvet">'.$otvet.'</div>';
	}
//perebor($func);
//otvet($func);
########################################переводчик из текста в код php#############################
//$конструкция_еслито[$основа_предложения]=array($другие_основы);
########################################################Ответ######################################
include('text1/vivod.php');#Модуль вывода результатов
return $возврат;
};
?>