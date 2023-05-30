<?php

include '../config.php';

if (isset($_POST['register'])) {

    $name = htmlspecialchars(strip_tags($_POST['name']));
    $surname = htmlspecialchars(strip_tags($_POST['surname']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $pass = htmlspecialchars(strip_tags($_POST['pass']));
    $passAgain = htmlspecialchars(strip_tags($_POST['passAgain']));

    date_default_timezone_set('Europe/Istanbul');

    $date = date('y.m.d H:i:s');

    if (isset($_SERVER['HTTP_CLIENT_IP'])) $ip = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED'])) $ip = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED'])) $ip = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR'])) $ip = $_SERVER['REMOTE_ADDR'];
    else $ip = 'Bilinmiyor';

    function encripitar($password)
    {
        $salt = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
        $output = hash_hmac('md5', $password, $salt);
        return $output;
    }

    $IPCheck = $db->query("SELECT * FROM 219f2_users WHERE ip = '$ip'");
    $IPCount = $IPCheck->rowCount();

    $EmailCheck = $db->query("SELECT * FROM 219f2_users WHERE email = '$email'");
    $EmailCount = $EmailCheck->rowCount();

    $accessLevel = 0;
    $accountType = "customer";

    $hash = md5($name . $email . md5(rand(111, 999)));

    if (empty($name) || empty($surname) || empty($email) || empty($passAgain) || empty($passAgain)) {
        Header('Location: ../register/empty');
        exit;
    } else if ($IPCount >= 3) {
        Header('Location: ../register/ip');
        exit;
    } else if ($EmailCount == 1) {
        Header('Location: ../register/email');
        exit;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        Header('Location: ../register/filter');
        exit;
    } else if (strlen($name) > 16 || strlen($name) < 4 || strlen($surname) > 16 || strlen($surname) < 4) { 
        Header('Location: ../register/length');
        exit;
    } else if (strlen($pass) < 8) {
        Header('Location: ../register/pass');
        exit;
    } else if ($pass != $passAgain) {
        Header('Location: ../register/password');
        exit;
    } else {
        $statement = $db->prepare("INSERT INTO 219f2_users (
            ip,
            name,
            surname,
            email,
            pass,
            hash,
            accessLevel,
            accountType,
            rDate
            ) 
            VALUES (?,?,?,?,?,?,?,?,?)");
        $statement->execute(array(
            $ip,
            $name,
            $surname,
            $email,
            encripitar($pass),
            $hash,
            $accessLevel,
            $accountType,
            $date
        ));
        Header('Location: ../register/success');
        exit;
    }
}

if (isset($_POST['login'])) {


    $name = htmlspecialchars(strip_tags($_POST['name']));
    $surname = htmlspecialchars(strip_tags($_POST['surname']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $pass = htmlspecialchars(strip_tags($_POST['pass']));

    function encripitar($password)
    {
        $salt = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
        $output = hash_hmac('md5', $password, $salt);
        return $output;
    }

    $pNew = encripitar($pass);

    $query = $db->query("SELECT * FROM 219f2_users WHERE email = '$email' AND pass = '$pNew'");
    $accountCount = $query->rowCount();

    while ($data = $query->fetch()) {
        $sessionKey = $data['hash'];
        $getName = $data['name'];
        $getSurname = $data['surname'];
    }

    date_default_timezone_set('Europe/Istanbul');
    $DateTimeNow = date('d.m.y H:i:s');

    if (empty($name) || empty($surname) || empty($email) || empty($pass)) {
        Header("Location: ../login/empty");
        exit;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        Header("Location: ../login/email");
        exit;
    } else if ($accountCount == 1) {
        $logsys = "INSERT INTO 219f2_logs (message, type, date) VALUES (?,?,?)";
        $db->prepare($logsys)->execute(["$getName $getSurname başarılı bir şekilde giriş yaptı.", "account", $DateTimeNow]);
        $_SESSION['userAccount'] = $sessionKey;
        session_write_close();
        Header("Location: ../login/success");
        exit;
    } else {    
        Header("Location: ../login/error");
        exit;
    }
}

if (isset($_POST['convert'])){

    $tc = htmlspecialchars(strip_tags($_POST['tc']));
    $bDate = htmlspecialchars(strip_tags($_POST['bDate']));
    $pNumber = htmlspecialchars(strip_tags($_POST['phoneNumber']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $ip = htmlspecialchars(strip_tags($_POST['ip']));
    $hash = htmlspecialchars(strip_tags($_POST['hash']));

    $date = date('y.m.d H:i:s');

    $status = "1";

    $nPhone = "+9" . $pNumber;

    $requestCheck = $db->query("SELECT * FROM 219f2_request WHERE hash = '$hash'");
    $requestCount = $requestCheck -> rowCount();

    if(empty($tc) || empty($bDate) || empty($pNumber) || empty($email) || empty($ip) || empty($hash)){
        Header("Location: ../business/empty");
        exit;
    } else if($requestCount == 1){
        Header("Location: ../business/active");
    } else if(strlen($tc) != 11 || preg_match('/[a-zA-Z]/', $tc)){
        Header("Location: ../business/tc");
        exit;
    } else if(strlen($nPhone) != 13 || preg_match('/^\+90[5-9]{1}[0-9]{9}$/', $pNumber) || preg_match('/[a-zA-Z]/', $pNumber)){
        Header("Location: ../business/phone");
    }else {
        $statement = $db->prepare("INSERT INTO 219f2_request (
            ip,
            email,
            tc,
            bDate,
            phoneNumber,
            hash,
            addDate,
            status
            ) 
            VALUES (?,?,?,?,?,?,?,?)");
        $statement->execute(array(
            $ip,
            $email,
            $tc,
            $bDate,
            $nPhone,
            $hash,
            $date,
            $status
        ));
        Header('Location: ../business/success');
        exit;
    }

}


if(isset($_POST['update'])){

    $email = htmlspecialchars(strip_tags($_POST['email']));
    $pass = htmlspecialchars(strip_tags($_POST['pass']));
    $passAgain = htmlspecialchars(strip_tags($_POST['passAgain']));
    $hash = htmlspecialchars(strip_tags($_POST['hash']));

    $photo = htmlspecialchars(strip_tags($_POST['photo']));

    $maxMB = 4 * 1024 * 1024;

    $allowedTypes = array("image/jpeg" , "image/png");

    $minWidth = 950;
    $minHeight = 950;

    $imgInfo = getimagesize($_FILES['photo']['tmp_name']);
    $imgWidth = $imgInfo[0];
    $imgHeight = $imgInfo[1];

    function encripitar($password)
    {
        $salt = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
        $output = hash_hmac('md5', $password, $salt);
        return $output;
    }

    $sql = $db -> query("SELECT * FROM 219f2_users WHERE email = '$email'");
    $query = $sql -> rowCount();

    if(empty($email) || empty($pass) || empty($passAgain) || empty($hash) || $_FILES[$photo]['size'] < 0){
        Header("Location: ../profileEdit/empty");
        exit;
    } else if($query == 1){
        Header("Location: ../profileEdit/same");
        exit;
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        Header("Location: ../profileEdit/email");
        exit;
    } else if(strlen($pass) < 8){
        Header("Location: ../profileEdit/pass");
        exit;
    } else if($pass != $passAgain){
        Header("Location: ../profileEdit/disagreement");
        exit;
    } else if($imgWidth > $minWidth && $imgHeight > $minHeight){
        Header("Location: ../profileEdit/measure");
        exit;
    } else if($_FILES["photo"]["size"] > $maxMB){
        Header("Location: ../profileEdit/size");
        exit;
    } else if(!in_array($_FILES["photo"]["type"], $allowedTypes)){
        Header("Location: ../profileEdit/type");
        exit;
    } else {

        $newPass = encripitar($pass);
        $domain = $_SERVER['SERVER_NAME'];

        $dir = "C:/xampp/htdocs/assets/media/profiles/$hash/";
        $file = $dir . basename($_FILES["photo"]["name"]);
        $tmp_name = $_FILES["photo"]["tmp_name"];
        move_uploaded_file($tmp_name, $file);


        $userUpdate = $db -> query("UPDATE 219f2_users SET email = '$email' , pass = '$newPass' , profileImg = '$file'");

        Header("Location: ../profileEdit/success");
        exit;
    }

}

?>