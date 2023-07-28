
 
       
            <div id="wapper">
                <div id="header1">
                    <nav class="container1">
                        <a href="../trangchu.php" id="logo_quanly">
                            <img  src="../img/logoannam.png" width="180px" height="140px" alt="">
                        </a>
                        <div class="infor__login">
                            
                        <?php 
                            if (isset($_SESSION['username']) && $_SESSION['username']){
                                echo ''.$_SESSION['username']."<br/>";
                                
                                ?>
                                
                                 <?php
                                 
                            }
                            ?>
                           </div>
                        <ul id="main-menu">
                            <li>
                                <a  href="../quanly.php?page=quanlynhanvien">Quản lý nhân viên</a>
                                
                            </li>
                            <li><a  href="../quanly.php?page=banganh">Quản lý ảnh Annam</a>
                               
                            </li>
                            <li><a  href="../quanly.php?page=bangsp">Quản lý sản phẩm </a>
                                
                            </li>
                            <li><a  href="../quanly.php?page=bangdonhang">Quản lý đơn hàng</a>
                                
                            </li>
                           
                        </ul>   
                    </nav>
                </div>
            </div>
        
      

