<?php require_once "db.php";
$sql = "SELECT * FROM daychuyen";
$result = mysqli_query($conn, $sql);
?>
<div class="sanpham">
    <img src="../img/nensanpham1.png" width="100%" alt="">
    <div class="tieude" style="color: #f86a28;">
        Sản phẩm Annam
        <br>
        <img src="../img/trangtri5.png" width="100px" height="80px" alt="">
    </div>
    <div class="gallery2">
       
            <div class="ong">

                <?php
                foreach ($result as $value) { ?>
                <a class="button2" href="../layout.php?page=nuoccotpho&idSP=<?php echo $value["idSP"]; ?>">
                    <div class="car">

                        <div class="img-area">
                            <img class="im" src="<?php echo $value["anh"]; ?>">
                            <img class="img-front" src="<?php echo $value["anh1"]; ?>">
                        </div>
                        <div class="na">
                            <p><?php echo $value["tenSP"]; ?></p>
                        </div>
                        <!-- <div class="pr">
                            <p><?php echo number_format($value["giaSP"]); ?> vnđ</p>
                        </div> -->
                        <div class="ma">
                            <p><?php echo $value["mota"]; ?></p>
                        </div>


                        <!-- <form action="../addcart.php?idSP=<?php echo $value["idSP"]; ?>" method="post"> -->
                            <!-- <div>
                                <a class="button2" href="../layout.php?page=nuoccotpho&idSP=<?php echo $value["idSP"]; ?>"> xem chi tiết </a>
                            </div> -->
                            <!-- <div>
                            <input class="button1" type="submit" name="themvaogiohang" value="them vao gio hang">
                        </div>

                        <label><input class="button1" type="number" name="sl" value="1" min="1"></label> -->
                        <!-- </form> -->
                    </div>
            
                </a>
                    


                <?php
                }

                ?>


            </div>

    </div>
</div>