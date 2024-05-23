<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$control = $_POST['control'];
$beginningVerification = $_POST['beginningVerification'];
$endVerification = $_POST['endVerification'];
$duration = $_POST['duration'];
// добавляем строку в бд 
mysqli_query($connect, "INSERT INTO `the register of scheduled inspections` (`id`, `title`, `control`, `beginningVerification`,
 `endVerification`, `duration`) VALUES (NULL, '$title',' $control', '$beginningVerification', '$endVerification', '$duration')");


//  возвращаемся на главную страницу 
header('Location: ../index.php');
