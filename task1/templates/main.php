<?php
$result = require './public/main.php';
?>

<form class="calc" method="get">
    <input type="text" name="x">
    <select name="operation">
        <option value="">Операция...</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="y">
    <input type="submit" value="Вычислить">
    <input type="text" value="<?=$result?>">
</form>