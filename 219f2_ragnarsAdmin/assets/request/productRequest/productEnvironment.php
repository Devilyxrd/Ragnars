<?php

     include "../config.php";

     $productHash = htmlspecialchars(strip_tags($_POST['hash']));

     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          try{
               
               $sql = $db -> query("SELECT * FROM 219f2_productRequest WHERE productHash = '$productHash'");
               while($data = $sql -> fetch()){
                    $productName = $data['productName'];
                    $productImg = $data['productImg'];
                    $category = $data['category'];
                    $subCategory = $data['subCategory'];
                    $price = $data['price'];
                    $commission = $data['commission'];
               }
               $environment = "1";

               $add = $db -> prepare("INSERT INTO 219f2_product(`productName`,`productImg`,`category`,`subCategory`,`price`,`commission`,`productHash`,`environment`) VALUES(?,?,?,?,?,?,?,?)");
               $add -> execute(array($productName,$productImg,$category,$subCategory,$price,$commission,$productHash,$environment));

               $del = $db -> query("DELETE FROM 219f2_productRequest WHERE productHash = '$productHash'");

               echo "Ürün Başarılı Bir Şekilde Ürünler Sayfasına Çevreci Etiketi İle Eklendi.";
               exit;

          } catch(PDOException $e){
               echo $e;
          }

     }
?>