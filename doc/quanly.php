<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Danh sách nhân viên | Quản trị Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- or -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
</head>

<body>           
            <?php
            include('menuquanly.php');
            ?>        
            <?php
            if (isset($_GET['page']) != null) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'table-data-product':
                        include('table-data-product.php');
                        break;
                    case 'form-add-san-pham':
                        include('form-add-san-pham.php');
                        break;
                    case 'update_product':
                        include('update_product.php.php');
                        break;
                    case 'xoasp':
                        include('xoasp.php');
                        break;
                    case 'timkiemsp':
                        include('timkiemsp.php');
                        break;
                    case 'table-data-table':
                        include('table-data-table.php');
                        break;
                    case 'table-data-oder':
                        include('table-data-oder.php');
                        break;
                        case 'timkiemdh':
                            include('timkiemdh.php');
                            break;
                        case 'xoadonhang':
                            include('xoadonhang.php');
                            break;
                    case 'table-data-money':
                        include('table-data-money.php');
                        break;
                    case 'table-data-banned':
                        include('table-data-banned.php');
                        break;
                    case 'quan-ly-bao-cao':
                        include('quan-ly-bao-cao.php');
                        break;
                    // case 'phan-mem-ban-hang':
                    //     include('phan-mem-ban-hang.php');
                    //     break;
                    case 'page-calendar':
                        include('page-calendar.php');
                        break;
                    case 'index':
                        include('index.php');
                        break;
                    
                    default:
                        break;
                }
            }
            ?>
   
</body>

</html>