<?php
#########################################################Вывод результатов#######################################################
if ($pruju==3){
if (isset($otve)){
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
};

if($_GET['option1']){
echo '<table  BGCOLOR=white WIDTH="90%" bordercolor=blue rules="all" BORDER=3><tr><td><b><font>Номер</font></b></td><td><b><font color=white>Предложение</font></b></td><td><b><font color=white>Тип предложения</font></b></td></tr></b>';
$g=0;
while (isset($ot[$g])){
//Предложения
if ($in[$g]==1){
$typ='<font color=black>повествовательное</font>';
};
if ($in[$g]==2){
$typ='<font color=red>восклицательное</font>';
};
if ($in[$g]==3){
$typ='<font color=blue>вопросительное</font>';
};
if ($in[$g]==4){
$typ='<font color=darkmagenta>вопрос.-воскл</font>';
};
if ($in[$g]==5){
$typ='<font color=gold>многоточие</font>';
};
echo '<tr><td BGCOLOR="red"><b><font color=white>№'.$g.'</font></b></td><td>'.$ot[$g].'</td><td>'.$typ.'</td></tr>';
$g++;
};
echo  '</table>';
}
//Слова
$r=0;
$g=0;
$rc=0;#Подсчёт количества слов
while (isset($s[$g][$r])){

if ($in[$g]==1){$typ='.';};
if ($in[$g]==2){$typ='!';};
if ($in[$g]==3){$typ='?';};
if ($in[$g]==4){$typ='?!';};
if ($in[$g]==5){$typ='...';};
echo '<table WIDTH="100%" BGCOLOR="white"><tr><td BGCOLOR="white" WIDTH="5%"><b><font color=black>№'.$g.'</font> Тип:<font color=red>'.$typ.'</b></font></b></td>';

while (isset($s[$g][$r])){
if(empty($nome[$g][$r]))$nome[$g][$r]='';
if(empty($lic[$g][$r]))$lic[$g][$r]='';
if(empty($chi[$g][$r]))$chi[$g][$r]='';
if(empty($rod[$g][$r]))$rod[$g][$r]='';
if(empty($pad[$g][$r]))$pad[$g][$r]='';
if(empty($vre[$g][$r]))$vre[$g][$r]='';
$title_sl=htmlspecialchars('Н:'.$kon[$g][$r].';Л:'.$lic[$g][$r].';Ч:'.$chi[$g][$r].';Р:'.$rod[$g][$r].';П:'.$pad[$g][$r].';В:'.$vre[$g][$r].';',ENT_COMPAT);
echo '<td><b id="'.$nome[$g][$r].'" onClick="f(\''.$nome[$g][$r].'\');" title="'.$title_sl.'">'.$s[$g][$r].'</b></td>';
$r++;
};
//Части речи
$r=0;
echo '<tr><td BGCOLOR="black" WIDTH="5%"><font color=white><b>Часть</b></font></td>';
while (isset($tre[$g][$r])){
if ($tre[$g][$r]==1){
$typ='<b><font color=black>существительное</font><b/>';
};
if ($tre[$g][$r]==2){
$typ='<b><font color=red>глагол</font></b>';
};
if ($tre[$g][$r]==3){
$typ='<b><font color=gray>прилагательное</font></b>';
};
if ($tre[$g][$r]==4){
$typ='<b><font color=green>числительное</font></b>';
};
if ($tre[$g][$r]==5){
$typ='<b><font color=red>местоимение</font></b>';
};
if ($tre[$g][$r]==6){
$typ='<b><font color=black>предлог</font></b>';
};
if ($tre[$g][$r]==7){
$typ='<b><font color=black>наречие</font></b>';
};
if ($tre[$g][$r]==8){
$typ='<b><font color=red>вопрос</font></b>';
};
if ($tre[$g][$r]==9){
$typ='<b><font color=red>причастие</font></b>';
};
if ($tre[$g][$r]==10){
$typ='<b><font color=red>деепричастие</font></b>';
};
if ($tre[$g][$r]==11){
$typ='<b><font color=red>частица</font></b>';
};
if ($tre[$g][$r]==99){
$typ=' ';
};
if (substr($tre[$g][$r],0,1)=='p'){
$typ='<b><font color=green>РЗ</font></b>';
};
echo '<td>'.$typ.'</td>';
$r++;
};
echo '</tr>';
$r=0;
//Член предложения
$r=0;
echo '<tr><td BGCOLOR="black" WIDTH="5%"><b><font color=white>Член</font></b></td>';
while (isset($chp[$g][$r])){
if ($chp[$g][$r]==1){
$typ='подлежащее';
};
if ($chp[$g][$r]==2){
$typ='сказуемое';
};
if ($chp[$g][$r]==3){
$typ='определение';
};
if ($chp[$g][$r]==4){
$typ='обстоятельство';
};
if ($chp[$g][$r]==5){
$typ='дополнение';
};
if ($chp[$g][$r]==7){
$typ='конструкция';
};
if ($chp[$g][$r]==8){
$typ='не опрделено';
};
if ($chp[$g][$r]==99){
$typ=' ';
};
echo '<td><font color="gray"><b>'.$typ.'</b></font></td>';
$r++;
};
$rc=$rc+$r;
echo '</tr>';
$r=0;

$g++;
};
echo '</table>';
};
//Подсчёт общего количества слов
$rc=$per2['z']+$rc;
$pe=mysql_query("UPDATE pk SET z='$rc',p=p+1 WHERE n=1;");
#Запись запроса в субъективную память
if ($pruju==3){
$data=date("Hisdmy");
$ip=mysql_real_escape_string($_SERVER["REMOTE_ADDR"]);
$runikp=mysql_query("INSERT INTO unikp (ui,v,o) VALUES ('1$ip','$data',' $otvez');");
#Время
$time_end=microtime_float();
$time=$time_end-$time_start;
$time=round($time, 2);
echo "Время выполенения скрипта: $time секунд\n";
};

?>