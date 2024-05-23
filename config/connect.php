<?php

// подключаемся к базе данных 
$connect = mysqli_connect('localhost','root', '','register');

if (!$connect){
    echo 'ERROR';
}