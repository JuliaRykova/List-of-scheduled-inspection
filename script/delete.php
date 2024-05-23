<?php

// подключаемся к базе данных через файл connect.php
require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `the register of scheduled inspections` WHERE `the register of scheduled inspections`.`id` = '$id'");

header('Location: ../index.php');
