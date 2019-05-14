<?php

const PATH_BIG_IMG = './public/img/catalog/big/';
const PATH_SMALL_IMG = './public/img/catalog/small/';

function getNameImage($path) {
    $images = [];
    $files = scandir($path);
    
    foreach ($files as $file) {
        $mimeType = mime_content_type($path.$file);
        if (strpos($mimeType, 'image') === 0) {
            $images[] = $file;
        }
    }
    return $images;
}

$images = getNameImage(PATH_SMALL_IMG);