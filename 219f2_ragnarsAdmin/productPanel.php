<?php

     $pageTitle = "Ragnars E-Ticaret - Product Panel";
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
     <link rel="stylesheet" href="assets/css/frontCss/productPanel.css">
     <link rel="stylesheet" href="assets/css/mediaCss/productPanelMedia.css">

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
                              <th>Ürün İsmi</th>
                              <th>Kategori</th>
                              <th>Alt Kategori</th>
                              <th>Fiyat</th>
                              <th>Komisyonlu Fiyat</th>
                              <th>Ürün Kimliği</th>
                         </tr>
                    </thead>
                    <tbody>
                              <?php
                                   $sql = $db -> query("SELECT * FROM 219f2_product");
                                   
                                   while ($data = $sql -> fetch()){

                                   
                              ?>

                              <tr>
                                   <th> <?= $data['id']; ?></th>
                                   <th><a href="#" name="pDel" productHash="<?= $data['productHash']; ?>"><i class="fa-solid fa-trash"></i></a></th>
                                   <th><?php if($data['productName'] == null){echo "Veri Yok";} else {echo $data['productName'];} ?></th>
                                   <th><?php if($data['category'] == null){echo "Veri Yok";} else {echo $data['category'];} ?></th>
                                   <th><?php if($data['subCategory'] == null){echo "Veri Yok";} else {echo $data['subCategory'];} ?></th>
                                   <th><?php if($data['price'] == null){echo "Veri Yok";} else {echo $data['price'] . " TL";} ?></th>
                                   <th><?php if($data['commission'] == null){echo "Veri Yok";} else {echo $data['commission'] . " TL";} ?></th>
                                   <th><?php if($data['productHash'] == null){echo "Veri Yok";} else {echo $data['productHash'];} ?></th>
                              </tr>

                              <?php
                                   }
                              ?>
                    </tbody>
               </table>
          </div>
     </main>
     <script src="assets/js/productRequest.js"></script>
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