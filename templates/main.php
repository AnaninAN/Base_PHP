<?php
require './public/main.php';
?>

<div class="container">
    <div>
        <h1>Галлерея</h1>
    </div>
    <div class="catalog">
        <?php foreach ($images as $image) : ?>
            <div class="poster">
                <a class="bigImg" href="./one-img.php?id=<?=$image['id']?>">
                    <img src="<?=$image['path_small']?>" alt="<?=$image['name']?>">
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>