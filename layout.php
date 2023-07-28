<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnamFood</title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <link rel="shortcut icon" href="../img/logoannam.png" type="image/x-icon">
    <link rel="stylesheet" href="../cssannam/menu.css">
    <link rel="stylesheet" href="../cssannam/footer.css">
    <link rel="stylesheet" href="../cssannam/gioithieu.css">
    <link rel="stylesheet" href="../cssannam/lienhe.css">
    <link rel="stylesheet" href="../cssannam/blog.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../cssannam/sanpham.css">
    <link rel="stylesheet" href="../cssannam/giohang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
</head>
<script>
    $(document).ready(function(){
        $('#toggle').click(function(){
           $('#nav2').slideToggle();
        })
    })
</script>
<body>
    <?php
    include('menu.php');
    ?>

    <?php
    if (isset($_GET['page']) != null) {
        $page = $_GET['page'];
        switch ($page) {
            // case 'trangchu':
            //     include('trangchu.php');
            //     break;
            case 'gioithieu':
                include('gioithieu.php');
                break;
            case 'sanpham':
                include('sanpham.php');
                
                break;
            case 'lienhe':
                include('lienhe.php');
                break;
            case 'blog':
                include('blog.php');
                break;
                case 'blognuoccotpho':
                    include('blognuoccotpho.php');
                    break;
                    case 'blogphokho':
                        include('blogphokho.php');
                        break;
                        case 'blogmuoivung':
                            include('blogmuoivung.php');
                            break;
                            case 'themdonhang':
                                include('themdonhang.php');
                                break;
            case 'login':
                include('login.php');
                break;
                case 'nuoccotpho':
                    include('nuoccotpho.php');
                    break;
                    case 'addcart':
                        include('addcart.php');
                        break;
                        case 'viewcart':
                            include('viewcart.php');
                            break;
            default:
                break;
        }
    }
    ?>


    <?php
    include('footer.php');
    ?>
</body>

</html>