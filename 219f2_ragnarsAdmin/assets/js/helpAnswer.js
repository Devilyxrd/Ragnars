$("a[name='answer']").on("click", function () {

     var msgHash = $(this).attr('msgHash');

     Swal.fire({
          title: 'Lütfen bir cevap veriniz',
          input: 'text',
          showCancelButton: true,
          confirmButtonText: 'Tamam',
          cancelButtonText: 'İptal',
          preConfirm: function (value) {
               return new Promise(function (resolve) {
                    if (value) {
                         resolve(value);
                    } else {
                         Swal.showValidationMessage('Alanı boş bırakmayınız');
                    }
               });
          }
     }).then(function (result) {
          if (result.value) {
               var inputValue = result.value;
               $.ajax({
                    url: "/219f2_ragnarsAdmin/assets/request/helpPanelFolder/answer",
                    method: "POST",
                    data: { msgHash: msgHash, value: inputValue },
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
          }
     });
});
