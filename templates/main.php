<?php
require 'public/main.php';
require 'templates/modal.php';
?>

<div id="container" class="container">
    <div class="catalog">
        <?php foreach ($images as $image) : ?>
            <div class="poster">
                <a class="bigImg" href="<?= PATH_BIG_IMG.$image?>">
                    <img src="<?= PATH_SMALL_IMG.$image?>" alt="<?= $image?>">
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>