<?php
/**
 * Created by PhpStorm.
 * User: bhavin
 * Date: 17-04-2019
 * Time: 07:31 PM
 */
$string = 'This is example of reverse string in PHP';
for($i=strlen($string)-1, $j=0; $j<$i; $i--, $j++) {
    list($string[$j], $string[$i]) = array($string[$i], $string[$j]);
}
echo $string;
