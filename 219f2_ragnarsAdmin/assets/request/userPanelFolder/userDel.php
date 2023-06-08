<?php

     include "../config.php";

     $hash = htmlspecialchars(strip_tags($_POST['hash']));

     $userCheck = $db -> query("SELECT * FROM 219f2_users WHERE hash ='$hash'");
     while($userData = $userCheck -> fetch()){
          $tc = $userData['tc'];
          $bDate = $userData['bDate'];
          $pNumber = $userData['phoneNumber'];
          $accountType = $userData['accountType'];
     }

     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          try{
               
               $sql = $db -> query("DELETE FROM 219f2_users WHERE hash = '$hash'");
               echo "Hesap Başarılı Bir Şekilde Kapatıldı.";

          } catch(PDOException $e){
               echo $e;
          }

     }

?>