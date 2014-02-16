<?php
//Функции подключения
if($f1[$n]=='include' or $f1[$n]=='require' or $f1[$n]=='include_once' or $f1[$n]=='require_once')
{
$str=$переменные_поиск[$n][$нмп][1];
$st=fopen($str,"r");$include=fread($st,filesize($str));fclose($st);//Загрузка подключаемых файлов
$f=$include.$f;
}
//Проверка была ли скобка перед закрытием функции,если нет то создание функции типа приравнивание
if($bs===true)
{
$za=$re[$n][$sk];
$f2[$n][$za]=substr($f,0,$prep-1);
$ps[$n][$za]=$psn;
$sk--;
$нмп=1;//Сброс счётчика переменных
}
elseif($bs===false and !$f1[$n])
{
$f1[$n]='об';
$f2[$n][0]=substr($f,0,$prep-1);
$функции[$n]=$fu;//массив функций
$условия[$n]=$if;//массив условия
$циклы[$n]=$wh;//массив циклов
$ps[$n]=$psn;
}
?>