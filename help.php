<?php

     $pageTitle = "Ragnars E-Ticaret - Destek";
     include "config.php";
     include "server/control_user.php";
     $domain = $_SERVER['SERVER_NAME'];

?>

<!DOCTYPE html>
<html lang="tr">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Devilyxrd Was Here XD">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- SweetAlert2 CSS dosyası -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

     <!-- jQuery ve SweetAlert2 JS dosyaları -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/global.css">
     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/frontCss/help.css">
     <link rel="stylesheet" href="https://<?= $domain ?>/assets/css/mediaCss/helpMedia.css">

     <title><?= $pageTitle ?></title>
</head>
<body>
     <?php
          if (htmlspecialchars($_GET['status'] == "empty")) {
               echo "<script>Swal.fire('Başarısız!','Boş alan bırakmayınız!','error')</script>";
          } else if (htmlspecialchars($_GET['status'] == "phone")) {
               echo "<script>Swal.fire('Başarısız!','Telefon Formatına Dikkat Ediniz!','error')</script>";
          } else if(htmlspecialchars($_GET['status'] == "success")){
               echo "<script>Swal.fire('Başarılı','Destek Talebiniz Başarıyla İletildi.','success');</script>";
               echo "<script>setTimeout(() => window.location = 'help', 3000);</script>";
          }
     ?>

     <?php
          include "assets/inc/header.php";
     ?>
     <main>
            
          <div class="area">

               <div class="infArea">
                    <span>Merhaba,
                    <br><br>
                    Hoş geldiniz! Müşteri memnuniyetini en üst düzeyde tutmayı hedefleyen e-ticaret sitemizin destek sayfasına hoş geldiniz. Sizlere en iyi alışveriş deneyimini sunabilmek için buradayız ve her türlü sorunuz veya ihtiyacınız için yanınızdayız.
                    <br><br>
                    Destek ekibimiz, sorularınızı yanıtlamak, sorunlarınızı çözmek ve size yardımcı olmak için burada bulunmaktadır. Siparişlerinizle ilgili sorun yaşadığınızda, ürünler hakkında daha fazla bilgi almak istediğinizde veya iade ve değişim sürecini anlamak istediğinizde, güvenilir ve hızlı bir destek sunmayı taahhüt ediyoruz.
                    <br><br>
                    Ayrıca, ödeme sorunları, faturalandırma konuları, indirimler, kampanyalar ve promosyonlar hakkında bilgi alma gibi konularda da size yardımcı olmaktan mutluluk duyarız. Müşterilerimizin sorularını öncelikle ele alıyor ve çözüme ulaştırmak için çaba sarf ediyoruz.
                    <br><br>
                    Destek sayfamızı düzenli olarak ziyaret etmenizi ve sıkça sorulan soruları gözden geçirmenizi de öneririz. Bu sayede ihtiyaç duyduğunuz bilgilere hızlı bir şekilde erişebilirsiniz.
                    <br><br>
                    Sizlere yardımcı olmak için heyecanlıyız ve en iyi müşteri deneyimini sağlamak için elimizden geleni yapacağımızı taahhüt ediyoruz. Sizlere destek vermek için sabırsızlıkla bekliyoruz.
                    <br><br>
                    Saygılarımızla,
                    <br>
                    Ragnars E-ticaret Destek Ekibi
                    </span>
               </div>

               <div class="helpArea">

                    <?php
                         if(isset($_SESSION['userAccount'])){
                              
                         $hash = $_SESSION['userAccount'];

                              $sql = $db -> query("SELECT * FROM 219f2_users WHERE hash ='$hash'");
                              while ($data = $sql -> fetch()){
                    ?>

                         <form action="https://<?= $domain ?>/server/user_request" method="post" autocomplete="off">

                         <div class="helpOne">
                              <label for="name">Adınız</label><br><br>
                              <input type="text" name="name" id="nm" value="<?= $data['name'] ?>" readonly>

                              <br><br>

                              <label for="surname">Soyadınız</label><br><br>
                              <input type="text" name="surname" id="sn" value="<?= $data['surname'] ?>" readonly>

                              <br><br>

                              <label for="email">Email adresiniz</label><br><br>
                              <input type="email" name="email" id="em" value="<?= $data['email'] ?>" readonly>

                              <br><br>

                              <label for="phoneNumber">Telefon Numaranız</label><br><br>

                              <?php
                                   if($data['phoneNumber'] == null){

                                   
                              ?>
                                   <input type="tel" name="phoneNumber" id="pn" placeholder="Telefon Numaranızı Giriniz" value="+9"><br><br>
                              <?php
                              } else {
                              ?>
                                   <input type="tel" name="phoneNumber" id="pn" value="<?= $data['phoneNumber']; ?>" readonly><br><br>
                              <?php
                              }
                              ?>

                              <input type="hidden" name="accountType" value="<?= $data['accountType']; ?>">
                              <input type="hidden" name="hash" value="<?= $data['hash']; ?>">

                              <br>

                              <input type="submit" value="Gönder" name="send">

                              <!---->

                         </div>

                         <div class="helpTwo">
                              
                              <h1>Destek Mesajınız</h1><br>
                              
                              <textarea name="helpMsg" id="msg"></textarea>

                         </div>          

                         </form>

                    <?php
                         }
                    }
                    ?>

               </div>

          </div>

     </main>

     <script src="assets/js/length.js"></script>

     <?php
          include "assets/inc/footer.php";
     ?>
</body>
</html>