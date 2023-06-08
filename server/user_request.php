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
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $surname = htmlspecialchars(strip_tags($_POST['surname']));

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
        exit;
    } else if(strlen($tc) != 11 || preg_match('/[a-zA-Z]/', $tc)){
        Header("Location: ../business/tc");
        exit;
    } else if(strlen($nPhone) != 13 || preg_match('/^\+90[5-9]{1}[0-9]{9}$/', $pNumber) || preg_match('/[a-zA-Z]/', $pNumber)){
        Header("Location: ../business/phone");
        exit;
    }else {
        $statement = $db->prepare("INSERT INTO 219f2_request (
            ip,
            name,
            surname,
            email,
            tc,
            bDate,
            phoneNumber,
            hash,
            addDate,
            status
            ) 
            VALUES (?,?,?,?,?,?,?,?,?,?)");
        $statement->execute(array(
            $ip,
            $name,
            $surname,
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

    function encripitar($password)
    {
        $salt = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
        $output = hash_hmac('md5', $password, $salt);
        return $output;
    }

    $sql = $db -> query("SELECT * FROM 219f2_users WHERE email = '$email'");
    $query = $sql -> rowCount();

    if($email){
        
        if($query == 1){
            Header("Location: ../profileEdit/same");
            exit;
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            Header("Location: ../profileEdit/email");
            exit;
        } else {
            $emailSql = $db -> query("UPDATE 219f2_users SET email = '$email' WHERE hash = '$hash'");
            Header("Location: ../profileEdit/emailUpd");
            exit;
        }

    }

    if($pass && $passAgain){

        
        if(strlen($pass) < 8){
            Header("Location: ../profileEdit/pass");
            exit;
        } else if($pass != $passAgain){
            Header("Location: ../profileEdit/disagreement");
            exit;
        } else {
            $newPass = encripitar($pass);
            $passSql = $db -> query("UPDATE 219f2_users SET pass = '$newPass' WHERE hash = '$hash'");
            Header("Location: ../profileEdit/passUpd");
            exit;
        }
        
    }

    if($_FILES["photo"]['size'] > 0){

        $imgInfo = getimagesize($_FILES['photo']['tmp_name']);
        $imgWidth = $imgInfo[0];
        $imgHeight = $imgInfo[1];

        if($imgWidth > $minWidth || $imgHeight > $minHeight){
            Header("Location: ../profileEdit/measure");
            exit;
        } else if(!in_array($_FILES["photo"]["type"], $allowedTypes)){
            Header("Location: ../profileEdit/type");
            exit;
        } else if($_FILES["photo"]["size"] > $maxMB){
            Header("Location: ../profileEdit/size");
            exit;
        } else {
            $dir = "C:/xampp/htdocs/assets/media/profiles/$hash/";
            $file = $dir . basename($_FILES["photo"]["name"]);
            $tmp_name = $_FILES["photo"]["tmp_name"];
            mkdir($dir, 0777, true);

            $sql = $db -> query("UPDATE 219f2_users SET profileImg = '$file' WHERE hash = '$hash'");
            move_uploaded_file($tmp_name, $file);
            Header("Location: ../profileEdit/photoUpd");
            exit;
        }

    }
    
    if(empty($email) || empty($pass) || empty($passAgain) || empty($hash) || $_FILES[$photo]['size'] < 0){
        Header("Location: ../profileEdit/empty");
        exit;
    } 

}

if(isset($_POST['send'])){

    $name = htmlspecialchars(strip_tags($_POST['name']));
    $surname = htmlspecialchars(strip_tags($_POST['surname']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $phoneNumber = htmlspecialchars(strip_tags($_POST['phoneNumber']));
    $accountType = htmlspecialchars(strip_tags($_POST['accountType']));
    $hash = htmlspecialchars(strip_tags($_POST['hash']));
    $msg = htmlspecialchars(strip_tags($_POST['helpMsg']));

    $msgHash = md5($hash . md5(rand(111, 999)));

    if(empty($name) || empty($surname) || empty($email) || empty($phoneNumber) || empty($accountType) || empty($hash) || empty($msg)){
        Header("Location: ../help/empty");
        exit;
    } else if(strlen($phoneNumber) != 16 || preg_match('/^\90[5-9]{1}[0-9]{9}$/', $phoneNumber) || preg_match('/[a-zA-Z]/', $phoneNumber)){
        Header("Location: ../help/phone");
        exit;
    } else {
        $sql = $db -> prepare("INSERT INTO 219f2_help (`name`, `surname`, `message`, `email`, `phoneNumber`, `hash`, `accessType`, `msgHash`) VALUES(?,?,?,?,?,?,?,?)");
        $query = $sql -> execute(array($name,$surname,$msg,$email,$phoneNumber,$hash,$accountType,$msgHash));
        Header("Location: ../help/success");
        exit;
    }

}

if(isset($_POST['productAdd'])){
    
    $productName = htmlspecialchars(strip_tags($_POST['productName']));
    $productImg = $_FILES['productImg'];
    $category = htmlspecialchars(strip_tags($_POST['category']));
    $subCategory = htmlspecialchars(strip_tags($_POST['subCategory']));
    $price = htmlspecialchars(strip_tags($_POST['price']));
    $commission = htmlspecialchars(strip_tags($_POST['commission']));
    $hash = htmlspecialchars(strip_tags($_POST['hash']));

    $maxMB = 4 * 1024 * 1024;

    $allowedTypes = array("image/jpeg" , "image/png", "image/jpg");

    $minWidth = 500;
    $minHeight = 500;

    $lengthCheck = strlen($productName) > 40;

    $productHash = md5($productName . $category . md5(rand(111, 999)));

    $productImg['tmp_name'];

    if(empty($productName) || $productImg['size'] <= 0  || empty($category) || empty($subCategory) || empty($price) || empty($commission)){
        Header("Location: ../productAdd/empty");
        exit;
    } else if($lengthCheck){
        Header("Location: ../productAdd/length");
        exit;
    } else if(ctype_digit($productName)){
        Header("Location: ../productAdd/nameType");
        exit;
    } else if(preg_match('/[a-zA-Z]/', $price)){
        Header("Location: ../productAdd/priceType");
        exit;
    } else {

        $types = array(IMAGETYPE_JPEG, IMAGETYPE_PNG);
        $detected = exif_imagetype($productImg['tmp_name']);

        if(in_array($detected, $types)){
            
            $imgInfo = getimagesize($_FILES['productImg']['tmp_name']);
            $imgWidth = $imgInfo[0];
            $imgHeight = $imgInfo[1];

            if($imgWidth > $minWidth || $imgHeight > $minHeight){
                Header("Location: ../productAdd/measure");
                exit;
            } else if ($productImg["size"] > $maxMB){
                Header("Location: ../productAdd/size");
                exit;
            } else {
                $dir = "C:/xampp/htdocs/assets/media/products/";
                $file = $dir . basename($productImg["name"]);
                $tmp_name = $productImg["tmp_name"];
                mkdir($dir, 0777, true);
                move_uploaded_file($tmp_name, $file);
        
                switch($category){
                    case "1":
                        $category = "Elektronik Ürünler";
                    break;
                    case "2":
                        $category = "Giyim ve Moda";
                    break;
                    case "3":
                        $category = "Ev ve Bahçe";
                    break;
                    case "4":
                        $category = "Güzellik ve Kişisel Bakım";
                    break;
                    case "5":
                        $category = "Spor ve Outdoor";
                    break;
                    case "6":
                        $category = "Kitaplar ve Medya";
                    break;
                    case "7":
                        $category = "Otomotiv";
                    break;
                }
        
                $sql = $db -> prepare("INSERT INTO 219f2_productRequest(`productName`, `productImg`, `category`, `subCategory`, `price`, `commission`, `productHash`) VALUES(?,?,?,?,?,?,?)");
                $sql -> execute(array($productName,$file,$category,$subCategory,$price,$commission,$productHash));
                Header("Location: ../productAdd/success");
                exit;
            }

        } else {
            Header("Location: ../productAdd/type");
            exit;
        }
        
    }

}

?>