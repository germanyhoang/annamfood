<?php
// session_start();
require_once 'db.php';
if (isset($_POST["update-cart"])) {
    if (isset($_SESSION["cart"])) {
        foreach ($_SESSION["cart"] as $value) {
            if ($_POST["sl" . $value["idSP"]] <= 0) {

                unset($_SESSION["cart"]["sl" . $value["idSP"]]);
            } else {
                $_SESSION["cart"][$value["idSP"]]["sl"] = $_POST["sl" . $value["idSP"]];
            }
        }
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <section id="show-product">

            <div class="table">

                <form action="../layout.php?page=viewcart" method="POST">
                    <div class="lan3">
                        <div class="lan1">
                            <table>
                                <thead>
                                    <tr>
                                        <!-- <th>ID SP</th> -->
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <!-- <th>số lượng trong kho </th> -->
                                        <!-- <th>Thành tiền</th> -->
                                        <th>&nbsp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $total = 0;
                                    if (isset($_SESSION["cart"])) {
                                        foreach ($_SESSION["cart"] as  $value) {
                                            $tong = 0;
                                            $tong = $value["giaSP"] * $value["sl"];
                                            $total += $tong;
                                    ?>

                                            <tr>

                                                <!-- <td><?php echo $value["idSP"] ?></td> -->
                                                <td><?php echo $value["tenSP"]; ?></td>
                                                <td><img class="im" width="110px" height="110px" src="<?php echo $value["anh"] ?>" alt=""></td>
                                                <td><?php echo number_format($value["giaSP"]); ?> vnd</td>
                                                <td style="text-align: center; "><input style="text-align:center ;" type="number" min="1" max="<?php echo $value["soluongtrongkho"]; ?>" name="sl<?php echo $value["idSP"]; ?>" value="<?php echo $value["sl"] ?>"></td>
                                                <!-- <td  style="text-align: center ;" ><?php echo $value["soluongtrongkho"]; ?></td> -->
                                                <!-- <td><?php echo number_format($tong);  ?> vnd</td> -->

                                                <td>
                                                    <a href="../delcart.php?idSP=<?php echo $value['idSP']; ?>">xoa </a>
                                                </td>
                                            </tr>


                                    <?php
                                        }
                                    }


                                    ?>

                                </tbody>
                            </table>
                            <p class="tongtien"> - Tổng giá trị đơn hàng: <?php echo number_format($total); ?> vnd</p>
                            <div class="phuongthuc"> <p> Phương thức thanh toán</p> </div>
                            <div class="vanchuyen">
                                    <img src="../img/vanchuyen.svg" alt="">
                                    <div> Thanh toán khi nhận hàng (COD) </div>
                            </div>
                            <div class="uudai1">( Miễn phí vận chuyển cho toàn bộ đơn hàng trên 200.000 vnđ ) </div>
                            <button style="margin-right: 0px;" class="dathang" type="submit" name="update-cart">Cap nhat</button>
                        </div>

                        <div class="lan2">
                            <div class="thuonghieu">ANNAM FOOD - Thương hiệu nước cốt phở hàng đầu Việt Nam </div>
                            <div id="donhang">
                                <?php
                                if (isset($_POST["order"], $value)) {
                                    if (empty($_POST["customer"]) || empty($_POST["phone"]) || empty($_POST["total"])   || empty($_POST["address"])) {
                                        echo  'Xin hãy nhập đầy đủ thông tin cần thiết !!';
                                    } else {
                                        $cart = !empty($_SESSION['cart']) ? $_SESSION['cart'] : [];

                                        $customer = $_POST['customer'];
                                        $phone = $_POST['phone'];
                                        $total = $_POST['total'];
                                        $email = $_POST['email'];
                                        $address = $_POST['address'];
                                        $sql = "INSERT INTO`donhang`( `tenKH`, `sdt`, `email`, `diachi`, `tongtien`) VALUES ('$customer','$phone','$email','$address','$total')";
                                        echo ' Chúc mừng bạn đã đặt mua thành công';
                                        $result_order = mysqli_query($conn, $sql);

                                        $order = "SELECT MAX(idDH) as 'idDH' FROM donhang ";
                                        $order_result = mysqli_query($conn, $order);
                                        while ($idDH = mysqli_fetch_array($order_result)) {

                                            $id_order = $idDH["idDH"];
                                        }
                                        foreach ($cart as $value) {
                                            $idSP = $value['idSP'];
                                            $sl = $value['sl'];
                                            $order_detail = "INSERT INTO `chitietdonhang`( `idSP`, `soluong`, `idDH`) VALUES ('$idSP','$sl','$id_order')";
                                            $result_detail = mysqli_query($conn, $order_detail);
                                        }

                                        unset($_SESSION["cart"]);
                                        // header("location:../layout.php?page=viewcart");
                                    }
                                }

                                ?>
                            </div>

                            <div class="lan">
                                <input type="text" size="30" name="customer" placeholder="Họ và tên">
                            </div>
                            <div class="lan">
                                <input type="text" name="phone" placeholder="Số điện thoại">
                                <input type="hidden" name="total" value="<?php echo $total; ?>">
                            </div>
                            <div class="lan">
                                <input type="text" name="email" placeholder="*Email ( không bắt buộc )">
                            </div>
                            <div class="lan">
                                <input type="text" name="address" placeholder="Địa chỉ">
                            </div>
                            <div>
                                <input class="dathang" type="submit" name="order" value=" Đặt hàng">

                            </div>
                        </div>
                    </div>


                </form>


               
            </div>


        </section>

    </main>

</body>

</html>