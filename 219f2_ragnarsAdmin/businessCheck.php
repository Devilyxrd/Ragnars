<?php

     $pageTitle = "Ragnars E-Ticaret - Business Account Check";
     include "../config.php";
     include "server/guard.php";

?>

<!DOCTYPE html>
<html lang="tr">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Devilyxrd Was Here XD">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="assets/css/global.css">
     <link rel="stylesheet" href="assets/css/frontCss/businessCheck.css">
     <link rel="stylesheet" href="assets/css/mediaCss/businessCheckMedia.css">

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <link rel="stylesheet" href="assets/dataTable/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="assets/dataTable/css/responsive.dataTables.min.css">
     <script src="assets/dataTable/js/jquery.dataTables.min.js"></script>
     <script src="assets/dataTable/js/dataTables.responsive.min.js"></script>

     <script src="assets/js/global.js"></script>

     <title><?= $pageTitle ?></title>
</head>
<body>
     <?php
          include "assets/inc/header.php";
     ?>
     <main>


          <div class="tableArea">
               <table id="myTable" class="display responsive nowrap" style="width:100%">
                    <thead>
                              <th>ID</th>
                              <th>#</th>
                              <th>IP</th>
                              <th>Tc</th>
                              <th>Doğum Tarihi</th>
                              <th>Ad</th>
                              <th>Soyad</th>
                              <th>Email</th>
                              <th>Kullanıcı Kimliği</th>
                              <th>Telefon Numarası</th>
                              <th>İstek Tarihi</th>
                              <th>İstek Durumu</th>
                         </tr>
                    </thead>
                    <tbody>
                              <?php
                                   $sql = $db -> query("SELECT * FROM 219f2_request");
                                   
                                   while ($data = $sql -> fetch()){

                                        $desen = '/\+([0-9]{2})([0-9]{3})([0-9]{3})([0-9]{2})([0-9]{2})/';
                                        preg_match($desen, $data['phoneNumber'], $sonuclar);

                                        $ulkeKodu = $sonuclar[1]; // Ülke kodu: 90
                                        $bolgeKodu = $sonuclar[2]; // Bölge kodu: 555
                                        $ilkUcRakam = $sonuclar[3]; // İlk üç rakam: 666
                                        $sonIkiRakam = $sonuclar[4].$sonuclar[5];

                                        $formatedNumber = $ulkeKodu . " " . $bolgeKodu . " " . $ilkUcRakam . " " . $sonIkiRakam;

                                   
                              ?>

                              <tr>
                                   <th> <?= $data['id']; ?></th>
                                   <th><a title="Hesabı Onayla" name="check" userTc="<?= $data['tc']; ?>" userBDate="<?= $data['bDate']; ?>" userPNumber="<?= "+". $formatedNumber; ?>" userStatus="<?= $data['status']; ?>" userHash="<?= $data['hash']; ?>"><i class="fa-solid fa-check"></i></i></a><a name="cancel" userStatus="<?= $data['status']; ?>" userHash="<?= $data['hash']; ?>" title="Hesabı Reddet"><i class="fa-solid fa-xmark"></i></a></th>
                                   <th><?php if($data['ip'] == null){echo "Veri Yok";} else {echo $data['ip'];} ?></th>
                                   <th><?php if($data['tc'] == null){echo "Veri Yok";} else {echo $data['tc'];} ?></th>
                                   <th><?php if($data['bDate'] == null){echo "Veri Yok";} else {echo $data['bDate'];} ?></th>
                                   <th><?php if($data['name'] == null){echo "Veri Yok";} else {echo $data['name'];} ?></th>
                                   <th><?php if($data['surname'] == null){echo "Veri Yok";} else {echo $data['surname'];} ?></th>
                                   <th><?php if($data['email'] == null){echo "Veri Yok";} else {echo $data['email'];} ?></th>
                                   <th><?php if($data['hash'] == null){echo "Veri Yok";} else {echo $data['hash'];} ?></th>
                                   <th><?php if($data['phoneNumber'] == null){echo "Veri Yok";} else {echo "+" . $formatedNumber;} ?></th>
                                   <th><?php if($data['addDate'] == null){echo "Veri Yok";} else {echo $data['addDate'];} ?></th>
                                   <th><?php if($data['status'] == "1"){ echo "İşlem Bekleniyor..."; } else if($data['status'] == "2") { echo "İşlem Kabul Edildi"; } else if($data['status'] == "0") { echo "İşlem Reddedildi"; } else if($data['status'] == null) { echo "İşlem Yok"; }  ?></th>
                              </tr>

                              <?php
                                   }
                              ?>
                    </tbody>
               </table>
          </div>


     </main>

     <script src="assets/js/businessCheck.js"></script>

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