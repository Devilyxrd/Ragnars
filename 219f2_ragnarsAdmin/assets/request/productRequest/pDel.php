<?php

     include "../config.php";

     $productHash = htmlspecialchars(strip_tags($_POST['hash']));

     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          try{
               
               $del = $db -> query("DELETE FROM 219f2_product WHERE productHash = '$productHash'");

               echo "Ürün Başarılı Kaldırıldı.";
               exit;

          } catch(PDOException $e){
               echo $e;
          }

     }
?>