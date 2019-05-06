<?php
/*  Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
*/

    function myReplace($txt, $find, $replace) {
        
        for ($i = 0, $length = mb_strlen($txt); $i < $length; $i++) {
            $letter = mb_substr($txt, $i, 1);
            if (mb_substr($txt, $i, 1) === $find) {
                $letter = $replace;
            }
            
            $result .= $letter;
        }
        
        return $result;
    }

    echo myReplace("Я учусь программировать на языке PHP!", " ", "_");

?>