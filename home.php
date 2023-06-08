<?php

     $pageTitle = "Ragnars E-Ticaret - Anasayfa";
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
     <link rel="stylesheet" href="assets/css/frontCss/main.css">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <title><?= $pageTitle ?></title>
</head>
<body>
     <?php
          include "assets/inc/header.php";
     ?>
     <main id="home-main" class="mt-4">
          <div class="main-slider">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-8 col-md-8">
                              <div class="slider-area">
                                   <div class="slider-active owl-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer owl-height">
                                             <div class="owl-stage" style="transform: translate3d(-1626px, 0px, 0px); transition: all 0.25s ease 0s; width: 3794px;">
                                                  <?php
                                                       $sql = "SELECT * FROM 219f2_product ORDER BY RAND() LIMIT 3";
                                                       $stmt = $db->prepare($sql);
                                                       $stmt->execute();
                                                       $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                                       // Elde edilen verileri kullanma
                                                       foreach ($rows as $row) {
                                                            $path = $row['productImg'];
                                                            $productImg = basename($path);
                                                            
                                                       
                                                  ?>
                                                  <div class="owl-item">
                                                       <a href="">
                                                            <img src="assets/media/products/<?= $productImg ?>" class="img-fluid" alt="">
                                                       </a>
                                                  </div>
                                                  <?php
                                                       }
                                                  ?>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-4 col-md-4" id="main-right">
                              <div class="main-right">
                                   <?php
                                        $sql = "SELECT * FROM 219f2_product ORDER BY RAND() LIMIT 2";
                                        $stmt = $db->prepare($sql);
                                        $stmt->execute();
                                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        // Elde edilen verileri kullanma
                                        foreach ($rows as $row) {
                                             $path = $row['productImg'];
                                             $productImg = basename($path);
                                   ?>
                                   <div class="top">
                                        <a href="">
                                             <img src="assets/media/products/<?= $productImg ?>" class="img-fluid" alt="">
                                        </a>
                                   </div>
                                   <?php
                                        }
                                   ?>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div>
               <div class="container">
                    <div class="row">
                         <h2>Deneme</h1>

                              <div class="slider-area">
                                   <div class="slider1 owl-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer owl-height">
                                             <div class="owl-stage">
                                                  <div class="owl-item">
                                                       <div class="product-main">
                                                            <?php
                                                                 $sql = "SELECT * FROM 219f2_product ORDER BY RAND() LIMIT 1";
                                                                 $stmt = $db->prepare($sql);
                                                                 $stmt->execute();
                                                                 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                         
                                                                 // Elde edilen verileri kullanma
                                                                 foreach ($rows as $row) {
                                                                      $path = $row['productImg'];
                                                                      $elementOne = basename($path);
                                                                      $elementOneC = $row['category'];
                                                                      $elementOneP = $row['commission'];
                                                                      $elementOneN = $row['productName'];
                                                            ?>
                                                            <div class="product-image">
                                                                 <a href="">
                                                                      <img src="assets/media/products/<?= $elementOne ?>" class="img-fluid" alt="">
                                                                 </a>
                                                            </div>
                                                            <?php
                                                                 }
                                                            ?>
                                                            <div class="product-desc">
                                                                 <div class="position-relative">
                                                                      <div class="product-review">
                                                                           <h5 class="product-h5">
                                                                                <a>
                                                                                     <?= $elementOneC; ?>
                                                                                </a>
                                                                           </h5>
                                                                           <div class="rating-box">
                                                                                <ul class="rating">
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                      <div class="productInfo">
                                                                           <div>
                                                                                <a class="productName">
                                                                                     <?= $elementOneN ?>
                                                                                </a>
                                                                           </div>
                                                                           <div style="margin-top:3%">
                                                                                <a class="productPrice">
                                                                                     <?= $elementOneP; ?> TL
                                                                                </a>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="owl-item">
                                                       <div class="product-main">
                                                            <?php
                                                                 $sql = "SELECT * FROM 219f2_product ORDER BY RAND() LIMIT 1";
                                                                 $stmt = $db->prepare($sql);
                                                                 $stmt->execute();
                                                                 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                         
                                                                 // Elde edilen verileri kullanma
                                                                 foreach ($rows as $row) {
                                                                      $path = $row['productImg'];
                                                                      $elementOne = basename($path);
                                                                      $elementOneC = $row['category'];
                                                                      $elementOneP = $row['commission'];
                                                                      $elementOneN = $row['productName'];
                                                            ?>
                                                            <div class="product-image">
                                                                 <a href="">
                                                                      <img src="assets/media/products/<?= $elementOne ?>" class="img-fluid" alt="">
                                                                 </a>
                                                            </div>
                                                            <?php
                                                                 }
                                                            ?>
                                                            <div class="product-desc">
                                                                 <div class="position-relative">
                                                                      <div class="product-review">
                                                                           <h5 class="product-h5">
                                                                                <a>
                                                                                     <?= $elementOneC; ?>
                                                                                </a>
                                                                           </h5>
                                                                           <div class="rating-box">
                                                                                <ul class="rating">
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                      <div class="productInfo">
                                                                           <div>
                                                                                <a class="productName">
                                                                                     <?= $elementOneN ?>
                                                                                </a>
                                                                           </div>
                                                                           <div style="margin-top:3%">
                                                                                <a class="productPrice">
                                                                                     <?= $elementOneP; ?> TL
                                                                                </a>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="owl-item">
                                                  <div class="product-main">
                                                            <?php
                                                                 $sql = "SELECT * FROM 219f2_product ORDER BY RAND() LIMIT 1";
                                                                 $stmt = $db->prepare($sql);
                                                                 $stmt->execute();
                                                                 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                         
                                                                 // Elde edilen verileri kullanma
                                                                 foreach ($rows as $row) {
                                                                      $path = $row['productImg'];
                                                                      $elementOne = basename($path);
                                                                      $elementOneC = $row['category'];
                                                                      $elementOneP = $row['commission'];
                                                                      $elementOneN = $row['productName'];
                                                            ?>
                                                            <div class="product-image">
                                                                 <a href="">
                                                                      <img src="assets/media/products/<?= $elementOne ?>" class="img-fluid" alt="">
                                                                 </a>
                                                            </div>
                                                            <?php
                                                                 }
                                                            ?>
                                                            <div class="product-desc">
                                                                 <div class="position-relative">
                                                                      <div class="product-review">
                                                                           <h5 class="product-h5">
                                                                                <a>
                                                                                     <?= $elementOneC; ?>
                                                                                </a>
                                                                           </h5>
                                                                           <div class="rating-box">
                                                                                <ul class="rating">
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                      <div class="productInfo">
                                                                           <div>
                                                                                <a class="productName">
                                                                                     <?= $elementOneN ?>
                                                                                </a>
                                                                           </div>
                                                                           <div style="margin-top:3%">
                                                                                <a class="productPrice">
                                                                                     <?= $elementOneP; ?> TL
                                                                                </a>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="owl-item">
                                                  <div class="product-main">
                                                            <?php
                                                                 $sql = "SELECT * FROM 219f2_product ORDER BY RAND() LIMIT 1";
                                                                 $stmt = $db->prepare($sql);
                                                                 $stmt->execute();
                                                                 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                         
                                                                 // Elde edilen verileri kullanma
                                                                 foreach ($rows as $row) {
                                                                      $path = $row['productImg'];
                                                                      $elementOne = basename($path);
                                                                      $elementOneC = $row['category'];
                                                                      $elementOneP = $row['commission'];
                                                                      $elementOneN = $row['productName'];
                                                            ?>
                                                            <div class="product-image">
                                                                 <a href="">
                                                                      <img src="assets/media/products/<?= $elementOne ?>" class="img-fluid" alt="">
                                                                 </a>
                                                            </div>
                                                            <?php
                                                                 }
                                                            ?>
                                                            <div class="product-desc">
                                                                 <div class="position-relative">
                                                                      <div class="product-review">
                                                                           <h5 class="product-h5">
                                                                                <a>
                                                                                     <?= $elementOneC; ?>
                                                                                </a>
                                                                           </h5>
                                                                           <div class="rating-box">
                                                                                <ul class="rating">
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                      <div class="productInfo">
                                                                           <div>
                                                                                <a class="productName">
                                                                                     <?= $elementOneN ?>
                                                                                </a>
                                                                           </div>
                                                                           <div style="margin-top:3%">
                                                                                <a class="productPrice">
                                                                                     <?= $elementOneP; ?> TL
                                                                                </a>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="owl-item">
                                                  <div class="product-main">
                                                            <?php
                                                                 $sql = "SELECT * FROM 219f2_product ORDER BY RAND() LIMIT 1";
                                                                 $stmt = $db->prepare($sql);
                                                                 $stmt->execute();
                                                                 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                         
                                                                 // Elde edilen verileri kullanma
                                                                 foreach ($rows as $row) {
                                                                      $path = $row['productImg'];
                                                                      $elementOne = basename($path);
                                                                      $elementOneC = $row['category'];
                                                                      $elementOneP = $row['commission'];
                                                                      $elementOneN = $row['productName'];
                                                            ?>
                                                            <div class="product-image">
                                                                 <a href="">
                                                                      <img src="assets/media/products/<?= $elementOne ?>" class="img-fluid" alt="">
                                                                 </a>
                                                            </div>
                                                            <?php
                                                                 }
                                                            ?>
                                                            <div class="product-desc">
                                                                 <div class="position-relative">
                                                                      <div class="product-review">
                                                                           <h5 class="product-h5">
                                                                                <a>
                                                                                     <?= $elementOneC; ?>
                                                                                </a>
                                                                           </h5>
                                                                           <div class="rating-box">
                                                                                <ul class="rating">
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                     <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                      <div class="productInfo">
                                                                           <div>
                                                                                <a class="productName">
                                                                                     <?= $elementOneN ?>
                                                                                </a>
                                                                           </div>
                                                                           <div style="margin-top:3%">
                                                                                <a class="productPrice">
                                                                                     <?= $elementOneP; ?> TL
                                                                                </a>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                    </div>
               </div>
          </div>
     </main>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
     <script type="text/javascript">
          $(".slider-active").owlCarousel({
               loop: true,
               margin: 0,
               nav: true,
               autoplay: true,
               items: 1,
               autoplayTimeout: 10000,
               navText: ["<i class='fa fa-angle-left left-main'></i>", "<i class='fa fa-angle-right right-main'></i>"],
               dots: true,
               autoHeight: true,
               lazyLoad: true
          });
          $('.slider1').owlCarousel({
               loop: true,
               margin: 10,
               responsiveClass: true,
               dots: false,
               responsive: {
                    0: {
                         items: 1,
                         nav: true
                    },
                    600: {
                         items: 3,
                         nav: false
                    },
                    1000: {
                         items: 5,
                         loop: false
                    }
               },

          })
     </script>
     <?php
          include "assets/inc/footer.php";
     ?>
</body>
</html>