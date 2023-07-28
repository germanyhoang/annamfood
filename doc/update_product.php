<?php
require_once "db.php";
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnGhi'])) {
    $tenSp = $_POST['txtTensp'];
    $giaSp = $_POST['txtGiasp'];
    $ngaynhap = $_POST['datedepart'];
    $soluongtrongkho = $_POST['txtSoluongkho'];
    if($_FILES['txtpic']['name']==''){
        $anh =$_POST['txtpic'];
    }else{
        $anh =basename($_FILES['txtpic']['name']) ;
        $target_dir = "img/";
        $target_file = $target_dir.$anh;
        move_uploaded_file($_FILES["txtpic"]["tmp_name"], $target_file);
    }
    if($_FILES['txtpic1']['name']==''){
        $anh1 =$_POST['txtpic1'];
    }else{
        $anh1 =basename($_FILES['txtpic1']['name']) ;
        $target_dir1 = "img/";
        $target_filee = $target_dir1.$anh1;
        move_uploaded_file($_FILES["txtpic1"]["tmp_name"], $target_filee);
    }
    $mota = $_POST['txtMoTa'];
    $idSP = $_POST['input_id'];
    $conn = mysqli_connect($server, $username, $password, $namedb);
    if (!$conn) {
        echo "Ket noi that bai";
        return;
    }
    $sql = "UPDATE daychuyen SET  tenSP = '$tenSp', giaSP = '$giaSp', ngaynhap = '$ngaynhap', soluongtrongkho = '$soluongtrongkho', anh = '$target_file' , anh1 = '$target_filee' , mota = '$mota'  WHERE idSP=" . $idSP;
    $result = mysqli_query($conn, $sql);
    if ($result  == true) {
        echo "Insert success";
    } else {
        echo "no success";
    }
    mysqli_close($conn);
    header('location: table-data-product.php');
}
