<?php
     include "config.php";
     $pageTitle = "Ragnars E-Ticaret - Kayıt Sayfası";

     $domain = $_SERVER['SERVER_NAME'];

     $checkUserAccount = $_SESSION['userAccount'];
     $checkUser = $db->query("SELECT * FROM 219f2_users WHERE hash = '$checkUserAccount'");
     $checkCount = $checkUser->rowCount();
 
     if ($checkCount == 1) {
         Header('Location: ../home');
         exit;
     }
?>

<!DOCTYPE html>
<html lang="tr">
<head>

     <!-- SweetAlert2 CSS dosyası -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

     <!-- jQuery ve SweetAlert2 JS dosyaları -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Devilyxrd Was Here XD">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/frontCss/register.css">
     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/mediaCss/registerMedia.css">
     <link rel="stylesheet" href="https://<?= $domain ?>/asssets/css/global.css">
     <title><?= $pageTitle ?></title>
</head>
<body>

     <?php

     if (htmlspecialchars($_GET['status'] == "empty")) {
     echo "<script>Swal.fire('Başarısız!','Boş alan bırakmayınız!','error')</script>";
     } else if (htmlspecialchars($_GET['status'] == "ip")) {
     echo "<script>Swal.fire('Başarısız!','En fazla 3 tane hesap oluşturabilirsiniz!','error')</script>";
     } else if (htmlspecialchars($_GET['status'] == "email")) {
     echo "<script>Swal.fire('Başarısız!','Bu email adresi zaten mevcut!','error')</script>";
     } else if (htmlspecialchars($_GET['status'] == "filter")) {
     echo "<script>Swal.fire('Başarısız!','Email istenilen formatta olmalıdır!','error')</script>";
     } else if (htmlspecialchars($_GET['status'] == "length")) {
     echo "<script>Swal.fire('Başarısız!','Adınız veya soyadınız en az 4 karakter, en fazla 16 karakterden oluşmalıdır!','error')</script>";
     } else if (htmlspecialchars($_GET['status'] == "pass")) {
     echo "<script>Swal.fire('Başarısız!','Güvenliğiniz açısından şifreniz en az 8 karakterden oluşmalıdır!','error')</script>";
     } else if (htmlspecialchars($_GET['status'] == "password")) {
     echo "<script>Swal.fire('Başarısız!','Şifreler uyuşmuyor!','error')</script>";
     } else if (htmlspecialchars($_GET['status'] == "success")) {
     echo "<script>Swal.fire('Başarılı!','Hesap başarıyla oluşturuldu. Yönlendiriliyorsunuz...','success')</script>";
     echo "<script>setTimeout(() => window.location = '../login', 3000);</script>";
     }

     ?>


     <?php
          include "assets/inc/header.php";
     ?>
     
     <main>

          <div class="regArea">
               <h1>Ragnars E-Ticaret Sitesine Hoşgeldiniz</h1><br>
               <h3>Aşağıdaki Bilgileri Eksiksiz Doldurarak Kayıt Olabilirsiniz</h3>
               
               <br><br>

               <form action="https://<?= $domain ?>/server/user_request" method="post" autocomplete="off">
                    <label for="name">Adınız</label><br><br>
                    <input type="text" name="name" id="nm">

                    <br><br>

                    <label for="surname">Soyadınız</label><br><br>
                    <input type="text" name="surname" id="sr">

                    <br><br>

                    <label for="email">Eposta Adresiniz</label><br><br>
                    <input type="email" name="email" id="em">

                    <br><br>

                    <label for="pass">Şifreniz</label><br><br>
                    <input type="password" name="pass" id="p">

                    <br><br>

                    <label for="passAgain">Şifre Tekrar</label><br><br> 
                    <input type="password" name="passAgain" id="pA">

                    <br><br><br><br>

                    <input type="submit" value="Kayıt Ol" name="register">

                    <br><br><br>

                    <p>Bir Hesaba Sahip Misin? Bu Harika Buradan <a href="login">Giriş Sayfasına</a> Gidebilirsiniz ^-^</p>

                    <br><br>
               </form>

          </div>
          
     </main>

     <?php
          include "assets/inc/footer.php";
     ?>


     
</body>
</html>