$("a[name='uDel']").on("click", function () {

     var hash = $(this).attr('userHash');

     Swal.fire({
          title: 'Dikkat',
          text: 'Hesabı Kaldırmak İstediğinize Emin Misiniz ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonText: "Onayla",
          cancelButtonText: "İptal"
     }).then((result) => {
          if (result.isConfirmed) {

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/userPanelFolder/userDel",
                    method: "POST",
                    data: { hash: hash },
                    success: function (response) {
                         Swal.fire({
                              title: "Başarılı",
                              text: response,
                              icon: "success"
                         });
                         setTimeout(function () {
                              location.reload();
                         }, 1000);
                    },
                    error: function () {
                         Swal.fire({
                              title: "Hata",
                              text: "Sistemsel bir hata oluştu !",
                              icon: "warning"
                         })
                    }
               })

          } else if (result.dismiss === Swal.DismissReason.cancel) {
               Swal.fire({
                    title: "İşlem İptal Edildi",
                    icon: "warning"
               })
          }
     })
});

$("a[name='uBan']").on("click", function () {

     var hash = $(this).attr('userHash');

     Swal.fire({
          title: 'Dikkat',
          text: 'Hesabı Yasaklamak İstediğinize Emin Misiniz ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonText: "Onayla",
          cancelButtonText: "İptal"
     }).then((result) => {
          if (result.isConfirmed) {

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/userPanelFolder/userBan",
                    method: "POST",
                    data: { hash: hash },
                    success: function (response) {
                         Swal.fire({
                              title: "Başarılı",
                              text: response,
                              icon: "success"
                         });
                         setTimeout(function () {
                              location.reload();
                         }, 1000);
                    },
                    error: function () {
                         Swal.fire({
                              title: "Hata",
                              text: "Sistemsel bir hata oluştu !",
                              icon: "warning"
                         })
                    }
               })

          } else if (result.dismiss === Swal.DismissReason.cancel) {
               Swal.fire({
                    title: "İşlem İptal Edildi",
                    icon: "warning"
               })
          }
     })
});

$("a[name='uEdit']").on("click", function () {

     var hash = $(this).attr("userHash");

     Swal.fire({
          title: 'Kullanıcı Değişiklik Bilgileri',
          html: `
            <input type="text" id="name" class="swal2-input" placeholder="Yeni adı giriniz">
            <input type="text" id="surname" class="swal2-input" placeholder="Yeni soyadı giriniz">
            <input type="email" id="email" class="swal2-input" placeholder="Yeni email adresini giriniz">
            <input type="date" id="date" class="swal2-input">
            <input type="password" id="pass" class="swal2-input" placeholder="Yeni şifreyi giriniz">
            <input type="password" id="passAgain" class="swal2-input" placeholder="Yeni şifreyi onaylayın">
            <input type="text" id="tc" class="swal2-input" placeholder="Yeni tcyi giriniz">
            <input type="tel" id="phone" class="swal2-input" placeholder="Yeni telefon numarasını giriniz">
            <select class="swal2-input" id="accountType">
               <option value="" selected disabled>Lütfen hesap türü seçiniz</option>
               <option value="customer">Müşteri Hesabı</option>
               <option value="business">İşletme Hesabı</option>
               <option value="admin">Admin Hesabı</option>
            </select>

            <select class="swal2-input" id="accessLevel">
               <option value="" selected disabled>Lütfen hesap seviyesi seçiniz</option>
               <option value="sifir">Kullanıcı Hesabı</option>
               <option value="1">Yönetici Hesabı</option>
            </select>
            
          `,
          showCancelButton: true,
          confirmButtonText: 'OK',
          cancelButtonText: 'Cancel',
          preConfirm: function () {
               return {
                    name: document.getElementById('name').value,
                    surname: document.getElementById('surname').value,
                    date: document.getElementById('date').value,
                    email: document.getElementById('email').value,
                    accountType: document.getElementById('accountType').value,
                    accessLevel: document.getElementById('accessLevel').value,
                    pass: document.getElementById('pass').value,
                    passAgain: document.getElementById('passAgain').value,
                    tc: document.getElementById('tc').value,
                    phone: document.getElementById('phone').value,
               };
          },
     }).then(function (result) {
          if (result.isConfirmed) {
               var inputs = result.value;
               /*console.log('Ad:', inputs.name);
               console.log('Soyad', inputs.surname)
               console.log('Date:', inputs.date);
               console.log('Email:', inputs.email);
               console.log('Hesap Türü', inputs.accountType);
               console.log('Hesap Seviyesi', inputs.accessLevel);
               console.log('Şifre', inputs.pass);
               console.log('Şifre Tekrar', inputs.passAgain);
               console.log('Tc', inputs.tc);
               console.log(hash);*/

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/userPanelFolder/userEdit",
                    method: "POST",
                    data: { hash: hash, name: inputs.name, surname: inputs.surname, date: inputs.date, email: inputs.email, accountType: inputs.accountType, accessLevel: inputs.accessLevel, pass: inputs.pass, passAgain: inputs.passAgain, tc: inputs.tc, phone: inputs.phone },
                    success: function (response) {
                         Swal.fire({
                              title: "Bilgilendirme",
                              text: response,
                              icon: "info"
                         });
                         setTimeout(function () {
                              location.reload();
                         }, 1000);
                    },
                    error: function () {
                         Swal.fire({
                              title: "Hata",
                              text: "Sistemsel bir hata oluştu !",
                              icon: "warning"
                         })
                    }
               })

          } else if (result.dismiss === Swal.DismissReason.cancel) {
               Swal.fire({
                    title: "İşlem İptal Edildi",
                    icon: "warning"
               })
          }
     });
})