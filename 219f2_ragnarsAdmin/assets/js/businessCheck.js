$("a[name='check']").on("click", function () {

     var tc = $(this).attr('userTc');
     var bDate = $(this).attr('userBDate');
     var phoneNumber = $(this).attr('userPNumber');
     var status = $(this).attr('userStatus');
     var hash = $(this).attr('userHash');
     //alert(tc + " " + bDate + " " + phoneNumber + " " + status + " " + hash);

     Swal.fire({
          title: 'Dikkat',
          text: 'İşletme Hesabı İsteğini Onaylamak İstediğinize Emin Misiniz ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonText: "Onayla",
          cancelButtonText: "İptal"
     }).then((result) => {
          if (result.isConfirmed) {

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/businessCheckFolder/bCheck",
                    method: "POST",
                    data: { hash: hash, tc: tc, bDate: bDate, phoneNumber: phoneNumber, status: status },
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

/* CANCEL */

$("a[name='cancel']").on("click", function () {

     var status = $(this).attr('userStatus');
     var hash = $(this).attr('userHash');
     //alert(tc + " " + bDate + " " + phoneNumber + " " + status + " " + hash);

     Swal.fire({
          title: 'Dikkat',
          text: 'İşletme Hesabı İsteğini Reddetmek İstediğinize Emin Misiniz ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonText: "Onayla",
          cancelButtonText: "İptal"
     }).then((result) => {
          if (result.isConfirmed) {

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/businessCheckFolder/bCancel",
                    method: "POST",
                    data: { hash: hash, status: status },
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