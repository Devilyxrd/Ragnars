$("a[name='bDel']").on("click", function () {

     var hash = $(this).attr('userHash');

     Swal.fire({
          title: 'Dikkat',
          text: 'İşletme Hesabını Kaldırmak İstediğinize Emin Misiniz ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonText: "Onayla",
          cancelButtonText: "İptal"
     }).then((result) => {
          if (result.isConfirmed) {

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/businessAccountFolder/bAccountDel",
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