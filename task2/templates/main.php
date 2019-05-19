<?php
$buttons = require './config/buttons.php';
require './public/main.php';
?>

<form class="calc" method="post">
    <h3>Калькулятор</h3>
    <textarea class="rezult" rows="1" cols="20"><?=$_SESSION['x1'].$_SESSION['do'].$_SESSION['x2']?></textarea>
    <?php for ($i = 0, $count = count($buttons); $i < $count; $i++) : ?>    
        <div class="lineButtons">
            <?php foreach ($buttons[$i] as $key => $value) : ?>
                <input class=<?=$value?> name=<?=$key?> value=<?=$key?> type="submit">
            <?php endforeach?>
        </div> 
    <?php endfor?>
</form>