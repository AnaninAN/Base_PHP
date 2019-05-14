<?php

require './engine/connect-bd.php';

$SQL_query = "SELECT * FROM host1404600_geekbrains.gallery ORDER BY gallery.views DESC";
$query = mysqli_query($mysqli, $SQL_query);

mysqli_close($mysqli);

$images = [];

while ($row = mysqli_fetch_assoc($query)) {
    $images[] = $row;
}