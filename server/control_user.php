<?php

include './config.php';

$checkUserAccount = $_SESSION['userAccount'];
$checkUser = $db->query("SELECT * FROM 219f2_users WHERE hash = '$checkUserAccount'");
$checkCount = $checkUser->rowCount();

if (empty($checkUserAccount) || $checkCount != 1)
{
    Header('Location: ../login');
    exit;
}

?>

