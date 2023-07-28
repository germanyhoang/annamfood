<br>
<br>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Thêm mới sản phẩm</h3>
    </div>
    <div class="panel-body">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <legend> Nhập các thông tin </legend>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text"  name="txtTensp" class="form-control"  id="" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="">Giá sản phẩm</label>
                <input type="text" name="txtGiasp" class="form-control" id="" placeholder="Nhập giá sản phẩm">
            </div>
            <div class="form-group">
                <label for="">Ngày nhập</label>
                <input class="form-control" name="datedepart" type="date"
                    value="<?php echo date('Y-m-d',strtotime("$NgaySinh")) ?>"/>
            </div>
            <div class="form-group">
                <label for="">Số lượng </label>
                <input type="text" name="txtSoluongtrongkho" class="form-control" id="" placeholder="Nhập số lượng sản phẩm">
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" name="txtpic" class="form-control" id="" placeholder="Chọn ảnh sản phẩm">
            </div>
            <div class="form-group">
                <label for="">Ảnh1</label>
                <input type="file" name="txtpic1" class="form-control" id="" placeholder="Chọn ảnh sản phẩm1">
            </div>
            <div class="form-group">
                <label for="">Mô tả </label>
                <input type="text" name="txtMoTa" class="form-control" id="" placeholder="Chi tiết sản phẩm">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Thêm mới" id="btnGhi" name="btnGhi">
            </div>
        </form>
    </div>
</div>

<?php
        if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnGhi'])) {
            $tenSp = $_POST['txtTensp'];
            $giaSp = $_POST['txtGiasp'];
            $ngaynhap = $_POST['datedepart'];
            $soluongtrongkho = $_POST['txtSoluongtrongkho'];
            $anh =basename($_FILES['txtpic']['name']) ;
            $target_dir = "img/";
            $target_file = $target_dir.$anh;
            move_uploaded_file($_FILES["txtpic"]["tmp_name"], $target_file);
            $anh1 =basename($_FILES['txtpic1']['name']) ;
            $target_dir1 = "img/";
            $target_filee = $target_dir1.$anh1;
            move_uploaded_file($_FILES["txtpic1"]["tmp_name"], $target_filee);
            // $anh1=($_FILES['txtpic1']['name']) ;
            $mota = $_POST['txtMoTa'];
            require_once "db.php";
            $sql = "INSERT INTO daychuyen(tenSP,giaSP,ngaynhap,soluongtrongkho,anh,anh1,mota) VALUES (' $tenSp',' $giaSp','$ngaynhap','$soluongtrongkho','$target_file','$target_filee','$mota')";
            $query= mysqli_query($conn, $sql);
            if ($query == true) {
                echo "Insert success";
            } else {
                echo "no success";
            }
            mysqli_close($conn);
        }
    ?>

   
<div>
    <a href="../quanly.php?page=bangsp" class="okok"> Home </a>
    </div> 
