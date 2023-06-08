<?php

//error_reporting(0);

$UserAgent = $_SERVER['HTTP_USER_AGENT'];

if ($UserAgent == "" || $UserAgent == '' || $UserAgent == null || empty($UserAgent)) {
    exit;
    die;
}

try {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "219f2_rangars";

    $db = new PDO("mysql:host=$host;dbname=$dbname;options='--client_encoding=UTF8'", "$user", "$pass");
} catch (PDOException $ex) {
    exit();
    die();
}

session_start();

date_default_timezone_set('Europe/Istanbul');
