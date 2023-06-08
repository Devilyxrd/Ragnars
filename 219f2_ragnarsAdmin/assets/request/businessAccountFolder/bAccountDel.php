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
               
               if($accountType == "customer"){
                    echo "Bu bir işletme hesabı değil.";
               } else {
                    $sql1 = $db -> query("UPDATE 219f2_users SET tc = null, bDate = null, phoneNumber = null, accountType = 'customer' WHERE hash = '$hash'");
                    $sql2 = $db -> query("DELETE FROM 219f2_request WHERE hash = '$hash'");
                    echo "İşletme Hesabı Başarılı Bir Şekilde Kapatıldı.";
               }

          } catch(PDOException $e){
               echo $e;
          }

     }

?>