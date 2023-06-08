<?php
     include "config.php";

     $select = htmlspecialchars(strip_tags($_POST['veri']));

     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          try{
               
               $sql = $db -> query("SELECT * FROM 219f2_help WHERE msgHash = '$select'");
               
               while ($data = $sql -> fetch()){
                    if($data['answer'] == null){
                         echo "Sorunuz Henüz Cevaplanmamış";
                    } else {
                         echo $data['answer'];
                    }
               }

          } catch(PDOException $e){
               echo $e;
          }

     }
?>