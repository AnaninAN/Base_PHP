<?php
/*  Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
        22 часа 15 минут
        21 час 43 минуты
*/

    function declensionTime($what, $time) {
        //$what - h(часы), иначе минуты
        switch ($time % 10) {                   
        case 1:
            if ($what === "h") return "час";
            return "минута";
        case 2:
        case 3:
        case 4:
            if ($what === "h") return "часа";
            return "минуты";
        default:
            if ($what === "h") return "часов";
            return "минут";
        }
    }

    function timeInWords($h, $i) {
        echo $h." ".declensionTime("h", $h)." ".$i." ".declensionTime("i", $i);
    }

    timeInWords(date('H'), date('i'));
?>