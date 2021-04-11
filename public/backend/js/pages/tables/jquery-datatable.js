$(function () {
    $('.js-basic-example').DataTable({
      responsive: true, 
      pageLength:5,

      order: [[ 0, 'asc' ]],
      language: {
              lengthMenu: 5,
              lengthMenu: "Hiện _MENU_ tin trong mỗi trang",
              zeroRecords: "Không tìm thấy",
              info: "Đang hiện trang _PAGE_ trong _PAGES_ trang",
              infoEmpty: "Không có dòng nào",
              infoFiltered: "(Lọc trong _MAX_ tin)",
              search: "Tìm kiếm:",
              paginate: {
                  previous: " < ",
                  next: " > ",
                  first: "<<", 
                  last:">>",
              }
      }
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
