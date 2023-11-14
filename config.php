<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cv_rianpp';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo 'Connection failed!';
}
