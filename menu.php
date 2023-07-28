<div id="header">
    <div id="main_menu">
        <div class="logo_area">
            <a href="../trangchu.php">
                <img src="../img/logoannam.png" width="180px" height="140px" alt="">
            </a>

        </div>
        <div class="inner_main_menu">
            <div id="toggle1">
                <div class="logo_are">
                    <a href="../trangchu.php">
                        <img src="../img/logoannam.png" width="100px" height="80px" alt="">
                    </a>

                </div>
                <div id="toggle">
                    <i class="fas fa-bars"></i>
                </div>

                <!-- <a href="../layout.php?page=login"> -->
                <div id="user-mobile">
                    <div id="user">

                        <img onclick="dieu_huong()" src="../img/giohang.png" width="30px" height="30px" alt="">


                        <script>
                            function dieu_huong() {
                                location.replace("../layout.php?page=viewcart");
                            }
                        </script>
                    </div>
                </div>
                <!-- </a> -->

            </div>
            <nav id="nav1">
                <ul id="main-menu1">
                    <li><a href="../layout.php?page=gioithieu">Giới Thiệu</a></li>
                    <li><a href="../layout.php?page=sanpham">Sản Phẩm</a></li>
                    <li><a href="../layout.php?page=lienhe">Liên Hệ</a></li>
                    <li>
                        <!-- <div class="headerbot_right">
                            <?php
                            if (isset($_SESSION['username']) && $_SESSION['username']) {
                                echo ' <a href="quanly.php"> Quản lý </a>';
                            } else {
                            ?>
                                <a href="../layout.php?page=blog">Blog</a>
                            <?php
                            }
                            ?>
                        </div> -->
                        <div class="headerbot_right">
                            <a href="../layout.php?page=blog">Blog</a>
                        </div>
                    </li>
                    <li>
                        <!-- <a href=""> -->
                        <div id="user">
                            <div><img src="../img/login.png" width="30px" height="30px" alt=""></div>
                           
                            <div id="infor">
                            <a id="giohang__text" href="/indexx.html"> Đăng nhập</a>
                            </div>
                        </div>
                        <!-- </a> -->
                    </li>
                    <li>
                        <a href="../layout.php?page=viewcart">
                            <div id="user">
                                <img src="../img/giohang.png" width="30px" height="30px" alt="">
                                <div class="giohang__text">Giỏ hàng</div>
                            </div>

                        </a>
                    </li>
                </ul>
            </nav>
            <nav id="nav2">
                <ul id="main-menu1">
                    <li><a href="../layout.php?page=gioithieu">Giới Thiệu</a></li>
                    <li><a href="../layout.php?page=sanpham">Sản Phẩm</a></li>
                    <li><a href="../layout.php?page=lienhe">Liên Hệ</a></li>
                    <li>
                        <!-- <div class="headerbot_right">
                            <?php
                            if (isset($_SESSION['username']) && $_SESSION['username']) {
                                echo ' <a href="quanly.php"> Quản lý </a>';
                            } else {
                            ?>
                                <a href="../layout.php?page=blog">Blog</a>
                            <?php
                            }
                            ?>
                        </div> -->
                        <div class="headerbot_right">
                            <a href="../layout.php?page=blog">Blog</a>
                        </div>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>