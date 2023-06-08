<?php

     include "../config.php";

     $hash = htmlspecialchars(strip_tags($_POST['hash']));
     $name = htmlspecialchars(strip_tags($_POST['name']));
     $surname = htmlspecialchars(strip_tags($_POST['surname']));
     $date = htmlspecialchars(strip_tags($_POST['date']));
     $email = htmlspecialchars(strip_tags($_POST['email']));
     $accountType = htmlspecialchars(strip_tags($_POST['accountType']));
     $accessLevel = htmlspecialchars(strip_tags($_POST['accessLevel']));
     $pass = htmlspecialchars(strip_tags($_POST['pass']));
     $passAgain = htmlspecialchars($_POST['passAgain']);
     $tc = htmlspecialchars(strip_tags($_POST['tc']));
     $phone = htmlspecialchars(strip_tags($_POST['phone']));

     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          function encripitar($password)
          {
               $salt = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
               $output = hash_hmac('md5', $password, $salt);
               return $output;
          }

          try{

               //echo $hash . " " . $name . " " . $surname . " " . $date . " " . $email . " " . $accountType . " " . $accessLevel . " " . $pass . " " . $passAgain . " " . $tc;  

               $nameCheck = strlen($name) > 16 || strlen($name) < 4;
               $surnameCheck = strlen($surname) > 16 || strlen($surname) < 4;

               $emailCheck = $db->query("SELECT * FROM 219f2_users WHERE email = '$email'");
               $emailCount = $emailCheck->rowCount();

               if(empty($name) || empty($surname) || empty($date) || empty($email) || empty($accountType) || empty($accessLevel) || empty($pass) || empty($passAgain) || empty($tc) || empty($phone)){
                    echo "Herhangi Bir Veri Girişi Sağlanmadı.";
               }

               if($name){
                    if($nameCheck){
                         echo "Yeni ad 16 harften uzun 4 harften kısa olamaz";
                    } else {
                         $nameSql = $db -> query("UPDATE 219f2_users SET name = '$name' WHERE hash = '$hash'");
                         echo "Yeni ad ayarlandı.";
                         exit;
                    }
               }

               /* */

               if($surname){
                    if($surnameCheck){
                         echo "Yeni soyad 16 harften uzun 4 harften kısa olamaz";
                    } else {
                         $surnameSql = $db -> query("UPDATE 219f2_users SET surname = '$surname' WHERE hash = '$hash'");
                         echo "Yeni soyad ayarlandı.";
                         exit;
                    }
               }

               /* */

               if($date){

                    $dateSql = $db -> query("UPDATE 219f2_users SET bDate = '$date' WHERE hash = '$hash'");
                    echo "Doğum tarihi ayarlandı";
                    exit;
               }

               /* */

               if($email){
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                         echo "Email formatına dikkat ediniz";
                    } else if($emailCount == 1){
                         echo "Bu email zaten mevcut";
                    } else {
                         $emailSql = $db -> query("UPDATE 219f2_users SET email = '$email' WHERE hash = '$hash'");
                         echo "Email ayarlandı.";
                         exit;
                    }
               }

               /* */

               if($accountType){

                    if($accountType == "customer"){

                         $customerSql = $db -> query("UPDATE 219f2_users SET accountType = '$accountType' WHERE hash = '$hash'");
                         echo "Müşteri hesabı olarak ayarlandı.";
                         exit;

                    } else if($accountType == "business"){
                         $businessSql = $db -> query("UPDATE 219f2_users SET accountType = '$accountType' WHERE hash = '$hash'");
                         echo "İşletme hesabı olarak ayarlandı.";
                         exit;
                    } else if($accountType == "admin"){
                         $adminSql = $db -> query("UPDATE 219f2_users SET accountType = '$accountType' WHERE hash = '$hash'");
                         echo "Yönetici hesabı olarak ayarlandı.";
                         exit;
                    }

               }
               
               /* */

               if($accessLevel){

                    if($accessLevel == "sifir"){
                         $accessLevel = "0";
                         $zeroSql = $db -> query("UPDATE 219f2_users SET accessLevel = '$accessLevel' WHERE hash = '$hash'");
                         echo "Hesap seviyesi Kullanıcı Olarak Ayarlandı.";
                         exit;
                    } else if($accessLevel == "1"){
                         $oneSql = $db -> query("UPDATE 219f2_users SET accessLevel = '$accessLevel' WHERE hash = '$hash'");
                         echo "Hesap seviyesi Yönetici Olarak Ayarlandı.";
                         exit;
                    }

               }

               /* */

               if($pass && $passAgain){
                    if(strlen($pass) < 8){
                         echo "Güvenliğiniz için şifrenizi 8 haneden uzun yapınız.";
                         exit;
                    } else if($pass != $passAgain) {
                         echo "Şifreler Uyuşmuyor.";
                         exit;
                    } else {
                         $newPass = encripitar($pass);
                         $passSql = $db -> query("UPDATE 219f2_users SET pass = '$newPass' WHERE hash = '$hash'");
                         echo "Yeni şifre ayarlandı.";
                         exit;
                    }
               }

               /* */

               if($tc){
                    if(strlen($tc) != 11 || preg_match('/[a-zA-Z]/', $tc)){
                         echo "Lütfen tc kimlik formatına dikkat ediniz.";
                    } else {
                         $tcSql = $db -> query("UPDATE 219f2_users SET tc = '$tc' WHERE hash = '$hash'");
                         echo "Yeni tc ayarlandı.";
                         exit;
                    }
               }

               if($phone){

                    $nPhone = "+9" . $phone;

                    if(strlen($nPhone) != 13 || preg_match('/^\+90[5-9]{1}[0-9]{9}$/', $phone) || preg_match('/[a-zA-Z]/', $phone)){
                         echo "Telefon numarası formatına dikkat ediniz.";
                         exit;
                    } else {
                         $phoneSql = $db -> query("UPDATE 219f2_users SET phoneNumber = '$nPhone' WHERE hash = '$hash'");
                         echo "Yeni telefon numarası ayarlandı.";
                         exit;
                    }
               }

          } catch(PDOException $e){
               echo $e;
          }

     }



?>