<?php

     $pageTitle = "Ragnars E-Ticaret - Ürünler";
     include "config.php";

?>

<!DOCTYPE html>
<html lang="tr">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Devilyxrd Was Here XD">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="assets/css/global.css">
     <link rel="stylesheet" href="assets/css/frontCss/product.css">
     <link rel="stylesheet" href="assets/css/mediaCss/productMedia.css">

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <link rel="stylesheet" href="assets/dataTable/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="assets/dataTable/css/responsive.dataTables.min.css">
     <script src="assets/dataTable/js/jquery.dataTables.min.js"></script>
     <script src="assets/dataTable/js/dataTables.responsive.min.js"></script>
     

     <title><?= $pageTitle ?></title>
</head>
<body>
     <?php
          include "assets/inc/header.php";
     ?>
     <main>
               <?php
                    $category = $_GET['mainCategory'];
                    $category = base64_decode(urldecode($category));
                    //echo $category;

                    $k1 = ""; $k2 = "";$k3 = "";$k4 = "";$k5 = "";$k6 = ""; $k7 = "";

                    switch($category){
                         case "Elektronik Ürünler":
                              $k1 = "Cep Telefonları ve Aksesuarlar";
                              $k2 = "Bilgisayarlar ve Tabletler";
                              $k3 = "Tv ve Ev Sinema Sistemleri";
                              $k4 = "Kameralar ve Fotoğraf Makineleri";
                              $k5 = "Ses ve Video Cihazları";
                              $k6 = "Oyun Konsolları ve Oyunlar";
                              $k7 = "Elektronik Aksesuarlar";
                         break;
                         case "Giyim ve Moda":
                              $k1 = "Erkek Giyim";
                              $k2 = "Kadın Giyim";
                              $k3 = "Çocuk Giyim";
                              $k4 = "Ayakkabılar ve Ayakkabı Aksesuarları";
                              $k5 = "Çantalar ve Cüzdanlar";
                              $k6 = "Takı ve Aksesuarlar";
                              $k7 = "Spor Giyim";
                         break;
                         case "Ev ve Bahçe":
                              $k1 = "Mobilya";
                              $k2 = "Ev Dekorasyonu";
                              $k3 = "Mutfak ve Yemek Eşyaları";
                              $k4 = "Ev Gereçleri";
                              $k5 = "Aydınlatma";
                              $k6 = "Bahçe ve Peyzaj";
                              $k7 = "Ev ve Güvenlik Sistemleri";
                         break;
                         case "Güzellik ve Kişisel Bakım":
                              $k1 = "Parfümler ve Deodorantlar";
                              $k2 = "Makyaj Malzemeleri";
                              $k3 = "Cilt Bakımı";
                              $k4 = "Saç Bakımı ve Şekillendirme";
                              $k5 = "Kişisel Bakım Aletleri";
                              $k6 = "Tıraş ve Epilasyon Ürünleri";
                              $k7 = "Güneş Bakımı";
                         break;
                         case "Spor ve Outdoor":
                              $k1 = "Spor Giyim ve Ayakkabılar";
                              $k2 = "Egzersiz ve Fitness Ekipmanları";
                              $k3 = "Kamp Malzemeleri";
                              $k4 = "Outdoor Giyim";
                              $k5 = "Spor ve Aksesuarları";
                              $k6 = "Bisikletler ve Aksesuarları";
                              $k7 = "Su Sporları ve Ekipmanları";
                         break;
                         case "Kitaplar ve Medya":
                              $k1 = "Kitaplar";
                              $k2 = "E-kitaplar";
                              $k3 = "Müzik CD'leri";
                              $k4 = "Film ve TV Dizileri";
                              $k5 = "Oyunlar ve Oyun Konsolları";
                              $k6 = "Sanat ve El Sanatları Malzemeleri";
                              $k7 = "Hobi ve Eğlence";
                         break;
                         case "Otomotiv":
                              $k1 = "Otomobil Yedek Parçaları";
                              $k2 = "Lastikler ve Jantlar";
                              $k3 = "Araç Elektroniği";
                              $k4 = "Araç Bakım ve Temizlik Ürünleri";
                              $k5 = "Motosikletler ve Aksesuarları";
                              $k6 = "Araba Aksesuarları";
                              $k7 = "Seyahat ve Taşıma Aksesuarları";
                         break;
                    }
               ?>
            
          <div class="mega">
               
               <div class="accordian" id="accordian">
                    <ul>
                         <li>
                              <?php
                                   $cOne = 'Elektronik Ürünler';
                                   $encodedCategoryOne = base64_encode($cOne);
                                   $urlOne = "product?mainCategory=" . urlencode($encodedCategoryOne);
                              ?>
                              <h3><a href="<?= $urlOne; ?>" style="color:white; text-decoration: none;">Elektronik Ürünler</a></h3>
                              <ul>
                              <li><a href="#">Cep Telefonları ve Aksesuarları</a></li>
                              <li><a href="#">Bilgisayarlar ve Tabletler</a></li>
                              <li><a href="#">Televizyonlar ve Ev Sinema Sistemleri</a></li>
                              <li><a href="#">Kameralar ve Fotoğraf Makineleri</a></li>
                              <li><a href="#">Ses ve Video Cihazları</a></li>
                              <li><a href="#">Oyun Konsolları ve Oyunlar</a></li>
                              <li><a href="#">Elektronik Aksesuarlar</a></li>
                              </ul>
                         </li>
                         <li class="active">
                              <?php
                                   $cTwo = 'Giyim ve Moda';
                                   $encodedCategoryTwo = base64_encode($cTwo);
                                   $urlTwo = "product?mainCategory=" . urlencode($encodedCategoryTwo);
                              ?>
                              <h3><a href="<?= $urlTwo; ?>" style="color:white; text-decoration: none;">Giyim ve Moda</a></h3>
                              <ul>
                              <li><a href="#">Erkek Giyim</a></li>
                              <li><a href="#">Kadın Giyim</a></li>
                              <li><a href="#">Çocuk Giyim</a></li>
                              <li><a href="#">Ayakkabılar ve Ayakkabı Aksesuarları</a></li>
                              <li><a href="#">Çantalar ve Cüzdanlar</a></li>
                              <li><a href="#">Takı ve Aksesuarlar</a></li>
                              <li><a href="#">Spor Giyim</a></li>
                              </ul>
                         </li>
                         <li>
                              <?php
                                   $cThree = 'Ev ve Bahçe';
                                   $encodedCategoryThree = base64_encode($cThree);
                                   $urlThree = "product?mainCategory=" . urlencode($encodedCategoryThree);
                              ?>
                              <h3><a href="<?= $urlThree; ?>" style="color:white; text-decoration: none;">Ev ve Bahçe</a></h3>
                              <ul>
                              <li><a href="#">Mobilya</a></li>
                              <li><a href="#">Ev Dekorasyonu</a></li>
                              <li><a href="#">Mutfak ve Yemek Eşyaları</a></li>
                              <li><a href="#">Ev Gereçleri</a></li>
                              <li><a href="#">Aydınlatma</a></li>
                              <li><a href="#">Bahçe ve Peyzaj</a></li>
                              <li><a href="#">Ev ve Güvenlik Sistemleri</a></li>
                              </ul>
                         </li>
                         <li>
                              <?php
                                   $cFour = 'Güzellik ve Kişisel Bakım';
                                   $encodedCategoryFour = base64_encode($cFour);
                                   $urlFour = "product?mainCategory=" . urlencode($encodedCategoryFour);
                              ?>
                              <h3><a href="<?= $urlFour; ?>" style="color:white; text-decoration: none;">Güzellik ve Kişisel Bakım</a></h3>
                              <ul>
                              <li><a href="#">Parfümler ve Deodorantlar</a></li>
                              <li><a href="#">Makyaj Malzemeleri</a></li>
                              <li><a href="#">Cilt Bakımı</a></li>
                              <li><a href="#">Saç Bakımı ve Şekillendirme</a></li>
                              <li><a href="#">Kişisel Bakım Aletleri</a></li>
                              <li><a href="#">Tıraş ve Epilasyon Ürünleri</a></li>
                              <li><a href="#">Güneş Bakımı</a></li>
                              </ul>
                         </li>
                         <li>
                              <?php
                                   $cFive = 'Spor ve Outdoor';
                                   $encodedCategoryFive = base64_encode($cFive);
                                   $urlFive = "product?mainCategory=" . urlencode($encodedCategoryFive);
                              ?>
                              <h3><a href="<?= $urlFive; ?>" style="color:white; text-decoration: none;">Spor ve Outdoor</a></h3>
                              <ul>
                              <li><a href="#">Spor Giyim ve Ayakkabılar</a></li>
                              <li><a href="#">Egzersiz ve Fitness Ekipmanları</a></li>
                              <li><a href="#">Kamp Malzemeleri</a></li>
                              <li><a href="#">Outdoor Giyim</a></li>
                              <li><a href="#">Spor Aksesuarları</a></li>
                              <li><a href="#">Bisikletler ve Aksesuarları</a></li>
                              <li><a href="#">Su Sporları Ekipmanları</a></li>
                              </ul>
                         </li>
                         <li>
                              <?php
                                   $cSix = 'Kitaplar ve Medya';
                                   $encodedCategorySix = base64_encode($cSix);
                                   $urlSix = "product?mainCategory=" . urlencode($encodedCategorySix);
                              ?>
                              <h3><a href="<?= $urlSix ?>" style="color:white; text-decoration: none;">Kitaplar ve Medya</a></h3>
                              <ul>
                              <li><a href="#">Kitaplar</a></li>
                              <li><a href="#">E-kitaplar</a></li>
                              <li><a href="#">Müzik CD'leri</a></li>
                              <li><a href="#">Film ve Tv Dizileri</a></li>
                              <li><a href="#">Oyunlar ve Oyun Konsolları</a></li>
                              <li><a href="#">Sanat ve El Sanatları Malzemeleri</a></li>
                              <li><a href="#">Hobi ve Eğlence</a></li>
                              </ul>
                         </li>
                         <li>
                              <?php
                                   $cSeven = 'Otomotiv';
                                   $encodedCategorySeven = base64_encode($cSeven);
                                   $urlSeven = "product?mainCategory=" . urlencode($encodedCategorySeven);
                              ?>
                              <h3><a href="<?= $urlSeven; ?>" style="color:white; text-decoration: none;">Otomotiv</a></h3>
                              <ul>
                              <li><a href="#">Otomobil Yedek Parçaları</a></li>
                              <li><a href="#">Lastikler ve Jantlar</a></li>
                              <li><a href="#">Araç Elektroniği</a></li>
                              <li><a href="#">Araç Bakım ve Temizlik Ürünleri</a></li>
                              <li><a href="#">Motosikletler ve Aksesuarları</a></li>
                              <li><a href="#">Araba Aksesuarları</a></li>
                              <li><a href="#">Seyahat ve Taşıma Aksesuarları</a></li>
                              </ul>
                         </li>
                    </ul>
               </div>

               <div class="products">
                    
                    <div class="table">
                         <table id="myTable" class="display responsive nowrap"> 
                              <tbody>
                              <!--<thead>
                                   <th>#</th>
                                   <th>#</th>
                              </thead>-->
                              <tr>
                                   <th><h3 style="color: white;"><?= $k1; ?></h3></th>
                              </tr>
                              <?php
                                   $sql = $db -> query("SELECT * FROM 219f2_product WHERE category = '$category' AND subCategory = '$k1'");

                                   while($data = $sql -> fetch()){ 
                                        $path = $data['productImg'];
                                        $file = basename($path);
                                        $backgroundColor = "";
                                        $env = $data['environment'];

                                        if($env == 0){
                                             $backgroundColor = '#131921';
                                        } else if($env == 1){
                                             $backgroundColor = 'green';
                                        }

                                        $divBack = "background-color: $backgroundColor;";
                              ?>
                                   <tr class="mainArea" style="<?= $divBack ?>">
                                        <th class="area">
                                             <img src="assets/media/products/<?= $file; ?>" alt="<?= $data['productName']; ?>"> 
                                             <br><br> 
                                             <span><?= $data['productName']; ?></span>
                                             <br><br>
                                             Ürün Fiyatı: <span><?= $data['commission']; ?> TL</span><br><br>
                                             <a href="#" style="color:white; font-size: 18px; letter-spacing: 1px;">Satın Al</a><br><br>
                                        </th>
                                   </tr>
                              
                              <?php
                                   }
                              ?>
                              <tr>
                                   <th><h3 style="color:white;"><?= $k2; ?></h3></th>
                              </tr>
                              <?php 
                                   $sql = $db -> query("SELECT * FROM 219f2_product WHERE category = '$category' AND subCategory = '$k2'");

                                   while($data = $sql -> fetch()){ 
                                        $path = $data['productImg'];
                                        $file = basename($path);
                                        $env = $data['environment'];

                                        if($env == 0){
                                             $backgroundColor = '#131921';
                                        } else if($env == 1){
                                             $backgroundColor = 'green';
                                        }

                                        $divBack = "background-color: $backgroundColor;";
                              ?>
                                   <tr class="mainArea" style="<?= $divBack ?>">
                                        <th class="area">
                                             <img src="assets/media/products/<?= $file; ?>" alt="<?= $data['productName']; ?>"> 
                                             <br><br> 
                                             <span><?= $data['productName']; ?></span>
                                             <br><br>
                                             Ürün Fiyatı: <span><?= $data['commission']; ?> TL</span><br><br>
                                             <a href="#" style="color:white; font-size: 18px; letter-spacing: 1px;">Satın Al</a><br><br>
                                        </th>
                                   </tr>
                              
                              <?php
                                   }
                              ?>
                              <tr>
                                   <th><h3 style="color: white;"><?= $k3; ?></h3></th>
                              </tr>
                              <?php 
                                   $sql = $db -> query("SELECT * FROM 219f2_product WHERE category = '$category' AND subCategory = '$k3'");

                                   while($data = $sql -> fetch()){ 
                                        $path = $data['productImg'];
                                        $file = basename($path);
                                        $env = $data['environment'];

                                        if($env == 0){
                                             $backgroundColor = '#131921';
                                        } else if($env == 1){
                                             $backgroundColor = 'green';
                                        }

                                        $divBack = "background-color: $backgroundColor;";
                              ?>
                                   <tr class="mainArea" style="<?= $divBack ?>">
                                        <th class="area">
                                             <img src="assets/media/products/<?= $file; ?>" alt="<?= $data['productName']; ?>"> 
                                             <br><br> 
                                             <span><?= $data['productName']; ?></span>
                                             <br><br>
                                             Ürün Fiyatı: <span><?= $data['commission']; ?> TL</span><br><br>
                                             <a href="#" style="color:white; font-size: 18px; letter-spacing: 1px;">Satın Al</a><br><br>
                                        </th>
                                   </tr>
                              
                              <?php
                                   }
                              ?>
                              <tr>
                                   <th><h3 style="color: white;"><?= $k4; ?></h3></th>
                              </tr>
                              <?php 
                                   $sql = $db -> query("SELECT * FROM 219f2_product WHERE category = '$category' AND subCategory = '$k4'");

                                   while($data = $sql -> fetch()){ 
                                        $path = $data['productImg'];
                                        $file = basename($path);
                                        $env = $data['environment'];

                                        if($env == 0){
                                             $backgroundColor = '#131921';
                                        } else if($env == 1){
                                             $backgroundColor = 'green';
                                        }

                                        $divBack = "background-color: $backgroundColor;";
                              ?>
                                   <tr class="mainArea" style="<?= $divBack ?>">
                                        <th class="area">
                                             <img src="assets/media/products/<?= $file; ?>" alt="<?= $data['productName']; ?>"> 
                                             <br><br> 
                                             <span><?= $data['productName']; ?></span>
                                             <br><br>
                                             Ürün Fiyatı: <span><?= $data['commission']; ?> TL</span><br><br>
                                             <a href="#" style="color:white; font-size: 18px; letter-spacing: 1px;">Satın Al</a><br><br>
                                        </th>
                                   </tr>
                              
                              <?php
                                   }
                              ?>
                              <tr>
                                   <th><h3 style="color: white;"><?= $k5; ?></h3></th>
                              </tr>
                              <?php 
                                   $sql = $db -> query("SELECT * FROM 219f2_product WHERE category = '$category' AND subCategory = '$k5'");

                                   while($data = $sql -> fetch()){ 
                                        $path = $data['productImg'];
                                        $file = basename($path);
                                        $env = $data['environment'];

                                        if($env == 0){
                                             $backgroundColor = '#131921';
                                        } else if($env == 1){
                                             $backgroundColor = 'green';
                                        }

                                        $divBack = "background-color: $backgroundColor;";
                              ?>
                                   <tr class="mainArea" style="<?= $divBack ?>">
                                        <th class="area">
                                             <img src="assets/media/products/<?= $file; ?>" alt="<?= $data['productName']; ?>"> 
                                             <br><br> 
                                             <span><?= $data['productName']; ?></span>
                                             <br><br>
                                             Ürün Fiyatı: <span><?= $data['commission']; ?> TL</span><br><br>
                                             <a href="#" style="color:white; font-size: 18px; letter-spacing: 1px;">Satın Al</a><br><br>
                                        </th>
                                   </tr>
                              
                              <?php
                                   }
                              ?>
                              <tr>
                                   <th><h3 style="color: white;"><?= $k6; ?></h3></th>
                              </tr>
                              <?php 
                                   $sql = $db -> query("SELECT * FROM 219f2_product WHERE category = '$category' AND subCategory = '$k6'");

                                   while($data = $sql -> fetch()){ 
                                        $path = $data['productImg'];
                                        $file = basename($path);
                                        $env = $data['environment'];

                                        if($env == 0){
                                             $backgroundColor = '#131921';
                                        } else if($env == 1){
                                             $backgroundColor = 'green';
                                        }

                                        $divBack = "background-color: $backgroundColor;";
                              ?>
                                   <tr class="mainArea" style="<?= $divBack ?>">
                                        <th class="area">
                                             <img src="assets/media/products/<?= $file; ?>" alt="<?= $data['productName']; ?>"> 
                                             <br><br> 
                                             <span><?= $data['productName']; ?></span>
                                             <br><br>
                                             Ürün Fiyatı: <span><?= $data['commission']; ?> TL</span><br><br>
                                             <a href="#" style="color:white; font-size: 18px; letter-spacing: 1px;">Satın Al</a><br><br>
                                        </th>
                                   </tr>
                              
                              <?php
                                   }
                              ?>
                              <tr>
                                   <th><h3 style="color: white;"><?= $k7; ?></h3></th>
                              </tr>
                              <?php 
                                   $sql = $db -> query("SELECT * FROM 219f2_product WHERE category = '$category' AND subCategory = '$k7'");

                                   while($data = $sql -> fetch()){ 
                                        $path = $data['productImg'];
                                        $file = basename($path);
                                        $env = $data['environment'];

                                        if($env == 0){
                                             $backgroundColor = '#131921';
                                        } else if($env == 1){
                                             $backgroundColor = 'green';
                                        }

                                        $divBack = "background-color: $backgroundColor;";
                              ?>
                                   <tr class="mainArea" style="<?= $divBack ?>">
                                        <th class="area">
                                             <img src="assets/media/products/<?= $file; ?>" alt="<?= $data['productName']; ?>"> 
                                             <br><br> 
                                             <span><?= $data['productName']; ?></span>
                                             <br><br>
                                             Ürün Fiyatı: <span><?= $data['commission']; ?> TL</span><br><br>
                                             <a href="#" style="color:white; font-size: 18px; letter-spacing: 1px;">Satın Al</a><br><br>
                                        </th>
                                   </tr>
                              
                              <?php
                                   }
                              ?>
                              </tbody>
                         </table>
                    </div>

               </div>

          </div>

     </main>
     <script src="assets/js/accordion.js"></script>
     <script src="assets/js/global.js"></script>
     <?php
          include "assets/inc/footer.php";
     ?>
</body>
</html>