$(document).ready(function () {
     let table = new DataTable('#myTable', {
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": false,
          "info": false,
          "autoWidth": true,
          "responsive": true,
          "rowReorder": {
               selector: 'td:nth-child(2)'
          },
          "sDom": '<"refresh"i<"clear">>rt<"top"lf<"clear">>rt<"bottom"p<"clear">>',
          "language": {
               "emptyTable": "Gösterilecek veri bulunamadı.",
               "processing": "Veriler yükleniyor",
               "sDecimal": ".",
               "sInfo": "TOTAL kayıttan START - END arasındaki kayıtlar gösteriliyor",
               "sInfoFiltered": "(MAX kayıt içerisinden bulunan)",
               "sInfoPostFix": "",
               "sInfoThousands": ".",
               "sLengthMenu": "Sayfada MENU kayıt göster",
               "sLoadingRecords": "Yükleniyor...",
               "sSearch": "Ara:&nbsp;",
               "sZeroRecords": "Eşleşen kayıt bulunamadı",
               "oPaginate": {
                    "sFirst": "İlk",
                    "sLast": "Son",
                    "sNext": ">",
                    "sPrevious": "<"
               },
               "oAria": {
                    "sSortAscending": ": artan sütun sıralamasını aktifleştir",
                    "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
               },
               "select": {
                    "rows": {
                         "_": "%d kayıt seçildi",
                         "0": "",
                         "1": "1 kayıt seçildi"
                    }
               }
          }
     });
});