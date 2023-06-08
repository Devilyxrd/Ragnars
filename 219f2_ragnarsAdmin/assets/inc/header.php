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

     <link rel="stylesheet" href="/219f2_ragnarsAdmin/assets/css/global.css">
     <link rel="stylesheet" href="/219f2_ragnarsAdmin/assets/css/uiCss/header.css">
     <link rel="stylesheet" href="/219f2_ragnarsAdmin/assets/css/mediaCss/headerMedia.css">
</head>
<body>
     
     <header>

          <div class="areaOne">
               
               <div class="logoArea">
                    <a href="/219f2_ragnarsAdmin/index">RAGNARS E-TİCARET</a>
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
                              <a href="/logout">Çıkış Yap</a>
                         </div>
                    </div>

                    <?php
                    } } ?>

                    

               </div>

          </div>

          <div class="areaTwo">

               <div class="dropArea">
                    <div class="dropdown drow-inactive">
                         <button class="dropbtn">Tüm Kategoriler</button>
                         <div class="dropdown-content">
                              <a href="/219f2_ragnarsAdmin/index">Anasayfa</a>
                              <a href="/219f2_ragnarsAdmin/userPanel">Kullanıcı Paneli</a>
                              <a href="/219f2_ragnarsAdmin/productPanel">Ürün Paneli</a>
                              <a href="/219f2_ragnarsAdmin/productRequest">Ürün Onaylama Paneli</a>
                              <a href="/219f2_ragnarsAdmin/businessCheck">İşletme Hesabı Onaylama Paneli</a>
                              <a href="/219f2_ragnarsAdmin/businessAccount">İşletme Hesapları</a>
                              <a href="/219f2_ragnarsAdmin/helpPanel">Destek Paneli</a>
                              <a href="/219f2_ragnarsAdmin/bannedAccount">Yasaklı Kullanıcılar</a>
                         </div>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/219f2_ragnarsAdmin/index">Anasayfa</a></button>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/219f2_ragnarsAdmin/userPanel">Kullanıcı Paneli</a></button>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/219f2_ragnarsAdmin/productPanel">Ürün Paneli</a></button>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/219f2_ragnarsAdmin/productRequest">Ürün Onaylama Paneli</a></button>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/219f2_ragnarsAdmin/businessCheck">İşletme Hesabı Onaylama Paneli</a></button>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/219f2_ragnarsAdmin/businessAccount">İşletme Hesapları</a></button>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/219f2_ragnarsAdmin/helpPanel">Destek Paneli</a></button>
                    </div>

                    <div class="dropdown drow-active">
                         <button class="dropbtn"><a href="/219f2_ragnarsAdmin/bannedAccount">Yasaklı Kullanıcılar</a></button>
                    </div>
                    
               </div>

          </div>

     </header>

</body>
</html>