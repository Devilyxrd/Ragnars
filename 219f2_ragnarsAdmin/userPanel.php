<?php

     $pageTitle = "Ragnars E-Ticaret - User Panel";
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
     <link rel="stylesheet" href="assets/css/frontCss/userPanel.css">
     <link rel="stylesheet" href="assets/css/mediaCss/userPanelMedia.css">

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
                         <tr>
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
                              <th>Hesap Seviyesi</th>
                              <th>Hesap Türü</th>
                              <th>Kayıt Tarihi</th>
                              <th>Son Giriş Tarihi</th>
                         </tr>
                    </thead>
                    <tbody>
                              <?php
                                   $sql = $db -> query("SELECT * FROM 219f2_users");
                                   
                                   while ($data = $sql -> fetch()){

                                   
                              ?>

                              <tr>
                                   <th> <?= $data['id']; ?></th>
                                   <th><a href="#" name="uEdit" userHash="<?= $data['hash']; ?>"><i class="fa-solid fa-pen-to-square"></i></a> <a href="#" name="uDel" userHash="<?= $data['hash']; ?>"><i class="fa-solid fa-trash"></i></a> <a href="#" name="uBan" userHash="<?= $data['hash']; ?>"><i class="fa-solid fa-ban"></i></a></th>
                                   <th><?php if($data['ip'] == null){echo "Veri Yok";} else {echo $data['ip'];} ?></th>
                                   <th><?php if($data['tc'] == null){echo "Veri Yok";} else {echo $data['tc'];} ?></th>
                                   <th><?php if($data['bDate'] == null){echo "Veri Yok";} else {echo $data['bDate'];} ?></th>
                                   <th><?php if($data['name'] == null){echo "Veri Yok";} else {echo $data['name'];} ?></th>
                                   <th><?php if($data['surname'] == null){echo "Veri Yok";} else {echo $data['surname'];} ?></th>
                                   <th><?php if($data['email'] == null){echo "Veri Yok";} else {echo $data['email'];} ?></th>
                                   <th><?php if($data['hash'] == null){echo "Veri Yok";} else {echo $data['hash'];} ?></th>
                                   <th><?php if($data['phoneNumber'] == null){echo "Veri Yok";} else {echo $data['phoneNumber'];} ?></th>
                                   <th><?php if($data['accessLevel'] == null){echo "Veri Yok";} else if($data['accessLevel'] == 0){echo "Kullanıcı";} else if($data['accessLevel'] == 1){echo "Admin";} ?></th>
                                   <th><?php if($data['accountType'] == null){echo "Veri Yok";} else if($data['accountType'] == "customer"){echo "Müşteri";} else if($data['accountType'] == "business"){echo "İşletme Hesabı";} else if($data['accountType'] == "admin"){echo "Yönetici";} ?></th>
                                   <th><?php if($data['rDate'] == null){echo "Veri Yok";} else {echo $data['rDate'];} ?></th>
                                   <th><?php if($data['lastLoginTime'] == null){echo "Veri Yok";} else {echo $data['lastLoginTime'];} ?></th>
                              </tr>

                              <?php
                                   }
                              ?>
                    </tbody>
               </table>
          </div>


     </main>

     <script src="assets/js/userPanel.js"></script>
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