<?php

// подключаемся к базе данных через файл connect.php
require_once '../config/connect.php';

$title = $_POST['title'];
$control = $_POST['control'];
$beginningVerification = $_POST['beginningVerification'];
$endVerification = $_POST['endVerification'];
$duration = $_POST['duration'];
// добавляем пункт в бд через html
mysqli_query($connect, "INSERT INTO `the register of scheduled inspections` (`id`, `title`, `control`, `beginningVerification`,
 `endVerification`, `duration`) VALUES (NULL, '$title',' $control', '$beginningVerification', '$endVerification', '$duration')");


// Выше мы добавили строку в бд но при этом нас выбросило на новую страницу php, этот запрос возвращает нас после добавления строки на главную страницу 
header('Location: ../index.php');
