<?php
if(eregi("3|4",$in[$g]) and $pruju==3)
{
//Где жил Николай Глинка?
//Формирование поискового массива
#Слова уточняющие запрос
$интзап='';
$zapros="SELECT * FROM unikp WHERE 1";
foreach($kon[$g] as $key=>$val)
   {
   if ($chp[$g][$key]==1)
      {
	  $интзап=$интзап.' '.$val;
      $zapros=$zapros." AND o LIKE '% ".$val."%'";
	  $подлежащее=$val;
	  };
   if ($chp[$g][$key]==2)
      {
	  $интзап=$интзап.' '.$val;
      $zapros=$zapros." AND o LIKE '% ".$val."%'";
	  $сказуемое=$val;
	  };
   if ($chp[$g][$key]==3)
      {
	  $интзап=$интзап.' '.$val;
      $zapros=$zapros." AND o LIKE '% ".$val."%'";
	  $прилагательное=$val;
	  };
   if ($chp[$g][$key]==5)
      {
	  $интзап=$интзап.' '.$val;
	  $дополнение=$val;
      $zapros=$zapros." AND o LIKE '% ".$val."%'";
	  };
   };
$zapros=$zapros.';';  
#echo $zapros;
echo '</div>
<span>
<a href="javascript: displ(\'var'.$g.'\')">Связи предложения с памятью</a>
<div id="var'.$g.'" style="background-color:blue;display:none">';
if (strlen($zapros)>strlen("SELECT * FROM unikp WHERE 1")+1){$otvetklm=mysql_query($zapros);};
do 
{
/*
$ipp=$otvetkl['ui'];
$ip=mysql_real_escape_string($_SERVER["REMOTE_ADDR"]);
if($ipp==$_SERVER["REMOTE_ADDR"])
{
я=>ты
мы=>вы
}
else
{
я=>он или она
мы=>они
};
*/
$pruju=true;
//Тут обрабатывают найденные в памяти связи
$возврат=text($otvetkl['o'],4,$вид_в);
echo '|';
foreach($возврат as $val)
   {
      echo '<div style="background-color:green">'.$val.'</div>';
   };
echo '|';   
  //Поиск в уточняющих словах 1)подлежащее 2)сказуемое 3)прилагательное 4)дополнение
echo $подлежащее.' '.$сказуемое.' '.$прилагательное.' '.$дополнение.'$';   
   $возврат=array();
}
while ($otvetkl=mysql_fetch_array($otvetklm));
echo '</div></span><div style="background-color:white">';
$pruju=3;
#2 Поиск ответа на вопрос в интернет памяти
$интзап=$ot[$g];
echo $интзап.'интзап';

$julop=goofleu($интзап);
foreach($julop as $val)
   {
     html($val);
   };

};
?>