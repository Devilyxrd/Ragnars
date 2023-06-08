<?php

     include "../config.php";

     $msgHash = htmlspecialchars(strip_tags($_POST['msgHash']));
     $value = htmlspecialchars(strip_tags($_POST['value']));

     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          try{
               $query = $db -> query("SELECT * FROM 219f2_help WHERE msgHash = '$msgHash'");

               while($data = $query -> fetch()){
                    $answer = $data['answer'];
               }

               if($answer){
                    echo "Bu destek talebi zaten yanıtlanmış.";
               } else {
                    $sql = $db -> query("UPDATE 219f2_help SET answer = '$value' WHERE msgHash = '$msgHash'");
                    echo "Yanıt Başarılı Bir Şekilde Verildi.";
                    exit;
               }
               

          } catch(PDOException $e){
               echo $e;
          }

     }
?>