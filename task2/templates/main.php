<?php
$buttons = require './config/buttons.php';
?>

<form class="calc" method="post">
    <h3>Калькулятор</h3>
    <input class="result" type="text">
    <?php for ($i = 0, $count = count($buttons); $i < $count; $i++) : ?>    
        <div class="lineButtons">
            <?php foreach ($buttons[$i] as $key => $value) : ?>
                <input class=<?=$value?> name=<?=$key?> value=<?=$key?> type="submit">
            <?php endforeach?>
        </div> 
    <?php endfor?>
</form>