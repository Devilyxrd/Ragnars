$('#msg').on('input', function () {
     var maxLength = 800;
     var currentLength = $(this).val().length;

     if (currentLength > maxLength) {
          Swal.fire({
               title: "Uyarı",
               text: 'En fazla ' + maxLength + ' karakter girebilirsiniz.',
               icon: "info"
          })
          $(this).val($(this).val().substring(0, maxLength));
     }
});