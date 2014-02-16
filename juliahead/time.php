<?php
defined('Ogon') or die( '');
//////////////////////////////////////////////////////////Функция подсчёта времени\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
#
function arrayToPhp($array, $inc = 0)
{
    ob_start();
    if (is_array($array))
    {
        echo 'array(' . "\n";
        foreach ($array as $key => $item)
        {
            echo str_repeat("\t", $inc+1);
            if (!is_array($item))
            {
                echo '\'' . $key . '\'' . ' => \'' . str_replace('\'', "\'", $item) . '\',' . "\n";
            }
            else
            {
                echo '\'' . $key . '\' => ';
                echo arrayToPhp($item, ($inc+1));
            }
        }
        echo str_repeat("\t", $inc);
        echo '),'."\n";
    }
    return ob_get_clean();
}
?>