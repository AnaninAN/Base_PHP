<?php
/*  Объединить две ранее написанные функции в одну, которая получает строку на русском языке,
    производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
*/ 
    
    function transliteration($txt) {
        $translit = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
            'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ы' => 'y', 'ь' => '', 'ъ' => 'ie',
            'э' => 'e', 'ю' => 'iu', 'я' => 'ia', ' ' => '_'
        ];
        $result = "";
        
        for ($i = 0, $length = mb_strlen($txt); $i < $length; $i++) {
            $letter = "";
            foreach ($translit as $key => $value) {
                if ($key === mb_substr($txt, $i, 1)) {
                    $letter = $value;
                    break;
                }
            }
            if ($letter === "") {
                $letter = mb_substr($txt, $i, 1);
            }
            $result .= $letter;
        }
        
        return $result;
    }
    echo transliteration("привет всем! всё круто и прекрасно)))");

?>