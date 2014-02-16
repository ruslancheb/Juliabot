<?php
////////////////////////////////////////Запись связей между членами предложения\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function ssv($sv31,$sv32,$sv33,$sv34,$svn) {
$nome1=substr($sv32,1);
$nome2=substr($sv31,1);
$nome3=substr($sv32,0,1);
$nome4=substr($sv31,0,1);
if ($nome3=='z'){$nome3='p';}else{$nome3='slova_korni_typ';};
if ($nome4=='z'){$nome4='p';}else{$nome4='slova_korni_typ';};
if (!eregi($sv31.'x',$sv34)){
$ss1=str_replace("$svn=","$svn=".$sv31."x1&",$sv34);
}else{
$kol0=strpos($sv34,$sv31."x",strpos($sv34,"$svn="));
$kol0=$kol0+strlen($sv31)+1;
$kol4=strpos($sv34,'&',$kol0);
$kol4=$kol4-$kol0;
$kol2=substr($sv34,0,$kol0);
$kol1=substr($sv34,$kol0,$kol4);
$kol0=$kol0+strlen($kol1);
$kol3=substr($sv34,$kol0);
$kol1++;
$ss1=$kol2.$kol1.$kol3;
};
if (!eregi($sv32.'x',$sv33)){
$ss2=str_replace("$svn=","$svn=".$sv32."x1&",$sv33);
}else{
$kol0=strpos($sv33,$sv32."x",strpos($sv33,"$svn="));
$kol0=$kol0+strlen($sv32)+1;
$kol4=strpos($sv33,'&',$kol0);
$kol4=$kol4-$kol0;
$kol2=substr($sv33,0,$kol0);
$kol1=substr($sv33,$kol0,$kol4);
$kol0=$kol0+strlen($kol1);
$kol3=substr($sv33,$kol0);
$kol1++;
$ss2=$kol2.$kol1.$kol3;
};
$uie1=mysql_query("UPDATE $nome3 SET ss='$ss1' WHERE n='$nome1'");
$uie10=mysql_query("UPDATE $nome4 SET ss='$ss2' WHERE n='$nome2'");
};
?>