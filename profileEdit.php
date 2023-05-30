<?php

     include "config.php";
     include "server/control_user.php";

     $pageTitle = "Ragnars E-Ticaret - Hesap Düzenleme";

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
     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/frontCss/profileEdit.css">
     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/mediaCss/profileEditMedia.css">

     <title><?= $pageTitle ?></title>
</head>
<body>
     <?php
          if (htmlspecialchars($_GET['status'] == "empty")) {
               echo "<script>Swal.fire('Başarısız!','Boş alan bırakmayınız!','error')</script>";
          } else if(htmlspecialchars($_GET['status'] == "same")){
               echo "<script>Swal.fire('Başarısız!','Bu email adresi zaten hesabınızdaki ile aynı','error');</script>";
          } else if(htmlspecialchars($_GET['status'] == "email")){
               echo "<script>Swal.fire('Başarısız!','Lütfen email formatına dikkat ediniz','error');</script>";
          } else if(htmlspecialchars($_GET['status'] == "pass")){
               echo "<script>Swal.fire('Başarısız!','Güvenliğiniz için şifrenizi 8 harften uzun yapınız','error');</script>";
          } else if(htmlspecialchars($_GET['status'] == "measure")){
               echo "<script>Swal.fire('Başarısız!','Görsel Maks 950 genişlik ve yükseklikte olabilir','error');</script>";
          } else if(htmlspecialchars($_GET['status'] == "disagreement")){
               echo "<script>Swal.fire('Başarısız!','Girdiğiniz şifreler uyuşmuyor','error');</script>";
          } else if(htmlspecialchars($_GET['status'] == "size")){
               echo "<script>Swal.fire('Başarısız!','Fotoğraf boyutu 4mb dan fazla olamaz','error');</script>";
          } else if(htmlspecialchars($_GET['status'] == "type")) {
               echo "<script>Swal.fire('Başarısız!','Fotoğraf formatı sadece jpeg ve png olabilir','error');</script>";
          } else if(htmlspecialchars($_GET['status'] == "success")){
               echo "<script>Swal.fire('Başarılı','Profiliniz Başarıyla Güncellendi.','success');</script>";
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

               </div>

               <!---->

               <div class="inf">
                    
                    <p>@ <?= $data['name'] . " " . $data['surname']; ?></p><br>

                    <form action="https://<?= $domain ?>/server/user_request" method="post" autocomplete="off" enctype="multipart/form-data">
                         <label for="email">Yeni Email Adresiniz</label><br>
                         <input type="email" name="email" id="em">

                         <br><br>

                         <label for="photo">Yeni Profil Fotoğrafınız</label><br>
                         <input type="file" name="photo" id="pt">

                         <br><br>

                         <label for="pass">Yeni Şifreniz</label><br>
                         <input type="password" name="pass" id="p">

                         <br><br>

                         <label for="passAgain">Yeni Şifre Tekrar</label><br>
                         <input type="password" name="passAgain" id="pA">

                         <br><br><br>

                         <input type="submit" value="Profilimi Güncelle" name="update">

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