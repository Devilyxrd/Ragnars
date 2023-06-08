$("a[name='environment']").on("click", function () {

     var hash = $(this).attr('productHash');

     Swal.fire({
          title: 'Dikkat',
          text: 'Bu Ürünü Çevre Dostu Ürün Olarak Eklemek İstediğinize Emin Misiniz ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonText: "Onayla",
          cancelButtonText: "İptal"
     }).then((result) => {
          if (result.isConfirmed) {

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/productRequest/productEnvironment",
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

$("a[name='rare']").on("click", function () {

     var hash = $(this).attr('productHash');

     Swal.fire({
          title: 'Dikkat',
          text: 'Bu Ürünü Normal Ürün Olarak Eklemek İstediğinize Emin Misiniz ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonText: "Onayla",
          cancelButtonText: "İptal"
     }).then((result) => {
          if (result.isConfirmed) {

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/productRequest/productRare",
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

$("a[name='productDel']").on("click", function () {

     var hash = $(this).attr('productHash');

     Swal.fire({
          title: 'Dikkat',
          text: 'Bu Ürünün Eklenmesini Reddetmek İstediğinize Emin Misiniz ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonText: "Onayla",
          cancelButtonText: "İptal"
     }).then((result) => {
          if (result.isConfirmed) {

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/productRequest/productDel",
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

$("a[name='pDel']").on("click", function () {

     var hash = $(this).attr('productHash');

     Swal.fire({
          title: 'Dikkat',
          text: 'Bu Ürünü Silmek İstediğinize Emin Misiniz ?',
          icon: 'info',
          showCancelButton: true,
          confirmButtonText: "Onayla",
          cancelButtonText: "İptal"
     }).then((result) => {
          if (result.isConfirmed) {

               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/productRequest/pDel",
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