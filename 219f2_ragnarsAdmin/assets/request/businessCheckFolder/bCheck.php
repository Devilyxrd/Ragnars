<?php

     include "../config.php";

     $hash = htmlspecialchars(strip_tags($_POST['hash']));
     $tc = htmlspecialchars(strip_tags($_POST['tc']));
     $bDate = htmlspecialchars(strip_tags($_POST['bDate']));
     $phoneNumber = htmlspecialchars(strip_tags($_POST['phoneNumber']));
     $status = htmlspecialchars(strip_tags($_POST['status']));

     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $statu = "2";
          $accountTpye = "business";

          try{
               if($status == "0"){
                    echo "Bu kullanıcı işlemi önceden reddedilmiş.";
               } else if($status == "2"){
                    echo "Bu hesap daha önceden onaylanmış";
               } else {
                    $sql1 = $db -> query("UPDATE 219f2_request SET status = '$statu' WHERE hash = '$hash'");
                    $sql2 = $db -> query("UPDATE 219f2_users SET tc = '$tc', bDate = '$bDate', phoneNumber = '$phoneNumber', accountType = '$accountTpye' WHERE hash = '$hash'");
                    echo "Hesap Onaylama İşlemi Başarılı Bir Şekilde Gerçekleşti.";
               }
          } catch(PDOException $e){
               echo $e;
          }

     }

?>