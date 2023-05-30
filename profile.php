<?php

     include "config.php";
     include "server/control_user.php";

     $pageTitle = "Ragnars E-Ticaret - Kullanıcı Profili";

?>

<!DOCTYPE html>
<html lang="tr">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Devilyxrd Was Here XD">
     <link rel="import" href="assets/css/sweetAlertCdn.html">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="assets/css/global.css">
     <link rel="stylesheet" href="assets/css/frontCss/profile.css">
     <link rel="stylesheet" href="assets/css/mediaCss/profileMedia.css">

     <title><?= $pageTitle ?></title>
</head>
<body>
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
                         <img src="assets/media/profiles/<?= $hash ?>/<?= $file ?>" alt="EMPTY"> 
                    <?php
                         } else {
                    ?>
                         <img src="assets/media/profiles/<?= $hash ?>/<?= $file ?>" alt="USER">
                    <?php
                         }
                    
                    ?>

                    <h1><?= $data['name'] . " " . $data['surname'] ?></h1><br>

                    <p>Hesap Türü: <?php if($data['accountType'] == "customer"){echo "Müşteri Hesabı";} else if($data['accountType'] == "business"){echo "İşletme Hesabı";} ?></p><br>
                    <p>Kayıt Tarihi: <?= $data['rDate'];?></p><br>
                    
                    <?php
                         $requestCheck = $db -> query("SELECT * FROM 219f2_request WHERE hash = '$hash'");
                         while ($requestData = $requestCheck -> fetch()){

                         
                    ?>
                    <p>İşlem Durumu: <?php if($requestData['status'] == "1"){ echo "İşlem Bekleniyor..."; } else if($requestData['status'] == "2") { echo "İşlem Kabul Edildi"; } else if($requestData['status'] == "0") { echo "İşlem Reddedildi"; } else if($requestData['status'] == null) { echo "İşlem Yok"; }  ?> </p><br>
                    <?php
                         }
                    ?>

               </div>

               <!---->

               <div class="inf">
                    
                    <p>Eposta Adresiniz: <?= $data['email']; ?></p><br>

                    <p>Tc Kimlik Numaranız: <?php if($data['tc'] == null){echo "İşletme Hesabı Olmadığı İçin Tc Doğrulaması Yapılmadı.";}else{echo $data['tc'];} ?></p><br>

                    <p>Telefon Numarası: <?php if($data['phoneNumber'] == null){echo "İşletme Hesabı Olmadığı İçin Telefon Numarası Doğrulaması Yapılmadı.";}else{echo $data['phoneNumber'];} ?></p><br>

                    <p>Doğum Tarihi: <?php if($data['bDate'] == null){echo "İşletme Hesabı Olmadığı İçin Doğum Tarihi Doğrulaması Yapılmadı.";}else{echo $data['bDate'];} ?></p><br><br>

                    <p>[UYARI] <br> Kullanıcı Gizlilik ve Güvenliği için maalesef size şifrenizi gösteremeyiz fakat şifrenizi güncellemek istiyorsanız aşağıdan kullanıcı düzenleme sayfasına gidip şifreinizi değiştirebilirsiniz. <br><br> Ragnars E-Ticaret güvenli ve mutlu alışverişler diler.</p>

                    <br><br><br>

                    <p><a href="business">İşletme Hesabına Dönüştür</a> &emsp; <a href="profileEdit">Hesabımı Düzenle</a></p><br>
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