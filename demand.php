<?php

     $pageTitle = "Ragnars E-Ticaret - Destek Talepleri";
     include "config.php";

?>

<!DOCTYPE html>
<html lang="tr">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Devilyxrd Was Here XD">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- SweetAlert2 CSS dosyası -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

     <!-- jQuery ve SweetAlert2 JS dosyaları -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

     <link rel="stylesheet" href="assets/css/global.css">
     <link rel="stylesheet" href="assets/css/frontCss/demand.css">
     <link rel="stylesheet" href="assets/css/mediaCss/demandMedia.css">

     <title><?= $pageTitle ?></title>
</head>
<body>
     <?php
          include "assets/inc/header.php";
     ?>
     <main>
          <?php
               if(isset($_SESSION['userAccount'])){
                    $hash = $_SESSION['userAccount'];

                    $sql = $db -> query("SELECT * FROM 219f2_users WHERE hash = '$hash'");

               while($data = $sql -> fetch()){
          ?>
       
          <div class="mega">
               
               <div class="areaOne">
                    <h1>Destek Talepleriniz</h1>
                    <br>
                    <h2><?= $data['name'] . " " . $data['surname']; ?></h2>
                    <br>
                    <h2><?= $data['email']; ?></h2>
                    <br>
                    <select name="demand" id="dmd">
                         <option selected disabled>Talepleriniz</option>
                    <?php $query = $db -> query("SELECT * FROM 219f2_help WHERE hash = '$hash'");
                         while ($data = $query->fetch()):?>
                         <option value="<?php echo $data['msgHash']; ?>">
                              <?php 
                              $kelimeler = explode(" ", $data['message']);
                              $four = array_slice($kelimeler, 0, 4);
                              foreach ($four as $kelime) {
                                   echo $kelime . " ";
                              } echo "..."; ?>
                         </option>
                    <?php endwhile; ?>
                    </select>
               </div>
               <!---->
               <div class="areaTwo">
                    <h1>Geri Dönüt</h1>
                    <br>
                    <textarea disabled id="answer"></textarea>
               </div>

          </div>

     </main>

     <?php
          }
     }
     ?>

     <script src="assets/js/select.js"></script>

     <?php
          include "assets/inc/footer.php";
     ?>
</body>
</html>