<?php
require_once "db.php";
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['order'])) {
    $customer = $_POST['customer'];
                                        $phone = $_POST['phone'];
                                        $total = $_POST['total'];
                                        $email = $_POST['email'];
                                        $address = $_POST['address'];
    $conn = mysqli_connect($server, $username, $password, $namedb);
    if (!$conn) {
        echo "Ket noi that bai";
        return;
    }
    $sql = "INSERT INTO`donhang`( `tenKH`, `sdt`, `email`, `diachi`, `tongtien`) VALUES ('$customer','$phone','$email','$address','$total')";
   
                                        $result_order = mysqli_query($conn, $sql);

                                        $order = "SELECT MAX(idDH) as 'idDH' FROM donhang ";
                                        $order_result = mysqli_query($conn, $order);
                                        while ($idDH = mysqli_fetch_array($order_result)) {

                                            $id_order = $idDH["idDH"];
                                            $idSP = $_POST['input_id'];
                                            $sl = $_POST['input_sl'];
                                            $order_detail = "INSERT INTO `chitietdonhang`( `idSP`, `soluong`, `idDH`) VALUES ('$idSP','$sl','$id_order')";
                                            $result_detail = mysqli_query($conn, $order_detail);
                                        }
                                        mysqli_close($conn);
                                       
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hóa đơn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .containerdathang {
            max-width: 800px;

            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-top: -10px;
            font-size: 42px;
            font-weight: bold;
            margin-bottom: 36px;
            color: #f20d0d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        table th {
            width: 40%;
            background-color: #f2f2f2;
        }

        .dathangthanhcong {
            display: flex;
            justify-content: center;
            padding: 50px 0 30px 0;
        }

        .fa-check {
            box-shadow: 0 0 10px rgb(249, 4, 0);
            border-radius: 50%;
        }

        .tieudedathang {
            padding: 20px;
        }
        
        .giohangthanhcong {
            padding: 20px;
        }
        #phai{
            text-align: right;
        }
        
        @media screen and (max-width: 768px) {
            .dathangthanhcong{
                flex-direction: column;
            }
            h1{
                margin-top: 0;
            font-size: 30px;
            
            margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>

    <div class="dathangthanhcong">
        <div class="tieudedathang">
            <br>
            <h1 style="text-align: center;"> <i class="fa-solid fa-check" style="color: #f20d0d;"></i> Đặt hàng thành công </h1>
            <br>
            
            <p>Cảm ơn quý khách đã đặt hàng tại <b>AnnamFood!</b></p>
            <p>Đơn hàng <b><?php echo $id_order ?></b> . Nếu quý khách có yêu cầu đặc biệt, vui lòng liên hệ nhân viên tư vấn theo hotline <b>1900 234501</b>.</p>
            <br>
            <br>
            <div class="containerdathang">
                <table>

                    <tr>
                        <th>Họ tên</th>
                        <td><?php echo $customer ?></td>
                    </tr>
                    <tr>
                        <th>Số điện thoại</th>
                        <td><?php echo $phone ?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td><?php echo $address ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $email ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="giohangthanhcong">

            <div class="containerdathang">
                <table>
                    <tr>
                        <h2>Giỏ hàng của bạn </h2>
                    </tr>
                    <tr>
                        <th>Combo 1</th>
                        <td><img src="../img/anhnuoccotpho.png" width="200px" height="180px" alt=""></td>
                    </tr>
                    <tr>
                        <th>Tạm tính</th>
                        <td id="phai" style="color: #f20d0d;"><?php echo number_format($total); ?>đ </td>
                    </tr>
                    <tr>
                        <th>Phí ship</th>
                        <td id="phai">Free</td>
                    </tr>
                    <tr>
                        <br>
                        <th>Tổng Cộng</th>
                        <td id="phai" style="color: #f20d0d;"><?php echo number_format($total); ?>đ</td>
                        <br>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
