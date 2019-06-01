<?php
require 'public/main-one-img.php';
?>

<div class="container">
    <div>
        <a class="btn" href="./index.php">Назад в галлерею</a>
    </div>
    <div class="image">
        <img src="<?=$image['path_big']?>" alt="<?=$image['name']?>">
    </div>
    <div>
        <p class="countClick">Число просмотров <strong>[ <?=$image['views']?> ]</strong></p>
    </div>
</div>