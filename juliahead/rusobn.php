<?php
////////////////////////////////////////Русский язык.Скрипт обучения новым словам\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function rusobn(){
$utr=mysql_query("SELECT * FROM obuch_slova WHERE p>4 and t>0 and v>0 and d=0");
$utr1=mysql_query("UPDATE obuch_slova SET d=1 WHERE p>4 and t>0 and v>0");
$re=mysql_fetch_array($utr);
do{
$rek=$re['k'];
$res=$re['s'];
$ret=$re['t'];
$rev=$re['v'];
$utr0=mysql_query("INSERT INTO slova_korni_typ (k,s,t,v,ss) VALUES ('$rek','$res','$ret','$rev','a=b=c=d=e=f=g=h=i=k=l=m=')");
}
while($re=mysql_fetch_array($utr));
$son=mysql_query("UPDATE pk SET z='0' WHERE n=1");
};
?>