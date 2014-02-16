<?php
defined('Ogon') or die( '');
//////////////////////////////////////////Функция парсинга Google\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function goofleu($zapros){
global $запрос,$stranica,$i,$juk,$gde,$kil,$julop;
$zapros=iconv("windows-1251","utf-8",$zapros);
$zapros=str_replace(' ','+',$zapros);
$запрос='http://www.google.ru/search?q='.$zapros;
$stranica=curl($запрос);
$stranica=utf8_win($stranica);
$i=0;
while ($i<10)
{
$juk=strpos($stranica,' class=l>');
$gde=substr($stranica,0,$juk+9);
$stranica=substr($stranica,$juk+9);
$kil=strrpos($gde,'<a href="');
$kil2=strrpos($gde,'"');
$kil=$kil+9;
$kil2=$kil2-$kil;
$julop[$i]=substr($gde,$kil,$kil2);
$i++;
};
return $julop;
};
?>