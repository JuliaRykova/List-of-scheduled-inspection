<?php

// подключаемся к базе данных через файл connect.php
require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$control = $_POST['control'];
$beginningVerification = $_POST['beginningVerification'];
$endVerification = $_POST['endVerification'];
$duration = $_POST['duration'];

mysqli_query($connect, "UPDATE `the register of scheduled inspections` SET `title` = '$title', `control` = ' $control', `beginningVerification` = '$beginningVerification', `endVerification` = '$endVerification', `duration` = '$duration' WHERE `the register of scheduled inspections`.`id` = '$id'");

header('Location: ../index.php');
