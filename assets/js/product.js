function kategoriDegistir() {
     var kategoriSecimi = document.getElementById("ct");
     var secenekSecimi = document.getElementById("Sc");
     var secilenKategori = kategoriSecimi.value;

     switch(secilenKategori){
          case "1":
               secenekSecimi.innerHTML = "";
               var optOne = document.createElement("option");
               optOne.text = "Cep Telefonları ve Aksesuarlar";
               optOne.value = "Cep Telefonları ve Aksesuarlar";
               secenekSecimi.add(optOne);

               var optTwo = document.createElement("option");
               optTwo.text = "Bilgisayarlar ve Tabletler";
               optTwo.value = "Bilgisayarlar ve Tabletler";
               secenekSecimi.add(optTwo);

               var optThree = document.createElement("option");
               optThree.text = "Tv ve Ev Sinema Sistemleri";
               optThree.value = "Tv ve Ev Sinema Sistemleri";
               secenekSecimi.add(optThree);

               var optFour = document.createElement("option");
               optFour.text = "Kameralar ve Fotoğraf Makineleri";
               optFour.value = "Kameralar ve Fotoğraf Makineleri";
               secenekSecimi.add(optFour);

               var optFive = document.createElement("option");
               optFive.text = "Ses ve Video Cihazları";
               optFive.value = "Ses ve Video Cihazları";
               secenekSecimi.add(optFive);

               var optSix = document.createElement("option");
               optSix.text = "Oyun Konsolları ve Oyunlar";
               optSix.value = "Oyun Konsolları ve Oyunlar";
               secenekSecimi.add(optSix);

               var optSeven = document.createElement("option");
               optSeven.text = "Elektronik Aksesuarlar";
               optSeven.value = "Elektronik Aksesuarlar";
               secenekSecimi.add(optSeven);
          break;

          case "2":
               secenekSecimi.innerHTML = "";
               var optOne = document.createElement("option");
               optOne.text = "Erkek Giyim";
               optOne.value = "Erkek Giyim";
               secenekSecimi.add(optOne);

               var optTwo = document.createElement("option");
               optTwo.text = "Kadın Giyim";
               optTwo.value = "Kadın Giyim";
               secenekSecimi.add(optTwo);

               var optThree = document.createElement("option");
               optThree.text = "Çocuk Giyim";
               optThree.value = "Çocuk Giyim";
               secenekSecimi.add(optThree);

               var optFour = document.createElement("option");
               optFour.text = "Ayakkabılar ve Ayakkabı Aksesuarları";
               optFour.value = "Ayakkabılar ve Ayakkabı Aksesuarları";
               secenekSecimi.add(optFour);

               var optFive = document.createElement("option");
               optFive.text = "Çantalar ve Cüzdanlar";
               optFive.value = "Çantalar ve Cüzdanlar";
               secenekSecimi.add(optFive);

               var optSix = document.createElement("option");
               optSix.text = "Takı ve Aksesuarlar";
               optSix.value = "Takı ve Aksesuarlar";
               secenekSecimi.add(optSix);

               var optSeven = document.createElement("option");
               optSeven.text = "Spor Giyim";
               optSeven.value = "Spor Giyim";
               secenekSecimi.add(optSeven);
          break;

          case "3":
               secenekSecimi.innerHTML = "";
               var optOne = document.createElement("option");
               optOne.text = "Mobilya";
               optOne.value = "Mobilya";
               secenekSecimi.add(optOne);

               var optTwo = document.createElement("option");
               optTwo.text = "Ev Dekorasyonu";
               optTwo.value = "Ev Dekorasyonu";
               secenekSecimi.add(optTwo);

               var optThree = document.createElement("option");
               optThree.text = "Mutfak ve Yemek Eşyaları";
               optThree.value = "Mutfak ve Yemek Eşyaları";
               secenekSecimi.add(optThree);

               var optFour = document.createElement("option");
               optFour.text = "Ev Gereçleri";
               optFour.value = "Ev Gereçleri";
               secenekSecimi.add(optFour);

               var optFive = document.createElement("option");
               optFive.text = "Aydınlatma";
               optFive.value = "Aydınlatma";
               secenekSecimi.add(optFive);

               var optSix = document.createElement("option");
               optSix.text = "Bahçe ve Peyzaj";
               optSix.value = "Bahçe ve Peyzaj";
               secenekSecimi.add(optSix);

               var optSeven = document.createElement("option");
               optSeven.text = "Ev Güvenlik Sistemleri";
               optSeven.value = "Ev Güvenlik Sistemleri";
               secenekSecimi.add(optSeven);
          break;

          case "4":
               secenekSecimi.innerHTML = "";
               var optOne = document.createElement("option");
               optOne.text = "Parfümler ve Deodorantlar";
               optOne.value = "Parfümler ve Deodorantlar";
               secenekSecimi.add(optOne);

               var optTwo = document.createElement("option");
               optTwo.text = "Makyaj Malzemeleri";
               optTwo.value = "Makyaj Malzemeleri";
               secenekSecimi.add(optTwo);

               var optThree = document.createElement("option");
               optThree.text = "Cilt Bakımı";
               optThree.value = "Cilt Bakımı";
               secenekSecimi.add(optThree);

               var optFour = document.createElement("option");
               optFour.text = "Saç Bakımı ve Şekillendirme";
               optFour.value = "Saç Bakımı ve Şekillendirme";
               secenekSecimi.add(optFour);

               var optFive = document.createElement("option");
               optFive.text = "Kişisel Bakım Aletleri";
               optFive.value = "Kişisel Bakım Aletleri";
               secenekSecimi.add(optFive);

               var optSix = document.createElement("option");
               optSix.text = "Tıraş ve Epilasyon Ürünleri";
               optSix.value = "Tıraş ve Epilasyon Ürünleri";
               secenekSecimi.add(optSix);

               var optSeven = document.createElement("option");
               optSeven.text = "Güneş Bakımı";
               optSeven.value = "Güneş Bakımı";
               secenekSecimi.add(optSeven);
          break;

          case "5":
               secenekSecimi.innerHTML = "";
               var optOne = document.createElement("option");
               optOne.text = "Spor Giyim ve Ayakkabılar";
               optOne.value = "Spor Giyim ve Ayakkabılar";
               secenekSecimi.add(optOne);

               var optTwo = document.createElement("option");
               optTwo.text = "Egzersiz ve Fitness Ekipmanları";
               optTwo.value = "Egzersiz ve Fitness Ekipmanları";
               secenekSecimi.add(optTwo);

               var optThree = document.createElement("option");
               optThree.text = "Kamp Malzemeleri";
               optThree.value = "Kamp Malzemeleri";
               secenekSecimi.add(optThree);

               var optFour = document.createElement("option");
               optFour.text = "Outdoor Giyim";
               optFour.value = "Outdoor Giyim";
               secenekSecimi.add(optFour);

               var optFive = document.createElement("option");
               optFive.text = "Spor Aksesuarları";
               optFive.value = "Spor Aksesuarları";
               secenekSecimi.add(optFive);

               var optSix = document.createElement("option");
               optSix.text = "Bisikletler ve Aksesuarları";
               optSix.value = "Bisikletler ve Aksesuarları";
               secenekSecimi.add(optSix);

               var optSeven = document.createElement("option");
               optSeven.text = "Su Sporları Ekipmanları";
               optSeven.value = "Su Sporları Ekipmanları";
               secenekSecimi.add(optSeven);
          break;

          case "6":
               secenekSecimi.innerHTML = "";
               var optOne = document.createElement("option");
               optOne.text = "Kitaplar";
               optOne.value = "Kitaplar";
               secenekSecimi.add(optOne);

               var optTwo = document.createElement("option");
               optTwo.text = "E-kitaplar";
               optTwo.value = "E-kitaplar";
               secenekSecimi.add(optTwo);

               var optThree = document.createElement("option");
               optThree.text = "Müzik CD'leri";
               optThree.value = "Müzik CD'leri";
               secenekSecimi.add(optThree);

               var optFour = document.createElement("option");
               optFour.text = "Film ve TV Dizileri";
               optFour.value = "Film ve TV Dizileri";
               secenekSecimi.add(optFour);

               var optFive = document.createElement("option");
               optFive.text = "Oyunlar ve Oyun Konsolları";
               optFive.value = "Oyunlar ve Oyun Konsolları";
               secenekSecimi.add(optFive);

               var optSix = document.createElement("option");
               optSix.text = "Sanat ve El Sanatları Malzemeleri";
               optSix.value = "Sanat ve El Sanatları Malzemeleri";
               secenekSecimi.add(optSix);

               var optSeven = document.createElement("option");
               optSeven.text = "Hobi ve Eğlence";
               optSeven.value = "Hobi ve Eğlence";
               secenekSecimi.add(optSeven);
          break;

          case "7":
               secenekSecimi.innerHTML = "";
               var optOne = document.createElement("option");
               optOne.text = "Otomobil Yedek Parçaları";
               optOne.value = "Otomobil Yedek Parçaları";
               secenekSecimi.add(optOne);

               var optTwo = document.createElement("option");
               optTwo.text = "Lastikler ve Jantlar";
               optTwo.value = "Lastikler ve Jantlar";
               secenekSecimi.add(optTwo);

               var optThree = document.createElement("option");
               optThree.text = "Araç Elektroniği";
               optThree.value = "Araç Elektroniği";
               secenekSecimi.add(optThree);

               var optFour = document.createElement("option");
               optFour.text = "Araç Bakım ve Temizlik Ürünleri";
               optFour.value = "Araç Bakım ve Temizlik Ürünleri";
               secenekSecimi.add(optFour);

               var optFive = document.createElement("option");
               optFive.text = "Motosikletler ve Aksesuarları";
               optFive.value = "Motosikletler ve Aksesuarları";
               secenekSecimi.add(optFive);

               var optSix = document.createElement("option");
               optSix.text = "Araba Aksesuarları";
               optSix.value = "Araba Aksesuarları";
               secenekSecimi.add(optSix);

               var optSeven = document.createElement("option");
               optSeven.text = "Seyahat ve Taşıma Aksesuarları";
               optSeven.value = "Seyahat ve Taşıma Aksesuarları";
               secenekSecimi.add(optSeven);
          break;
     }
}


function hesap(value){
     var convertValue = parseFloat(value);
     var komisyon = convertValue * 0.10;
     var toplam = convertValue + komisyon;

     document.getElementById("cm").value = toplam;     
}