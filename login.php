<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> Dang Nhap </title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        #logiinn {
            text-align: center;
        }

        .thongtindangnhap {
            background-color: rgb(247, 203, 148);
        }

        .dangnhapp {
            padding-top: 100px;
            text-align: center;
            line-height: 1.6;
            font-family: UVN Hai Ba Trung;
            font-size: 50px;
            color: #f86a28;
        }

       

        .username {
            padding: 0 10px;
            margin-bottom: 30px;
            height: 53px;
            width: 458px;
            border: 1px solid transparent;
            background: #ededed;
            width: 40%;
        }

        .submit {
            margin-bottom: 120px;
            margin-right: 20px;
            height: 53px;
            width: 200px;
            background: transparent;
            background-color: orange;
            color: white;
            border: 1px solid transparent;
            /* margin-left: 110px; */
        }

        table {
            text-align: center;
        }

        @media screen and (max-width: 768px) {
           .username{
            width: 75%;
           }
        }
    </style>
</head>

<body>
    <div class="thongtindangnhap">
        <div id="logiinn">
            <div class="dangnhapp">
                <p> Đăng Nhập </p>
            </div>
            <br>
            <div class="thongtin">
                <p>
                    <?php
                    if (isset($_SESSION["thongbao"])) {
                        echo $_SESSION["thongbao"];
                        //   session_unset("thongbao");
                    }
                    ?>
                </p>
                <form action="login_submit.php" method="POST">
                    <table>
                        <tr>
                            <td><input class="username" type="text" name="username" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td><input class="username" type="password" name="password" placeholder="Passwword"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="submit" type="submit" name="submit">Đăng Nhập</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>
    </div>


</html>