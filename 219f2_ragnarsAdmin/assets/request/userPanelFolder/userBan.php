<?php

     include "../config.php";

     $hash = htmlspecialchars(strip_tags($_POST['hash']));

     $userCheck = $db -> query("SELECT * FROM 219f2_users WHERE hash ='$hash'");
     while($userData = $userCheck -> fetch()){
          $tc = $userData['tc'];
          $accountType = $userData['accountType'];
          $ip = $userData['ip'];
          $name = $userData['name'];
          $surname = $userData['surname'];
          $email = $userData['email'];
     }

     $date = date("y.m.d H:i:s");

     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          try{

               $sql1 = $db -> prepare("INSERT INTO 219f2_blacklist(ip,tc,name,surname,email,hash,accountType,bannedDate) VALUES(?,?,?,?,?,?,?,?)");
               $sql1 -> execute(array($ip,$tc,$name,$surname,$email,$hash,$accountType,$date));
               $sql2 = $db -> query("DELETE FROM 219f2_users WHERE hash = '$hash'");
               echo "Hesap Başarılı Bir Şekilde Yasaklandı.";

          } catch(PDOException $e){
               echo $e;
          }

     }

?>