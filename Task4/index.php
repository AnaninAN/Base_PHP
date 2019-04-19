<?php
    $title = 'Личный сайт студента GeekBrains';
    $year=date("Y");
    $nameStudent = ['Андрей Ананьин','Andrey Ananin'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>

<body>
    <div class="content">
        <h1><?=$title?></h1>
        <div class="box_text">
            <p><b>Добрый день!</b>
                <br>
                <br>Меня зовут <i><?=$nameStudent[0]?></i>.
                <br>Лет 10&nbsp;назад программировал в&nbsp;основном на&nbsp;Delphi и&nbsp;Visual Basic.
                <br>В&nbsp;свое время работал инженером в&nbsp;Сбербанке&nbsp;&mdash; обслуживание серверов, баз данных, настройка банкоматов и&nbsp;терминалов. Соскучился по&nbsp;этим временам и&nbsp;решил в&nbsp;свой возраст Христа узнать что-то новое))</p>
            <p>В&nbsp;этом мне помог IT-портал <a href="https://geekbrains.ru" target="_blank">GeekBrains</a></p>
        </div>
    </div>
    <div class="footer"> Copyright &copy;
        <?=$year?> <?=$nameStudent[1]?> </div>
</body>

</html>