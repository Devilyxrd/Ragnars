<?php

     $pageTitle = "Ragnars E-Ticaret - Dashboard";
     include "../config.php";
     include "server/guard.php";
     include "server/log.php";

     $totalUsers = $db -> query("SELECT * FROM `219f2_users`");
     $userCount = $totalUsers -> rowCount();

     $totalHelp = $db -> query("SELECT * FROM `219f2_help`");
     $helpCount = $totalHelp -> rowCount();

     $totalBusiness = $db -> query("SELECT * FROM `219f2_users` WHERE accountType = 'business'");
     $businessCount = $totalBusiness -> rowCount();

?>

<!DOCTYPE html>
<html lang="tr">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Devilyxrd Was Here XD">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="/219f2_ragnarsAdmin/assets/css/global.css">
     <link rel="stylesheet" href="/219f2_ragnarsAdmin/assets/css/frontCss/main.css">
     <link rel="stylesheet" href="/219f2_ragnarsAdmin/assets/css/mediaCss/mainMedia.css">

     <title><?= $pageTitle ?></title>
</head>
<body>
     <?php
          include "assets/inc/header.php";
     ?>
     <main>
            
          <div class="rules">
               <!---->
               <ul>
                    <!---->
                    <li>
                         <i class="fa-solid fa-skull-crossbones"></i> &nbsp;
                         Admin paneline hoşgeldiniz. Buraya giriş yaptığına göre üst yetkili birisiniz :>
                    </li>
                    <br>
                    <!---->
                    <li>
                         <i class="fa-solid fa-skull-crossbones"></i> &nbsp;
                         İstediğiniz tüm eklentiler ve değişikleri bu panel üzerinden yönetip sisteme müdahale edebilirsiniz.
                    </li>
                    <br>
                    <!---->
                    <li>
                         <i class="fa-solid fa-skull-crossbones"></i> &nbsp;
                         Gerekli yönlendirmeler yukarıda mevcuttur. Sayfalara giriş yaptığınızda bir popup ile size bilgilendirme yapılacaktır.
                    </li>
                    <br>
                    <!---->
                    <li>
                         <i class="fa-solid fa-skull-crossbones"></i> &nbsp;
                         Buradaysanız yetkiniz üst seviyededir. Lütfen yetkinizi kötüye kullanmayınız.
                    </li>
                    <br>
                    <!---->
                    <li>
                         <i class="fa-solid fa-skull-crossbones"></i> &nbsp;
                         Yetkinin kötüye kullanımı durumunda bilgileriniz ilgili yerlere verilip gerekli işlemler başlatılacaktır.
                    </li>
                    <br>
                    <!---->
                    <li>
                         <i class="fa-solid fa-user-secret"></i> &nbsp;
                         Site sahibi Devilyxrd Size Mutlu ve Huzurlu Günler Diler.
                    </li>
               </ul>
               <br>
               <!---->

               <div class="area">

                    <div class="one">
                         <i class="fa-solid fa-users fa-cap"></i> &nbsp; <span class="fa-cap">Toplam Kullanıcı Sayısı</span>

                         <br><br>
                         
                         <i class="fa-regular fa-circle-check fa-desc"></i> &nbsp; <span class="fa-desc"><?= $userCount ?> Kişi</span>
                    </div>

                    <div class="two">
                         <i class="fa-solid fa-life-ring fa-cap"> &nbsp; </i><span class="fa-cap">Toplam Destek Talebi</span>

                         <br><br>

                         <i class="fa-regular fa-circle-check fa-desc"></i> &nbsp; <span class="fa-desc"><?= $helpCount ?> Destek Talebi</span>
                    </div>

                    <div class="three">
                         <i class="fa-solid fa-user-tie fa-cap"></i> &nbsp; <span class="fa-cap">Toplam İşletme Hesabı</span>
                         
                         <br><br>

                         <i class="fa-regular fa-circle-check fa-desc"></i> &nbsp; <span class="fa-desc"><?= $businessCount ?> İşletme Hesabı</span>
                    </div>

               </div>
          </div>

     </main>
     <?php
          include "assets/inc/footer.php";
     ?>
</body>
</html>

<!--
     TÜM BU SAYFALAR KODLAR VE BACKEND ŞAHSIMA AİTTİR
     Kaan namıdiğer Devilyxrd
     Devilyxrd was here XD

     imza Kgaan* <3
-->