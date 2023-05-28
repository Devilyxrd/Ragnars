<!DOCTYPE html>
<html lang="tr">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Devilyxrd Was Here XD">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="/assets/css/global.css">
     <link rel="stylesheet" href="/assets/css/uiCss/header.css">
     <link rel="stylesheet" href="/assets/css/mediaCss/headerMedia.css">
</head>
<body>
     
     <header>

          <div class="areaOne">
               
               <div class="logoArea">
                    <a href="/index">RAGNARS E-TİCARET</a>
               </div>

               <div class="inputArea">
                    <input type="text" placeholder="Arama Yapabilirsiniz">
               </div>

               <div class="userArea">
                    
                    <?php
                         if(isset($_SESSION['userAccount'])){
                              $hash = $_SESSION['userAccount'];

                              $sql = "SELECT * FROM 219f2_users WHERE hash = '$hash'";
                              $query = $db -> query($sql);

                              while ($data = $query -> fetch()){
                                   
                              
                    ?>

                    <div class="dropdown">
                         <button class="dropbtn"><?=$data['name'] . " " . $data['surname']?></button>
                         <div class="dropdown-content">
                              <a href="/profile">Profil</a>
                              <a href="/logout">Çıkış Yap</a>
                         </div>
                    </div>

                    <?php
                    } } else { ?>

                    <a href="/login"><i class="fa-solid fa-right-to-bracket"></i> Giriş Yap</a>&emsp;
                    <a href="/register"><i class="fa-solid fa-user-plus"></i> Kayıt Ol</a>

                    <?php
                         }
                    ?>

                    

               </div>

          </div>

          <div class="areaTwo">

               <div class="dropArea">
                    <div class="dropdown drow-inactive">
                         <button class="dropbtn">Tüm Kategoriler</button>
                         <div class="dropdown-content">
                         <a href="/index">Anasayfa</a>
                         <a href="#">Elektronik Ürünler</a>
                         <a href="#">Giyim ve Moda</a>
                         <a href="#">Ev ve Bahçe</a>
                         <a href="#">Güzellik ve Kişisel Bakım</a>
                         <a href="#">Spor ve Outdoor</a>
                         <a href="#">Kitaplar ve Medya</a>
                         <a href="#">Otomotiv</a>
                         <a href="#">İletişim</a>
                         </div>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/index">Anasayfa</a></button>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn">Elektronik Ürünler</button>
                         <div class="dropdown-content">
                         <a href="#">Cep Telefonları ve Aksesuarları</a>
                         <a href="#">Bilgisayarlar ve Tabletler</a>
                         <a href="#">Televizyonlar ve Ev Sinema Sistemleri</a>
                         <a href="#">Kameralar ve Fotoğraf Makineleri</a>
                         <a href="#">Ses ve Video Cihazları</a>
                         <a href="#">Oyun Konsolları ve Oyunlar</a>
                         <a href="#">Elektronik Aksesuarlar</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn">Giyim ve Moda</button>
                         <div class="dropdown-content">
                         <a href="#">Erkek Giyim</a>
                         <a href="#">Kadın Giyim</a>
                         <a href="#">Çocuk Giyim</a>
                         <a href="#">Ayakkabılar ve Ayakkabı Aksesuarları</a>
                         <a href="#">Çantalar ve Cüzdanlar</a>
                         <a href="#">Takı ve Aksesuarlar</a>
                         <a href="#">Spor Giyim</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn">Ev ve Bahçe</button>
                         <div class="dropdown-content">
                         <a href="#">Mobilya</a>
                         <a href="#">Ev Dekorasyonu</a>
                         <a href="#">Mutfak ve Yemek Eşyaları</a>
                         <a href="#">Ev Gereçleri</a>
                         <a href="#">Aydınlatma</a>
                         <a href="#">Bahçe ve Peyzaj</a>
                         <a href="#">Ev Güvenlik Sistemleri</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn">Güzellik ve Kişisel Bakım</button>
                         <div class="dropdown-content">
                         <a href="#">Parfümler ve Deodorantlar</a>
                         <a href="#">Makyaj Malzemeleri</a>
                         <a href="#">Cilt Bakımı</a>
                         <a href="#">Saç Bakımı ve Şekillendirme</a>
                         <a href="#">Kişisel Bakım Aletleri</a>
                         <a href="#">Tıraş ve Epilasyon Ürünleri</a>
                         <a href="#">Güneş Bakımı</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn">Spor ve Outdoor</button>
                         <div class="dropdown-content">
                         <a href="#">Spor Giyim ve Ayakkabılar</a>
                         <a href="#">Egzersiz ve Fitness Ekipmanları</a>
                         <a href="#">Kamp Malzemeleri</a>
                         <a href="#">Outdoor Giyim</a>
                         <a href="#">Spor Aksesuarları</a>
                         <a href="#">Bisikletler ve Aksesuarları</a>
                         <a href="#">Su Sporları Ekipmanları</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn">Kitaplar ve Medya</button>
                         <div class="dropdown-content">
                         <a href="#">Kitaplar</a>
                         <a href="#">E-kitaplar</a>
                         <a href="#">Müzik CD'leri</a>
                         <a href="#">Film ve TV Dizileri</a>
                         <a href="#">Oyunlar ve Oyun Konsolları</a>
                         <a href="#">Sanat ve El Sanatları Malzemeleri</a>
                         <a href="#">Hobi ve Eğlence</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn">Otomotiv</button>
                         <div class="dropdown-content">
                         <a href="#">Otomobil Yedek Parçaları</a>
                         <a href="#">Lastikler ve Jantlar</a>
                         <a href="#">Araç Elektroniği</a>
                         <a href="#">Araç Bakım ve Temizlik Ürünleri</a>
                         <a href="#">Motosikletler ve Aksesuarları</a>
                         <a href="#">Araba Aksesuarları</a>
                         <a href="#">Seyahat ve Taşıma Aksesuarları</a>
                         </div>
                    </div>

                     <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="#">İletişim</a></button>
                    </div>
               </div>

          </div>

     </header>

</body>
</html>