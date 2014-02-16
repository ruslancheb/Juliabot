<?php
function endKey($array){
       end($array);
       return key($array);
}
function create_watermark( $main_img_obj, $text, $font, $r = 255, $g = 0, $b = 0, $alpha_level = 0 )
{
//Joker
   $width = imagesx($main_img_obj);
   $height = imagesy($main_img_obj);
   //$angle =  -rad2deg(atan2((-$height),($width)));
   $angle =  0;
   $text = " ".$text." ";
$c = imagecolorallocatealpha($main_img_obj, $r, $g, $b, $alpha_level);
//$size = (($width+$height)/2)*2/strlen($text);
$size = 15;
$font = 'ARIAL.TTF';
$box  = imagettfbbox ( $size, $angle, $font, $text );
//$x = $width/2 - abs($box[4] - $box[0])/2;
//$y = $height/2 + abs($box[5] - $box[1])/2;
$x = $width-150;
$y = $height-15;
imagettftext($main_img_obj,$size ,$angle, $x, $y, $c, $font, $text);
return $main_img_obj;
}


/*
class watermark3{

	# given two images, return a blended watermarked image
	function create_watermark( $main_img_obj, $watermark_img_obj, $alpha_level = 100 ) {
		$alpha_level	/= 100;	# convert 0-100 (%) alpha to decimal

		# calculate our images dimensions
		$main_img_obj_w	= imagesx( $main_img_obj );
		$main_img_obj_h	= imagesy( $main_img_obj );
		$watermark_img_obj_w	= imagesx( $watermark_img_obj );
		$watermark_img_obj_h	= imagesy( $watermark_img_obj );

		# determine center position coordinates
		$main_img_obj_min_x	= floor( ( $main_img_obj_w / 2 ) - ( $watermark_img_obj_w / 2 ) );
		$main_img_obj_max_x	= ceil( ( $main_img_obj_w / 2 ) + ( $watermark_img_obj_w / 2 ) );
		$main_img_obj_min_y	= floor( ( $main_img_obj_h / 2 ) - ( $watermark_img_obj_h / 2 ) );
		$main_img_obj_max_y	= ceil( ( $main_img_obj_h / 2 ) + ( $watermark_img_obj_h / 2 ) ); 

		# create new image to hold merged changes
		$return_img	= imagecreatetruecolor( $main_img_obj_w, $main_img_obj_h );

		# walk through main image
		for( $y = 0; $y < $main_img_obj_h; $y++ ) {
			for( $x = 0; $x < $main_img_obj_w; $x++ ) {
				$return_color	= NULL;

				# determine the correct pixel location within our watermark
				$watermark_x	= $x - $main_img_obj_min_x;
				$watermark_y	= $y - $main_img_obj_min_y;

				# fetch color information for both of our images
				$main_rgb = imagecolorsforindex( $main_img_obj, imagecolorat( $main_img_obj, $x, $y ) );

				# if our watermark has a non-transparent value at this pixel intersection
				# and we're still within the bounds of the watermark image
				if ($watermark_x >= 0 && $watermark_x < $watermark_img_obj_w &&	$watermark_y >= 0 && $watermark_y < $watermark_img_obj_h ) {
					$watermark_rbg = imagecolorsforindex( $watermark_img_obj, imagecolorat( $watermark_img_obj, $watermark_x, $watermark_y ) );

					# using image alpha, and user specified alpha, calculate average
					$watermark_alpha	= round( ( ( 127 - $watermark_rbg['alpha'] ) / 127 ), 2 );
					$watermark_alpha	= $watermark_alpha * $alpha_level;

					# calculate the color 'average' between the two - taking into account the specified alpha level
					$avg_red		= $this->_get_ave_color( $main_rgb['red'],		$watermark_rbg['red'],		$watermark_alpha );
					$avg_green	= $this->_get_ave_color( $main_rgb['green'],	$watermark_rbg['green'],	$watermark_alpha );
					$avg_blue		= $this->_get_ave_color( $main_rgb['blue'],	$watermark_rbg['blue'],		$watermark_alpha );

					# calculate a color index value using the average RGB values we've determined
					$return_color	= $this->_get_image_color( $return_img, $avg_red, $avg_green, $avg_blue );

				# if we're not dealing with an average color here, then let's just copy over the main color
				} else {
					$return_color	= imagecolorat( $main_img_obj, $x, $y );

				} # END if watermark

				# draw the appropriate color onto the return image
				imagesetpixel( $return_img, $x, $y, $return_color );

			} # END for each X pixel
		} # END for each Y pixel

		# return the resulting, watermarked image for display
		return $return_img;

	} # END create_watermark()

	# average two colors given an alpha
	function _get_ave_color( $color_a, $color_b, $alpha_level ) {
		return round( ( ( $color_a * ( 1 - $alpha_level ) ) + ( $color_b	* $alpha_level ) ) );
	} # END _get_ave_color()

	# return closest pallette-color match for RGB values
	function _get_image_color($im, $r, $g, $b) {
		$c=imagecolorexact($im, $r, $g, $b);
		if ($c!=-1) return $c;
		$c=imagecolorallocate($im, $r, $g, $b);
		if ($c!=-1) return $c;
		return imagecolorclosest($im, $r, $g, $b);
	} # EBD _get_image_color()

} # END watermark API
*/

class watermark2
{
function create_watermark( $main_img_obj, $watermark_img_obj, $alpha_level = 100 )
{
$watermark_width = imagesx($watermark_img_obj);
$watermark_height = imagesy($watermark_img_obj);

$dest_x = imagesx($main_img_obj) - $watermark_width - 5;
$dest_y = imagesy($main_img_obj) - $watermark_height - 5;
imagecopymerge($main_img_obj, $watermark_img_obj, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, $alpha_level);

return $main_img_obj;
}
}



function rote($image_file_path, $new_image_file_path, $degrees)
{
        $return_val = 1;
        $return_val = ( (@$img = ImageCreateFromJPEG ( $image_file_path )) && $return_val == 1 ) ? "1" : "0";
        $FullImage_width = imagesx ($img);
        $FullImage_height = imagesy ($img);
        copy ( $image_file_path, $new_image_file_path );

        $full_id = imagecreatetruecolor($FullImage_height, $FullImage_width);
        $col = imagecolorallocate($img, 125, 174, 240);
		//$col = imagecolorallocate($img,225,225,225);
        $full_id = imagerotate($img, $degrees, $col);

        $return_val = ( $full = ImageJPEG( $full_id, $new_image_file_path, 60 )
                                 && $return_val == 1 ) ? "1" : "0";

       ImageJPEG( $full_id, $new_image_file_path, 60 );
       ImageDestroy( $full_id );
  return ($return_val) ? TRUE : FALSE ;
}

function sub_com($string,$n1,$n2,$ns=' ')
{
$n3=strpos($string,$ns,$n1);
if($n3<$n2 and $n3!==false)
{
$string=substr($string,0,$n3);
}
else
{
$string=substr($string,0,$n2);
}
return $string;
}
function translitIt($str) 
{
    $tr = array(
        "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
        "Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
        "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
        "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
        "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
        "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
        "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya"
    );
    return strtr($str,$tr);
}


function strip_tags_smart(
    /*string*/ $s,
    array $allowable_tags = null,
    /*boolean*/ $is_format_spaces = true,
    array $pair_tags = array('script', 'style', 'map', 'iframe', 'frameset', 'object', 'applet', 'comment', 'button', 'textarea', 'select'),
    array $para_tags = array('p', 'td', 'th', 'li', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'div', 'form', 'title', 'pre')
)
{
    //return strip_tags($s);
    static $_callback_type  = false;
    static $_allowable_tags = array();
    static $_para_tags      = array();
    #regular expression for tag attributes
    #correct processes dirty and broken HTML in a singlebyte or multibyte UTF-8 charset!
    static $re_attrs_fast_safe =  '(?![a-zA-Z\d])  #statement, which follows after a tag
                                   #correct attributes
                                   (?>
                                       [^>"\']+
                                     | (?<=[\=\x20\r\n\t]|\xc2\xa0) "[^"]*"
                                     | (?<=[\=\x20\r\n\t]|\xc2\xa0) \'[^\']*\'
                                   )*
                                   #incorrect attributes
                                   [^>]*+';

    if (is_array($s))
    {
        if ($_callback_type === 'strip_tags')
        {
            $tag = strtolower($s[1]);
            if ($_allowable_tags)
            {
                #tag with attributes
                if (array_key_exists($tag, $_allowable_tags)) return $s[0];

                #tag without attributes
                if (array_key_exists('<' . $tag . '>', $_allowable_tags))
                {
                    if (substr($s[0], 0, 2) === '</') return '</' . $tag . '>';
                    if (substr($s[0], -2) === '/>')   return '<' . $tag . ' />';
                    return '<' . $tag . '>';
                }
            }
            if ($tag === 'br') return "\r\n";
            if ($_para_tags && array_key_exists($tag, $_para_tags)) return "\r\n\r\n";
            return '';
        }
        trigger_error('Unknown callback type "' . $_callback_type . '"!', E_USER_ERROR);
    }

    if (($pos = strpos($s, '<')) === false || strpos($s, '>', $pos) === false)  #speed improve
    {
        #tags are not found
        return $s;
    }

    $length = strlen($s);

    #unpaired tags (opening, closing, !DOCTYPE, MS Word namespace)
    $re_tags = '~  <[/!]?+
                   (
                       [a-zA-Z][a-zA-Z\d]*+
                       (?>:[a-zA-Z][a-zA-Z\d]*+)?
                   ) #1
                   ' . $re_attrs_fast_safe . '
                   >
                ~sxSX';

    $patterns = array(
        '/<([\?\%]) .*? \\1>/sxSX',     #встроенный PHP, Perl, ASP код
        '/<\!\[CDATA\[ .*? \]\]>/sxSX', #блоки CDATA
        #'/<\!\[  [\x20\r\n\t]* [a-zA-Z] .*?  \]>/sxSX',  #:DEPRECATED: MS Word таги типа <![if! vml]>...<![endif]>

        '/<\!--.*?-->/sSX', #комментарии

        #MS Word таги типа "<![if! vml]>...<![endif]>",
        #условное выполнение кода для IE типа "<!--[if expression]> HTML <![endif]-->"
        #условное выполнение кода для IE типа "<![if expression]> HTML <![endif]>"
        #см. http://www.tigir.com/comments.htm
        '/ <\! (?:--)?+
               \[
               (?> [^\]"\']+ | "[^"]*" | \'[^\']*\' )*
               \]
               (?:--)?+
           >
         /sxSX',
    );
    if ($pair_tags)
    {
        #парные таги вместе с содержимым:
        foreach ($pair_tags as $k => $v) $pair_tags[$k] = preg_quote($v, '/');
        $patterns[] = '/ <((?i:' . implode('|', $pair_tags) . '))' . $re_attrs_fast_safe . '(?<!\/)>
                         .*?
                         <\/(?i:\\1)' . $re_attrs_fast_safe . '>
                       /sxSX';
    }
    #d($patterns);

    $i = 0; #защита от зацикливания
    $max = 99;
    while ($i < $max)
    {
        $s2 = preg_replace($patterns, '', $s);
        if (preg_last_error() !== PREG_NO_ERROR)
        {
            $i = 999;
            break;
        }

        if ($i == 0)
        {
            $is_html = ($s2 != $s || preg_match($re_tags, $s2));
            if (preg_last_error() !== PREG_NO_ERROR)
            {
                $i = 999;
                break;
            }
            if ($is_html)
            {
                if ($is_format_spaces)
                {
                    /*
                    В библиотеке PCRE для PHP \s - это любой пробельный символ, а именно класс символов [\x09\x0a\x0c\x0d\x20\xa0] или, по другому, [\t\n\f\r \xa0]
                    Если \s используется с модификатором /u, то \s трактуется как [\x09\x0a\x0c\x0d\x20]
                    Браузер не делает различия между пробельными символами, друг за другом подряд идущие символы воспринимаются как один
                    */
                    #$s2 = str_replace(array("\r", "\n", "\t"), ' ', $s2);
                    #$s2 = strtr($s2, "\x09\x0a\x0c\x0d", '    ');
                    $s2 = preg_replace('/  [\x09\x0a\x0c\x0d]++
                                         | <((?i:pre|textarea))' . $re_attrs_fast_safe . '(?<!\/)>
                                           .+?
                                           <\/(?i:\\1)' . $re_attrs_fast_safe . '>
                                           \K
                                        /sxSX', ' ', $s2);
                    if (preg_last_error() !== PREG_NO_ERROR)
                    {
                        $i = 999;
                        break;
                    }
                }

                #массив тагов, которые не будут вырезаны
                if ($allowable_tags) $_allowable_tags = array_flip($allowable_tags);

                #парные таги, которые будут восприниматься как параграфы
                if ($para_tags) $_para_tags = array_flip($para_tags);
            }
        }#if

        #tags processing
        if ($is_html)
        {
            $_callback_type = 'strip_tags';
            $s2 = preg_replace_callback($re_tags, __FUNCTION__, $s2);
            $_callback_type = false;
            if (preg_last_error() !== PREG_NO_ERROR)
            {
                $i = 999;
                break;
            }
        }

        if ($s === $s2) break;
        $s = $s2; $i++;
    }#while
    if ($i >= $max) $s = strip_tags($s); #too many cycles for replace...

    if ($is_format_spaces && strlen($s) !== $length)
    {
        #remove a duplicate spaces
        $s = preg_replace('/\x20\x20++/sSX', ' ', trim($s));
        #remove a spaces before and after new lines
        $s = str_replace(array("\r\n\x20", "\x20\r\n"), "\r\n", $s);
        #replace 3 and more new lines to 2 new lines
        $s = preg_replace('/[\r\n]{3,}+/sSX', "\r\n\r\n", $s);
    }
    return $s;
}
function utf8_to_cp1251($utf8) {

    $windows1251 = "";
    $chars = preg_split("//",$utf8);

    for ($i=1; $i<count($chars)-1; $i++) {
        $prefix = ord($chars[$i]);
        $suffix = ord($chars[$i+1]);

        if ($prefix==215) {
            $windows1251 .= chr($suffix+80);
            $i++;
        } elseif ($prefix==214) {
            $windows1251 .= chr($suffix+16);
            $i++;
        } else {
            $windows1251 .= $chars[$i];
        }
    }

    return $windows1251;
}
function cp1251_to_utf8 ($txt)  {
    $in_arr = array (
       chr(208), chr(192), chr(193), chr(194),
       chr(195), chr(196), chr(197), chr(168),
       chr(198), chr(199), chr(200), chr(201),
       chr(202), chr(203), chr(204), chr(205),
       chr(206), chr(207), chr(209), chr(210),
       chr(211), chr(212), chr(213), chr(214),
       chr(215), chr(216), chr(217), chr(218),
       chr(219), chr(220), chr(221), chr(222),
       chr(223), chr(224), chr(225), chr(226),
       chr(227), chr(228), chr(229), chr(184),
       chr(230), chr(231), chr(232), chr(233),
       chr(234), chr(235), chr(236), chr(237),
       chr(238), chr(239), chr(240), chr(241),
       chr(242), chr(243), chr(244), chr(245),
       chr(246), chr(247), chr(248), chr(249),
       chr(250), chr(251), chr(252), chr(253),
       chr(254), chr(255)
    );   

    $out_arr = array (
       chr(208).chr(160), chr(208).chr(144), chr(208).chr(145),
       chr(208).chr(146), chr(208).chr(147), chr(208).chr(148),
       chr(208).chr(149), chr(208).chr(129), chr(208).chr(150),
       chr(208).chr(151), chr(208).chr(152), chr(208).chr(153),
       chr(208).chr(154), chr(208).chr(155), chr(208).chr(156),
       chr(208).chr(157), chr(208).chr(158), chr(208).chr(159),
       chr(208).chr(161), chr(208).chr(162), chr(208).chr(163),
       chr(208).chr(164), chr(208).chr(165), chr(208).chr(166),
       chr(208).chr(167), chr(208).chr(168), chr(208).chr(169),
       chr(208).chr(170), chr(208).chr(171), chr(208).chr(172),
       chr(208).chr(173), chr(208).chr(174), chr(208).chr(175),
       chr(208).chr(176), chr(208).chr(177), chr(208).chr(178),
       chr(208).chr(179), chr(208).chr(180), chr(208).chr(181),
       chr(209).chr(145), chr(208).chr(182), chr(208).chr(183),
       chr(208).chr(184), chr(208).chr(185), chr(208).chr(186),
       chr(208).chr(187), chr(208).chr(188), chr(208).chr(189),
       chr(208).chr(190), chr(208).chr(191), chr(209).chr(128),
       chr(209).chr(129), chr(209).chr(130), chr(209).chr(131),
       chr(209).chr(132), chr(209).chr(133), chr(209).chr(134),
       chr(209).chr(135), chr(209).chr(136), chr(209).chr(137),
       chr(209).chr(138), chr(209).chr(139), chr(209).chr(140),
       chr(209).chr(141), chr(209).chr(142), chr(209).chr(143)
    );   

    $txt = str_replace($in_arr,$out_arr,$txt);
   return $txt;
}
function Utf8ToWin($fcontents) {

    $out = '';
	$c1 = '';
    $byte2 = false;

    for ($c = 0;$c < strlen($fcontents);$c++) {

        $i = ord($fcontents[$c]);

        if ($i <= 127) {

            $out .= $fcontents[$c];

        }

        if ($byte2) {

            $new_c2 = ($c1 & 3) * 64 + ($i & 63);

            $new_c1 = ($c1 >> 2) & 5;

            $new_i = $new_c1 * 256 + $new_c2;

            if ($new_i == 1025) {

                $out_i = 168;

            } else {

                if ($new_i == 1105) {

                    $out_i = 184;

                } else {

                    $out_i = $new_i - 848;

                }

            }

            $out .= chr($out_i);

            $byte2 = false;

        }

        if (($i >> 5) == 6) {

            $c1 = $i;

            $byte2 = true;

        }

    }

    return $out;

}

function cp1251toutf8($text) {
$text = str_replace(chr(208),chr(208).chr(160),$text); # Р
$text = str_replace(chr(192),chr(208).chr(144),$text); # А
$text = str_replace(chr(193),chr(208).chr(145),$text); # Б
$text = str_replace(chr(194),chr(208).chr(146),$text); # В
$text = str_replace(chr(195),chr(208).chr(147),$text); # Г
$text = str_replace(chr(196),chr(208).chr(148),$text); # Д
$text = str_replace(chr(197),chr(208).chr(149),$text); # Е
$text = str_replace(chr(168),chr(208).chr(129),$text); # Ё
$text = str_replace(chr(198),chr(208).chr(150),$text); # Ж
$text = str_replace(chr(199),chr(208).chr(151),$text); # З
$text = str_replace(chr(200),chr(208).chr(152),$text); # И
$text = str_replace(chr(201),chr(208).chr(153),$text); # Й
$text = str_replace(chr(202),chr(208).chr(154),$text); # К
$text = str_replace(chr(203),chr(208).chr(155),$text); # Л
$text = str_replace(chr(204),chr(208).chr(156),$text); # М
$text = str_replace(chr(205),chr(208).chr(157),$text); # Н
$text = str_replace(chr(206),chr(208).chr(158),$text); # О
$text = str_replace(chr(207),chr(208).chr(159),$text); # П
$text = str_replace(chr(209),chr(208).chr(161),$text); # С
$text = str_replace(chr(210),chr(208).chr(162),$text); # Т
$text = str_replace(chr(211),chr(208).chr(163),$text); # У
$text = str_replace(chr(212),chr(208).chr(164),$text); # Ф
$text = str_replace(chr(213),chr(208).chr(165),$text); # Х
$text = str_replace(chr(214),chr(208).chr(166),$text); # Ц
$text = str_replace(chr(215),chr(208).chr(167),$text); # Ч
$text = str_replace(chr(216),chr(208).chr(168),$text); # Ш
$text = str_replace(chr(217),chr(208).chr(169),$text); # Щ
$text = str_replace(chr(218),chr(208).chr(170),$text); # Ъ
$text = str_replace(chr(219),chr(208).chr(171),$text); # Ы
$text = str_replace(chr(220),chr(208).chr(172),$text); # Ь
$text = str_replace(chr(221),chr(208).chr(173),$text); # Э
$text = str_replace(chr(222),chr(208).chr(174),$text); # Ю
$text = str_replace(chr(223),chr(208).chr(175),$text); # Я
$text = str_replace(chr(224),chr(208).chr(176),$text); # а
$text = str_replace(chr(225),chr(208).chr(177),$text); # б
$text = str_replace(chr(226),chr(208).chr(178),$text); # в
$text = str_replace(chr(227),chr(208).chr(179),$text); # г
$text = str_replace(chr(228),chr(208).chr(180),$text); # д
$text = str_replace(chr(229),chr(208).chr(181),$text); # е
$text = str_replace(chr(184),chr(209).chr(145),$text); # ё
$text = str_replace(chr(230),chr(208).chr(182),$text); # ж
$text = str_replace(chr(231),chr(208).chr(183),$text); # з
$text = str_replace(chr(232),chr(208).chr(184),$text); # и
$text = str_replace(chr(233),chr(208).chr(185),$text); # й
$text = str_replace(chr(234),chr(208).chr(186),$text); # к
$text = str_replace(chr(235),chr(208).chr(187),$text); # л
$text = str_replace(chr(236),chr(208).chr(188),$text); # м
$text = str_replace(chr(237),chr(208).chr(189),$text); # н
$text = str_replace(chr(238),chr(208).chr(190),$text); # о
$text = str_replace(chr(239),chr(208).chr(191),$text); # п
$text = str_replace(chr(240),chr(209).chr(128),$text); # р
$text = str_replace(chr(241),chr(209).chr(129),$text); # с
$text = str_replace(chr(242),chr(209).chr(130),$text); # т
$text = str_replace(chr(243),chr(209).chr(131),$text); # у
$text = str_replace(chr(244),chr(209).chr(132),$text); # ф
$text = str_replace(chr(245),chr(209).chr(133),$text); # х
$text = str_replace(chr(246),chr(209).chr(134),$text); # ц
$text = str_replace(chr(247),chr(209).chr(135),$text); # ч
$text = str_replace(chr(248),chr(209).chr(136),$text); # ш
$text = str_replace(chr(249),chr(209).chr(137),$text); # щ
$text = str_replace(chr(250),chr(209).chr(138),$text); # ъ
$text = str_replace(chr(251),chr(209).chr(139),$text); # ы
$text = str_replace(chr(252),chr(209).chr(140),$text); # ь
$text = str_replace(chr(253),chr(209).chr(141),$text); # э
$text = str_replace(chr(254),chr(209).chr(142),$text); # ю
$text = str_replace(chr(255),chr(209).chr(143),$text); # я

return $text;
}
?>