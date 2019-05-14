<?php

require './engine/connect-bd.php';

$SQL_query = "UPDATE host1404600_geekbrains.gallery SET views = ".($_GET['views'] + 1)." WHERE id = ".$_GET['id'];
mysqli_query($mysqli, $SQL_query);

$SQL_query = "SELECT * FROM host1404600_geekbrains.gallery WHERE id = ".$_GET['id'];
$query = mysqli_query($mysqli, $SQL_query);

mysqli_close($mysqli);

$image = mysqli_fetch_assoc($query);