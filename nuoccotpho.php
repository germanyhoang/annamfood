<?php require_once "db.php";
$sql = "SELECT * FROM daychuyen";
$result = mysqli_query($conn, $sql);
?>
<?php
$result = mysqli_query($conn, "SELECT * FROM `daychuyen` WHERE `idSP` = " . $_GET['idSP']);
$products = mysqli_fetch_assoc($result)
?>
<div class="sanphamannam">
    <div class="thongtinsanpham">
        <?php

        foreach ($result as $value) { ?>
            <div class="thongtin">

                <div class="tensp">
                    <p><?php echo $value["tenSP"]; ?></p>
                </div>
                <div class="motasp">
                    <div class="tieudesanpham"> Nguyên liệu: </div>
                    <p><?php echo $value["mota"]; ?></p>
                </div>
                <div class="giasp">
                    <p>Giá: <?php echo number_format($value["giaSP"]); ?> vnđ</p>
                </div>

                <form action="../layout.php?page=addcart&idSP=<?php echo $value["idSP"]; ?>" method="post">
                    <!-- <div>
                            <a class="button1" href="sanpham.php?idSP=<?php echo $value["idSP"]; ?>"> xem chi tiết </a>
                        </div> -->
                    <div class="dathang1"> 
                    <label>Số lượng: <input class="button1" type="number" name="sl" value="1" min="1"></label>
                    <br>
                    <div>
                        <input class="button3" type="submit" name="themvaogiohang" value="Đặt Hàng">
                    </div>
                    </div>
                </form>
            </div>
            <div  >
                    <img class="imge" src="<?php echo $value["anh"]; ?>">
                    
                    
            </div>

        <?php
        }

        ?>
    </div>
</div>