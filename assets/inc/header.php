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
                              <a href="/demand">Destek Taleplerim</a>
                              <?php
                                   if($data['accountType'] == 'business'){
                              ?>
                              <a href="/productAdd">Ürün Ekle</a>
                              <?php
                                   }
                              ?>
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
                         <a href="/product">Elektronik Ürünler</a>
                         <a href="/product">Giyim ve Moda</a>
                         <a href="/product">Ev ve Bahçe</a>
                         <a href="/product">Güzellik ve Kişisel Bakım</a>
                         <a href="/product">Spor ve Outdoor</a>
                         <a href="/product">Kitaplar ve Medya</a>
                         <a href="/product">Otomotiv</a>
                         <a href="/help">Destek</a>
                         </div>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/index">Anasayfa</a></button>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/product">Elektronik Ürünler</a></button>
                         <div class="dropdown-content">
                         <a href="/product">Cep Telefonları ve Aksesuarları</a>
                         <a href="/product">Bilgisayarlar ve Tabletler</a>
                         <a href="/product">Televizyonlar ve Ev Sinema Sistemleri</a>
                         <a href="/product">Kameralar ve Fotoğraf Makineleri</a>
                         <a href="/product">Ses ve Video Cihazları</a>
                         <a href="/product">Oyun Konsolları ve Oyunlar</a>
                         <a href="/product">Elektronik Aksesuarlar</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/product">Giyim ve Moda</a></button>
                         <div class="dropdown-content">
                         <a href="/product">Erkek Giyim</a>
                         <a href="/product">Kadın Giyim</a>
                         <a href="/product">Çocuk Giyim</a>
                         <a href="/product">Ayakkabılar ve Ayakkabı Aksesuarları</a>
                         <a href="/product">Çantalar ve Cüzdanlar</a>
                         <a href="/product">Takı ve Aksesuarlar</a>
                         <a href="/product">Spor Giyim</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/product">Ev ve Bahçe</a></button>
                         <div class="dropdown-content">
                         <a href="/product">Mobilya</a>
                         <a href="/product">Ev Dekorasyonu</a>
                         <a href="/product">Mutfak ve Yemek Eşyaları</a>
                         <a href="/product">Ev Gereçleri</a>
                         <a href="/product">Aydınlatma</a>
                         <a href="/product">Bahçe ve Peyzaj</a>
                         <a href="/product">Ev Güvenlik Sistemleri</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/product">Güzellik ve Kişisel Bakım</a></button>
                         <div class="dropdown-content">
                         <a href="/product">Parfümler ve Deodorantlar</a>
                         <a href="/product">Makyaj Malzemeleri</a>
                         <a href="/product">Cilt Bakımı</a>
                         <a href="/product">Saç Bakımı ve Şekillendirme</a>
                         <a href="/product">Kişisel Bakım Aletleri</a>
                         <a href="/product">Tıraş ve Epilasyon Ürünleri</a>
                         <a href="/product">Güneş Bakımı</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/index">Spor ve Outdoor</a></button>
                         <div class="dropdown-content">
                         <a href="/product">Spor Giyim ve Ayakkabılar</a>
                         <a href="/product">Egzersiz ve Fitness Ekipmanları</a>
                         <a href="/product">Kamp Malzemeleri</a>
                         <a href="/product">Outdoor Giyim</a>
                         <a href="/product">Spor Aksesuarları</a>
                         <a href="/product">Bisikletler ve Aksesuarları</a>
                         <a href="/product">Su Sporları Ekipmanları</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/product">Kitaplar ve Medya</a></button>
                         <div class="dropdown-content">
                         <a href="/product">Kitaplar</a>
                         <a href="/product">E-kitaplar</a>
                         <a href="/product">Müzik CD'leri</a>
                         <a href="/product">Film ve TV Dizileri</a>
                         <a href="/product">Oyunlar ve Oyun Konsolları</a>
                         <a href="/product">Sanat ve El Sanatları Malzemeleri</a>
                         <a href="/product">Hobi ve Eğlence</a>
                         </div>
                    </div>

                    <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/product">Otomotiv</a></button>
                         <div class="dropdown-content">
                         <a href="/product">Otomobil Yedek Parçaları</a>
                         <a href="/product">Lastikler ve Jantlar</a>
                         <a href="/product">Araç Elektroniği</a>
                         <a href="/product">Araç Bakım ve Temizlik Ürünleri</a>
                         <a href="/product">Motosikletler ve Aksesuarları</a>
                         <a href="/product">Araba Aksesuarları</a>
                         <a href="/product">Seyahat ve Taşıma Aksesuarları</a>
                         </div>
                    </div>

                     <!---->

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/help">Destek</a></button>
                    </div>
               </div>    

          </div>

     </header>

</body>
</html>