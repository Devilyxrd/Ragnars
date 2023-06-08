<?php

     include "../config.php";

     $hash = htmlspecialchars(strip_tags($_POST['hash']));
     $status = htmlspecialchars(strip_tags($_POST['status']));

     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $statu = 0;

          try{
               if($status == "0"){
                    echo "Bu kullanıcı işlemi zaten reddedilmiş.";
               } else if($status == "2"){
                    echo "Bu istek daha önceden kabul edilmiş, geri reddedilemez";
               } else {
                    $sql = $db -> query("UPDATE 219f2_request SET status = '$statu' WHERE hash = '$hash'");
                    echo "Hesap Onaylama İşlemi Reddedildi.";
               }
          } catch(PDOException $e){
               echo $e;
          }

     }

?>