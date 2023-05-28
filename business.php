<?php

     include "config.php";
     include "server/control_user.php";

     $pageTitle = "Ragnars E-Ticaret - İşletme Hesabı";

     $domain = $_SERVER['SERVER_NAME'];

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


     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/global.css">
     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/frontCss/business.css">
     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/mediaCss/businessMedia.css">

     <title><?= $pageTitle ?></title>
</head>
<body>
     <?php
          if (htmlspecialchars($_GET['status'] == "empty")) {
               echo "<script>Swal.fire('Başarısız!','Boş alan bırakmayınız!','error')</script>";
          } else if(htmlspecialchars($_GET['status'] == "active")){
               echo "<script>Swal.fire('Başarısız!','Zaten bekleyen bir işletme hesabı istediğiniz var','error');</script>";
          } else if(htmlspecialchars($_GET['status'] == "tc")){
               echo "<script>Swal.fire('Başarısız!','Tc kimlik formatınıza dikkat ediniz!','error')</script>";
          } else if(htmlspecialchars($_GET['status'] == "phone")){
               echo "<script>Swal.fire('Başarısız!','Telefon formatınıza dikkat ediniz!','error')</script>";
          } else if(htmlspecialchars($_GET['status'] == "success")){
               echo "<script>Swal.fire('Başarılı','İşletme Hesabına geçiş isteğiniz başarılı bir şekilde alındı.','success');</script>";
               echo "<script>setTimeout(() => window.location = '../profile', 3000);</script>";
          }
     ?>

     <?php
          include "assets/inc/header.php";
     ?>

     <main>

          <div class="userArea">

          <!---->

               <div class="user">

                    <?php
                         if(isset($_SESSION['userAccount'])){
                         $hash = $_SESSION['userAccount'];
                         $sql = "SELECT * FROM 219f2_users WHERE hash = '$hash'";
                         $query = $db -> query($sql);

                         while($data = $query -> fetch()){
                              $path = $data['profileImg'];
                              $file = basename($path);
                         

                         if($path == null){
                    ?>
                         <img src="https://<?= $domain ?>/assets/media/profiles/emptyProfile.png" alt="EMPTY"> 
                    <?php
                         } else {
                    ?>
                         <img src="https://<?= $domain ?>/assets/media/profiles/<?= $hash ?>/<?= $file ?>" alt="USER">
                    <?php
                         }
                    
                    ?>

                    <h1><?= $data['name'] . " " . $data['surname'] ?></h1><br>

                    <p>Hesap Türü: <?php if($data['accountType'] == "customer"){echo "Müşteri Hesabı";} else if($data['accountType'] == "business"){echo "İşletme Hesabı";} ?></p><br>
                    <p>Kayıt Tarihi: <?= $data['rDate'];?></p>

                    <!--
                         is_numeric() string ifade var mı kontrolü
                         
                         $pattern = '/^\d{3}-\d{3}-\d{4}$/';

                         Tel no geçerli mi değil mi kontrolü
                         if (preg_match($pattern, $phoneNumber))
                    -->

               </div>

               <!---->

               <div class="inf">
                    
                    <p>Eposta Adresiniz: <?= $data['email']; ?></p><br>

                    <form action="https://<?= $domain ?>/server/user_request" method="post" autocomplete="off">
                         <label for="tc">Tc Kimlik Numaranız</label><br>
                         <input type="text" name="tc" id="t">

                         <br><br>

                         <label for="bDate">Doğum Tarihiniz</label><br>
                         <input type="date" name="bDate" id="bd">

                         <br><br>

                         <label for="phoneNumber">Telefon Numaranız</label><br>
                         <input type="tel" name="phoneNumber" id="pn">

                         <br><br><br>

                         <input type="submit" value="İşletme Hesabına Çevir" name="convert">

                         <input type="hidden" name="ip" value="<?= $data['ip']; ?>">
                         <input type="hidden" name="email" value="<?= $data['email']; ?>">
                         <input type="hidden" name="hash" value="<?= $data['hash']; ?>">
                    </form>
                    
                    <br><br>
                    <?php
                         }
                    }
                    ?>
               </div>

          </div>

     </main>

     <?php
          include "assets/inc/footer.php";
     ?>
</body>
</html>