<?php
defined('Ogon') or die( '');
/////////////////////////////////////////////////////Функция соедининие с Интернетом http://\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function curl($get, $post = 0, $cookies = '', $head = 0) {
global $cl,$line;
$cl = curl_init($get);
curl_setopt($cl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($cl, CURLOPT_HEADER, $head);
curl_setopt($cl, CURLOPT_COOKIE, $cookies);
curl_setopt($cl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($cl, CURLOPT_USERAGENT, 'Opera/9.25 (Windows NT 6.0; U; ru)');
if ($post) {
  curl_setopt($cl, CURLOPT_POST, 1);
  curl_setopt($cl, CURLOPT_POSTFIELDS, $post);
}
$line = curl_exec($cl);
curl_close($cl);
return $line;
};
?>