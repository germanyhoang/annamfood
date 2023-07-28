<?php
 require_once "db.php";
?>
<?php
    $id = $_GET["idDH"];
   
    $sql_delete_chitietdonhang = "DELETE FROM donhang WHERE idDH = '$id'";
if ($conn->query($sql_delete_chitietdonhang) === TRUE) {
    // Xoá dữ liệu từ bảng donhang sau
    $sql_delete_donhang = "DELETE FROM chitietdonhang WHERE idDH = '$id'";
    if ($conn->query($sql_delete_donhang) === TRUE) {
        echo "Đơn hàng và các chi tiết đơn hàng đã được xoá thành công";
    } else {
        echo "Lỗi khi xoá dữ liệu từ bảng donhang: " . $conn->error;
    }
} else {
    echo "Lỗi khi xoá dữ liệu từ bảng chitietdonhang: " . $conn->error;
}
    header('location: ../doc/quanly.php?page=table-data-oder');

?>