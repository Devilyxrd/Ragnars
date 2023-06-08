<?php

     $pageTitle = "Ragnars E-Ticaret - Ürün Ekleme";
     include "config.php";
     include "server/control_user.php";
     $domain = $_SERVER['SERVER_NAME'];

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

     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/global.css">
     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/frontCss/productAdd.css">
     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/mediaCss/productAddMedia.css">

     <title><?= $pageTitle ?></title>
</head>
<body>
     <?php
     if (htmlspecialchars($_GET['status'] == "empty")) {
     echo "<script>Swal.fire('Başarısız!','Boş alan bırakmayınız!','error')</script>";
     } else if(htmlspecialchars($_GET['status'] == "length")){
          echo "<script>Swal.fire('Başarısız!','Ürün adı 40 karakterden uzun olamaz.','error');</script>";
     } else if(htmlspecialchars($_GET['status'] == "nameType")){
          echo "<script>Swal.fire('Başarısız!','Ürün adına sayısal değer yazmayınız.','error');</script>";
     } else if(htmlspecialchars($_GET['status'] == "priceType")){
          echo "<script>Swal.fire('Başarısız!','Fiyata alfabetik değer yazmayınız.','error');</script>";
     } else if(htmlspecialchars($_GET['status'] == "size")){
          echo "<script>Swal.fire('Başarısız!','Fotoğraf boyutu 4mb dan fazla olamaz','error');</script>";
     } else if(htmlspecialchars($_GET['status'] == "type")) {
          echo "<script>Swal.fire('Başarısız!','Fotoğraf formatı sadece jpeg ve png olabilir','error');</script>";
     } else if(htmlspecialchars($_GET['status'] == "measure")){
          echo "<script>Swal.fire('Başarısız!','Görsel Maks 500 genişlik ve yükseklikte olabilir','error');</script>";
     } else if (htmlspecialchars($_GET['status'] == "success")) {
     echo "<script>Swal.fire('Başarılı!','Ürün Ekleme İşlemi Başarılı','success')</script>";
     echo "<script>setTimeout(() => window.location = 'productAdd', 3000);</script>";
     }
     ?>
     <?php
          include "assets/inc/header.php";
     ?>
     <main>

          <div class="mega">

               <form action="https://<?= $domain ?>/server/user_request" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="areaOne">
                         <label for="productName">Ürün Adı</label><br><br>
                         <input type="text" name="productName" id="pN">

                         <br><br>

                         <label for="productImg">Ürün Fotoğrafı</label><br><br>
                         <input type="file" name="productImg" id="pI">

                         <br><br>

                         <label for="category">Ürün Kategorisi</label><br><br>
                         <select name="category" id="ct" onchange="kategoriDegistir()">
                              <option value="" disabled selected>Lütfen Kategori Seçiniz</option>
                              <option value="1">Elektronik Ürünler</option>
                              <option value="2">Giyim ve Moda</option>
                              <option value="3">Ev ve Bahçe</option>
                              <option value="4">Güzellik ve Kişisel Bakım</option>
                              <option value="5">Spor ve Outdoor</option>
                              <option value="6">Kitaplar ve Medya</option>
                              <option value="7">Otomotiv</option>
                         </select>
                    </div>

                    <div class="areaTwo">
                         <label for="subCategory">Alt Kategori</label><br><br>
                         <select name="subCategory" id="Sc">
                              <option disabled selected>Alt Kategori Seçiniz</option>
                         </select>

                         <br><br>

                         <label for="price">Ürün Fiyatı</label><br><br>
                         <input type="text" name="price" id="pr" oninput="hesap(value)">

                         <br><br>

                         <label for="commission">Komisyonlu Fiyatı</label><br><br>
                         <input type="text" name="commission" id="cm" readonly>

                         <br><br>

                         <input type="hidden" name="hash" value="<?= $_SESSION['userAccount']; ?>">

                         <input type="submit" value="Ürünü Ekle" name="productAdd">
                         <br><br>
                    </div>
               </form>
          
          </div>
            
     </main>
     <script src="https://<?= $domain ?>/assets/js/product.js"></script>
     <?php
          include "assets/inc/footer.php";
     ?>
</body>
</html>