<!DOCTYPE html>
<html lang="en">

<head>
  <title>Thêm sản phẩm | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
  <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
  <script>

    function readURL(input, thumbimage) {
      if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#thumbimage").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
      else { // Sử dụng cho IE
        $("#thumbimage").attr('src', input.value);

      }
      $("#thumbimage").show();
      $('.filename').text($("#uploadfile").val());
      $('.Choicefile').css('background', '#14142B');
      $('.Choicefile').css('cursor', 'default');
      $(".removeimg").show();
      $(".Choicefile").unbind('click');

    }
    $(document).ready(function () {
      $(".Choicefile").bind('click', function () {
        $("#uploadfile").click();

      });
      $(".removeimg").click(function () {
        $("#thumbimage").attr('src', '').hide();
        $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
        $(".removeimg").hide();
        $(".Choicefile").bind('click', function () {
          $("#uploadfile").click();
        });
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'pointer');
        $(".filename").text("");
      });
    })
  </script>
</head>

<body class="app sidebar-mini rtl">
  <style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
  </style>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/indexx.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><a style="color: white;" href="../trangchu.php"><img class="app-sidebar__user-avatar" src="/images/logoannam.png" width="50px"
        alt="User Image"></a>
      <div>
        <p class="app-sidebar__user-name"><b>AnnamFood</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item haha" href="phan-mem-ban-hang.php"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">POS Bán Hàng</span></a></li>
      <li><a class="app-menu__item active" href="../doc/quanly.php?page=index"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="../doc/quanly.php?page=table-data-table"><i class='app-menu__icon bx bx-id-card'></i> <span
            class="app-menu__label">Quản lý nhân viên</span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý khách hàng</span></a></li>
      <li><a class="app-menu__item" href="../doc/quanly.php?page=table-data-product"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
      </li>
      <li><a class="app-menu__item" href="../doc/quanly.php?page=table-data-oder"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li><a class="app-menu__item" href="../doc/quanly.php?page=table-data-banned"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý nội bộ
          </span></a></li>
      <li><a class="app-menu__item" href="../doc/quanly.php?page=table-data-money"><i class='app-menu__icon bx bx-dollar'></i><span
            class="app-menu__label">Bảng kê lương</span></a></li>
      <li><a class="app-menu__item" href="../doc/quanly.php?page=quan-ly-bao-cao"><i
            class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
      </li>
      <li><a class="app-menu__item" href="../doc/quanly.php?page=page-calendar"><i class='app-menu__icon bx bx-calendar-check'></i><span
            class="app-menu__label">Lịch công tác </span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
  </aside>
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
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
                      <a class="btn btn-cancel" href="../doc/quanly.php?page=table-data-product">Hủy bỏ</a>
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
      $target_dir ="../images/";
      $target_file = $target_dir.$anh;
      move_uploaded_file($_FILES["txtpic"]["tmp_name"], $target_file);
      $anh1 =basename($_FILES['txtpic1']['name']) ;
      $target_dir1 ="../images/";
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
      </div>
      
  </main>


 



  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugins/pace.min.js"></script>
</body>

</html>