<?php

if (empty($_GET)) {
    return '';
}

if (empty($_GET['operation'])) {
    return 'Операция не определена';
}

if (is_null($_GET['x']) || is_null($_GET['y'])) {
    return 'Число 1 или 2 не введено';
}

$x = $_GET['x'];
$y = $_GET['y'];
$operation = $_GET['operation'];

$expression = $x.' '.$operation.' '.$y.' = ';
    
switch ($operation) {
    case '+':
        $result = $x + $y;
        break;
    case '-':
        $result = $x - $y;
        break;
    case '*':
        $result = $x * $y;
        break;
    case '/':
        if ($y === '0') {
            return 'Деление на 0 запрещено!';
        }
        $result = $x / $y;
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression.$result;