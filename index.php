<?php

function reverseString(string $string): string
{

    $result = $string;
    $words = preg_split('#(\!|\.|\,|\?| )#mu', $string);
    foreach ($words as $word) {
        $revers = '';
        $end = mb_strlen($word) -1;
        for ($i = $end; $i >= 0; $i--) {
            $current = mb_substr($word, $i, 1);
            $revert = mb_substr($word, $end - $i, 1);
            if (IntlChar::isUUppercase($revert)) {
                $revers .= mb_strtoupper($current);
            }  else {
                $revers .= mb_strtolower($current);
            }
        }
        $result = str_replace($word, $revers, $result);
    }

    return $result;
}

$string = 'Привет! Давно не виделись.';
var_dump(reverseString($string));