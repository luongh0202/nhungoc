$(document).ready(function() {
    $("#tinhgiaban_new").click(function(event) {
        event.preventDefault();
        var giaweb_new = Number($('#giaweb_new').val());
        var tigia_new = Number($('#tigia_new').val());
        var lai_new = Number($('#lai_new').val());
        $('#giaban_new').val(giaweb_new * tigia_new + lai_new);
    });
    $("#tinhtongtien_new").click(function(event) {
        event.preventDefault();
        var giaban_new = $('#giaban_new').val();
        var soluong_new = Number($('#soluong_new').val());
        var giagiam_new = Number($('#giagiam_new').val());
        var coc_new = Number($('#coc_new').val());
        var tongtien_new = giaban_new * soluong_new - giagiam_new;
        $('#tongtien_new').val(tongtien_new);
        $('#conthieu_new').val(tongtien_new - coc_new);
    });

});

$(document).ready(function() {
    $('.table12').DataTable({
        "language": {
            "decimal": "",
            "emptyTable": "Không có dữ liệu trong bảng",
            "info": "Từ _START_ đến _END_ của _TOTAL_ mục",
            "infoEmpty": "Hiển thị 0 đến 0 trong số 0 mục",
            "infoFiltered": "(được lọc từ tổng số _MAX_ mục nhập)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Số lượng hiển thị _MENU_",
            "loadingRecords": "Đang tải...",
            "processing": "Đang xử lí...",
            "search": "Tìm kiếm:",
            "zeroRecords": "Không tìm thấy kết quả",
            "paginate": {
                "first": "Đầu",
                "last": "Cuối",
                "next": "Tiếp",
                "previous": "Lùi"
            },
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        }
    });
});