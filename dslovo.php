<?php
function test($test)
{
global $nero;
echo '<!--Отображение тестовой информации--><div style="position:absolute;top:'.$nero.'0;left:0;z-index:1;background-color:yellow;color:black;" >';
if (is_array($test)){print_r($test);}
elseif(is_object($test)){echo 'Это объект';}
else{echo $test;};
echo '</div>';
$nero++;
$nero++;
//echo __LINE__;
};
//Скрипт ручного добавления слов
error_reporting(0);
set_time_limit (100000);
$db=mysql_connect("localhost","root","");
mysql_select_db("system",$db);

$t=$_POST['ty'];
$rod=$_POST['rod'];
$k=strtolower(trim($_POST['slovo']));
$v=$_POST['sk'];
$print=mysql_fetch_array(mysql_query("SELECT * FROM slova_korni_typ WHERE k='".$k."' AND t='".$t."';"));
if(empty($print['k']))
{
$query="INSERT INTO slova_korni_typ (k,rod,t,v) VALUES ('$k','$rod','$t','$v')";
echo 'Записано';
if(strlen($k)>0)$utr=mysql_query($query);
}
else
{
echo 'Такое слово уже есть';
};
?>
<table><td>
<form method="post" action="dslovo.php"  >
<br>
<input type="text" name="slovo" size=8 maxlength=20><b>Слово</b><br>
<!--Тип --><h3>Тип слова</h3>
<input type="checkbox" name="ty" value="1"><b>Существительное (предмет)</b><br>
<input type="checkbox" name="ty" value="2"><b>Глагол (действие)</b><br>
<input type="checkbox" name="ty" value="3"><b>Прилагательное (свойство)</b><br>
<input type="checkbox" name="ty" value="4"><b>Числительное (число)</b><br>
<input type="checkbox" name="ty" value="5"><b>Местоимение (лицо)</b><br>
<input type="checkbox" name="ty" value="6"><b>Предлог (место)</b><br>
<input type="checkbox" name="ty" value="7"><b>Наречие (обстаятельство)</b><br>
<input type="checkbox" name="ty" value="8"><b>Вопрос</b><br>
</td><td>
<!--Склонение --><h3>Cклонение</h3>
<input type="checkbox" name="sk" value="0"><b>Другое (искл)</b><br>
<input type="checkbox" name="sk" value="1"><b>Первое</b><br>
<input type="checkbox" name="sk" value="2"><b>Второе</b><br>
<input type="checkbox" name="sk" value="3"><b>Третье</b><br>
<input type="checkbox" name="sk" value="4"><b>Четвёртое</b><br>
<input type="checkbox" name="sk" value="5"><b>Пятое</b><br>
<input type="checkbox" name="sk" value="6"><b>Шестое</b><br>
<input type="checkbox" name="sk" value="7"><b>Седьмое</b><br>
<input type="checkbox" name="sk" value="8"><b>Восьмое</b><br>
</td><td>
<!--Склонение --><h3>Род</h3>
<input type="checkbox" name="rod" value="m"><b>Мужской</b><br>
<input type="checkbox" name="rod" value="f"><b>Женский</b><br>
<input type="checkbox" name="rod" value="n"><b>Средний</b><br>
</td><td>
<input type="submit" value="Отправить">

</form>
</td>
</table>
<b>Существительные</b><br>
<table border="1" cellpadding="3" cellspacing="1" width="80%">
<tbody>
<tr>
<td valign="top" width="5%">&nbsp;</td><td valign="top" width="4%">&nbsp;</td>
<td valign="top" width="8%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">основа</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="14%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">ИМ <br>Кто? Что?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="12%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">РОД<br>Кого? Чего?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="13%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">ДАТ<br>Кому? Чему?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="14%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">ВИН<br>Кого? Что?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="15%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">ТВОР<br>Кем? Чем?</font></b><font face="Times New Roman Cyr"></font></p></td>
<td colspan="2" valign="top" width="15%"><b><font face="Times New Roman Cyr"></font></b><p align="center"><b><font face="Times New Roman Cyr">ПРЕД<br>О ком? О чём?</font></b><font face="Times New Roman Cyr"></font></p></td>
</tr>
<tr>
<td valign="top" width="5%">&nbsp;</td><td valign="top" width="4%">&nbsp;</td><td valign="top" width="8%">&nbsp;</td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">ЕД</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">МН</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">ЕД</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">МН</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">ЕД</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">МН</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">ЕД</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">МН</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">ЕД</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">МН</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">ЕД</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">МН</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">1</td><td valign="top" width="4%"><font face="Times New Roman Cyr">т</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">дам-</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-а</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ы<br>-и</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ы<br>-и</font></p></td>
<td valign="top" width="6%"><p align="center">-<font face="Symbol">Ж</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-е</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ам</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-у</font></p></td>
<td valign="top" width="6%"><p align="center">-<font face="Symbol">Ж</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ой</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ами</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-е</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ах</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">2</td><td valign="top" width="4%"><font face="Times New Roman Cyr">м</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">пул’-</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-я</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="6%"><p align="center">-<font face="Symbol">Ж</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-е</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ям</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ю</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ей</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ями</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-е</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ях</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">3</td><td valign="top" width="4%"><font face="Times New Roman Cyr">т</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">рак-,<br> дом-</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">Ж</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и,<br>-а<br>-ы</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-а</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ов</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-у</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ам</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">Ж</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-а</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ом</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ами</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-е</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ах</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">4</td><td valign="top" width="4%"><font face="Times New Roman Cyr">м</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">рул’-</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">Ж</font><font face="Times New Roman Cyr">(ь)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-я</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ей</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ю</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ям</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">Ж</font><font face="Times New Roman Cyr">(ь)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ем</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ями</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-е</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ях</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">5</td><td valign="top" width="4%"><font face="Times New Roman Cyr">т</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">слов-</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-о</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-а</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-а</font></p></td>
<td valign="top" width="6%"><p align="center">-<font face="Symbol">Ж</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-у</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ам</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-о</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-а</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ом</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ами</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-е</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ах</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">6</td><td valign="top" width="4%"><font face="Times New Roman Cyr">м</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">пол’-</font></p></td>
<td valign="top" width="8%"><p align="center">-e</p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-я</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-я</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ей</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ю</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ям</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-е</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-я</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ем</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ями</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-е</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ях</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">7</td><td valign="top" width="4%"><font face="Times New Roman Cyr">м</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">тен’-</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">Ж</font><font face="Times New Roman Cyr">(ь)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ей</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ям</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">Ж</font><font face="Times New Roman Cyr">(ь)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ю</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ями</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ях</font></p></td>
</tr>
<tr>
<td valign="top" width="5%">8</td><td valign="top" width="4%"><font face="Times New Roman Cyr">м</font></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">тен’-</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">Ж</font><font face="Times New Roman Cyr">(ь)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ей</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ям</font></p></td>
<td valign="top" width="8%"><p align="center">-<font face="Symbol">Ж</font><font face="Times New Roman Cyr">(ь)</font></p></td>
<td valign="top" width="6%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ю</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ями</font></p></td>
<td valign="top" width="8%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-и</font></p></td>
<td valign="top" width="7%"><font face="Times New Roman Cyr"></font><p align="center"><font face="Times New Roman Cyr">-ях</font></p></td>
</tr>
</tbody>
</table>
<b>Глаголы</b><br>
<table cellspacing="0" cellpadding="10" border="1" bordercolor="#000000">
								<tr>
									<td width="177" valign="top" colspan="2" align="center">

									<font face="Arial" size="2">
									<span lang="EN-US">I </span><span>спряжение</span></font></td>
									<td width="166" valign="top" colspan="2" align="center">
									<font face="Arial" size="2">
									<span lang="EN-US">II </span><span>спряжение</span></font></td>
								</tr>
								<tr>

									<td width="63" valign="top" align="center">
									<font face="Arial" size="2"><span>-У[13] (-ю)[24]</span></font></td>
									<td width="114" valign="top" align="center">
									<p align="center">
									<font face="Arial" size="2"><span>-ем</span></font></p>
									</td>
									<td width="71" valign="top" align="center">
									<font face="Arial" size="2"><span>-у(-ю)</span></font></td>

									<td width="95" valign="top" align="center">
									<font face="Arial" size="2"><span>-им</span></font></td>
								</tr>
								<tr>
									<td width="63" valign="top" align="center">
									<font face="Arial" size="2"><span>-ешь</span></font></td>
									<td width="114" valign="top" align="center">
									<p align="center">

									<font face="Arial" size="2"><span>-ете</span></font></p>
									</td>
									<td width="71" valign="top" align="center">
									<font face="Arial" size="2"><span>-ишь</span></font></td>
									<td width="95" valign="top" align="center">
									<font face="Arial" size="2"><span>-ите</span></font></td>
								</tr>

								<tr>
									<td width="63" valign="top" align="center">
									<font face="Arial" size="2"><span>-ет</span></font></td>
									<td width="114" valign="top" align="center">
									<p align="center">
									<font face="Arial" size="2"><span>-ут (-ют)[12]</span></font></p>
									</td>
									<td width="71" valign="top" align="center">

									<font face="Arial" size="2"><span>-ит</span></font></td>
									<td width="95" valign="top" align="center">
									<font face="Arial" size="2"><span>-ат(-ят)[34]</span></font></td>
								</tr>
							</table>
							<br>
Прилагательные 1)-ий 2) -ый -ой