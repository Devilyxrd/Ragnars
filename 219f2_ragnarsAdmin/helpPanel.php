<?php

     $pageTitle = "Ragnars E-Ticaret - Help Panel";
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
     <link rel="stylesheet" href="assets/css/frontCss/helpPanel.css">
     <link rel="stylesheet" href="assets/css/mediaCss/helPanelMedia.css">

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
                              <th>Ad</th>
                              <th>Soyad</th>
                              <th>Mesaj</th>
                              <th>Email</th>
                              <th>Telefon Numarası</th>
                              <th>Kullanıcı Kimliği</th>
                              <th>Hesap Türü</th>
                              <th>Mesaj Kimliği</th>
                              <th>Yanıt Durumu</th>
                         </tr>
                    </thead>
                    <tbody>
                              <?php
                                   $sql = $db -> query("SELECT * FROM 219f2_help");
                                   
                                   while ($data = $sql -> fetch()){

                                   
                              ?>

                              <tr>
                                   <th> <?= $data['id']; ?></th>
                                   <th><a href="#" name="answer" msgHash="<?= $data['msgHash']; ?>"><i class="fa-solid fa-reply" title="yanıtla"></i></a> </th>
                                   <th><?php if($data['name'] == null){echo "Veri Yok";} else {echo $data['name'];} ?></th>
                                   <th><?php if($data['surname'] == null){echo "Veri Yok";} else {echo $data['surname'];} ?></th>
                                   <th><?php if($data['message'] == null){echo "Veri Yok";} else {echo $data['message'];} ?></th>
                                   <th><?php if($data['email'] == null){echo "Veri Yok";} else {echo $data['email'];} ?></th>
                                   <th><?php if($data['phoneNumber'] == null){echo "Veri Yok";} else {echo $data['phoneNumber'];} ?></th>
                                   <th><?php if($data['hash'] == null){echo "Veri Yok";} else {echo $data['hash'];} ?></th>
                                   <th><?php if($data['accessType'] == null){echo "Veri Yok";} else if($data['accessType'] == "customer"){echo "Müşteri";} else if($data['accessType'] == "business"){echo "İşletme Hesabı";} else if($data['accessType'] == "admin"){echo "Yönetici";} ?></th>
                                   <th><?php if($data['msgHash'] == null){echo "Veri Yok";} else {echo $data['msgHash'];} ?></th>
                                   <th><?php if($data['answer'] == null){echo "Geri cevap verilmemiş.";} else {echo "Cevap verilmiş.";} ?></th>
                              </tr>

                              <?php
                                   }
                              ?>
                    </tbody>
               </table>
          </div>


     </main>
     <script src="assets/js/helpAnswer.js"></script>
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

<!--     -->