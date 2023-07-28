<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách đơn hàng | Quản trị Admin</title>
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

<body onload="time()" class="app sidebar-mini rtl">
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
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="form-add-don-hang.html" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới đơn hàng</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                      class="fas fa-file-upload"></i> Tải từ file</a>
                </div>
  
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                      class="fas fa-print"></i> In dữ liệu</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                      class="fas fa-copy"></i> Sao chép</a>
                </div>
  
                <div class="col-sm-2">
                  <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                      class="fas fa-file-pdf"></i> Xuất PDF</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                      class="fas fa-trash-alt"></i> Xóa tất cả </a>
                </div>
              </div>
              <form action="" method="POST">
                            <input type="text" name="tukhoa" placeholder="Tìm kiếm đơn hàng...">
                            <input type="submit" name="timkiem" value="Tìm Kiếm">
                            <input class="form-control" name="datedepart" type="date" value="<?php echo date('Y-m-d', strtotime("$ngaytaoDH")) ?>" />
                <input type="submit" name="timkiemngaytaodon" value="Tìm Kiếm">
               </form>

              <?php

                        if (isset($_POST["timkiem"])) {
                            $s = $_POST["tukhoa"];

                            if ($s == "") {
                                require_once "db.php";
                                $sql = "SELECT * FROM daychuyen";
                                $result = mysqli_query($conn, $sql);
                                // in danh sách dữ liệuTrình 
                                ?>
                                    <table class="table table-hover table-bordered" id="sampleTable">
                                        <thead>
                                            <tr>
                                                <th width="10"><input type="checkbox" id="all"></th>
                                                <th>Khách hàng</th>
                                                <th>Số điện thoại</th>
                                                <th>Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Ngày mua</th>
                                                <th>Số lượng</th>
                                                <th>Tổng tiền</th>
                                                <th>Tính năng</th>
                                            </tr>
                                        </thead>
                                        <?php
                                 require_once "db.php";
                                 $sql = "SELECT donhang.idDH, donhang.tenKH, donhang.sdt, donhang.email, donhang.diachi, donhang.ngaytaoDH, donhang.tongtien, chitietdonhang.soluong
                                 FROM donhang
                                 INNER JOIN chitietdonhang ON donhang.idDH = chitietdonhang.idDH";
                                 $result = mysqli_query($conn, $sql);
                                 // in danh sách dữ liệuTrình 
                                 while ($row = mysqli_fetch_assoc($result)) {
                                  $idDH = $row["idDH"];
                                  $tenKH = $row["tenKH"];
                                  $sdt = $row["sdt"];
                                  $email = $row["email"];
                                  $diachi = $row["diachi"];
                                  $ngaytaoDH = $row["ngaytaoDH"];
                                  $soluong = $row["soluong"];
                                  $tongtien = $row["tongtien"];
                                  
                                ?>
                                
                                <tbody>
                                <tr>
                                    <td ><?php echo $idDH ?></td>
                                    <td ><?php echo $tenKH ?></td>
                                    <td ><?php echo $sdt ?></td>
                                    <td ><?php echo $email ?></td>
                                    <td ><?php echo $diachi ?></td>
                                    <td ><?php echo $ngaytaoDH ?></td>
                                    <td ><?php echo $soluong ?></td>
                                    <td ><?php echo $tongtien ?></td>
                                        <td><a class="btn btn-primary btn-sm trash" onclick="return Del('<?php echo $row['tenKH'] ?>')" href="xoadonhang.php?idDH=<?php echo $row["idDH"]; ?>"><i class="fas fa-trash-alt"></i></a>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                                </tr>
                <?php
                    }
                ?>
                <?php
                            } else {
                                require_once "db.php";
                                $sql = "SELECT donhang.idDH, donhang.tenKH, donhang.sdt, donhang.email, donhang.diachi, donhang.ngaytaoDH, donhang.tongtien, chitietdonhang.soluong
                                FROM donhang
                                INNER JOIN chitietdonhang ON donhang.idDH = chitietdonhang.idDH where sdt  like '$s' or tenKH like '%" . $s . "'"; //"SELECT * FROM donhang where sdt  like '%".$s."' ";
                                $qr = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($qr);
                                if ($count <= 0) {
                                    echo "khong tim thay tu khoa " . $s;
                                } else {
                                    echo "tim thay "  . $count . " ket qua voi tu khoa " . $s;
                        ?>
                                    <table class="table table-hover table-bordered" id="sampleTable">
                                        <thead>
                                            <tr>
                                                <th width="10"><input type="checkbox" id="all"></th>
                                                <th>Khách hàng</th>
                                                <th>Số điện thoại</th>
                                                <th>Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Ngày mua</th>
                                                <th>Số lượng</th>
                                                <th>Tổng tiền</th>
                                                <th>Tính năng</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($qr)) {
                                          $idDH = $row["idDH"];
                                          $tenKH = $row["tenKH"];
                                          $sdt = $row["sdt"];
                                          $email = $row["email"];
                                          $diachi = $row["diachi"];
                                          $ngaytaoDH = $row["ngaytaoDH"];
                                          $soluong = $row["soluong"];
                                          $tongtien = $row["tongtien"];
                                        ?>
                                            <tbody>
                                            <tr>
                                                <td ><?php echo $idDH ?></td>
                                                <td ><?php echo $tenKH ?></td>
                                                <td ><?php echo $sdt ?></td>
                                                <td ><?php echo $email ?></td>
                                                <td ><?php echo $diachi ?></td>
                                                <td ><?php echo $ngaytaoDH ?></td>
                                                <td ><?php echo $soluong ?></td>
                                                <td ><?php echo $tongtien ?></td>
                                                    <td><a class="btn btn-primary btn-sm trash" onclick="return Del('<?php echo $row['tenKH'] ?>')" href="xoadonhang.php?idDH=<?php echo $row["idDH"]; ?>"><i class="fas fa-trash-alt"></i></a>
                                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                                            </tr>
                                            <?php
                                        }
                                            ?>
                                            <?php
                                            mysqli_close($conn); ?>
                                            </tbody>
                                    </table>
                        <?php
                                }
                            }
                        }
                        if (isset($_POST["timkiemngaytaodon"])) {
                          $s = $_POST["datedepart"];
              
                          if ($s == "") {
                              echo "vui long nhap vao thanh tim kiem";
                          } else {
                              require_once "db.php";
                              $sql = "SELECT donhang.idDH, donhang.tenKH, donhang.sdt, donhang.email, donhang.diachi, donhang.ngaytaoDH, donhang.tongtien, chitietdonhang.soluong
                              FROM donhang
                              INNER JOIN chitietdonhang ON donhang.idDH = chitietdonhang.idDH where date(ngaytaoDH)  like'$s'"; //"SELECT * FROM donhang where sdt  like '%".$s."' ";
                              $qr = mysqli_query($conn, $sql);
                              $count = mysqli_num_rows($qr);
                              if ($count <= 0) {
                                  echo "khong tim thay tu khoa " . $s;
                              } else {
                                  echo "tim thay "  . $count . " ket qua voi tu khoa " . $s;
                        ?>
                        </div>
    <table align="center">
        <tr>
        <th width="10"><input type="checkbox" id="all"></th>
        <th>Khách hàng</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Ngày mua</th>
        <th>Số lượng</th>
        <th>Tổng tiền</th>
        <th>Tính năng</th>
        </tr>
        <?php
                    while ($row = mysqli_fetch_assoc($qr)) {
                      $idDH = $row["idDH"];
                      $tenKH = $row["tenKH"];
                      $sdt = $row["sdt"];
                      $email = $row["email"];
                      $diachi = $row["diachi"];
                      $ngaytaoDH = $row["ngaytaoDH"];
                      $soluong = $row["soluong"];
                      $tongtien = $row["tongtien"];
        ?>
            <tr>
                <td class="hang2" align="center"><?php echo $idDH ?></td>
                <td class="hang1" align="center"><?php echo $tenKH ?></td>
                <td class="hang1" align="center"><?php echo $sdt ?></td>
                <td class="hang1" align="center"><?php echo $email ?></td>
                <td class="hang1" align="center"><?php echo $diachi ?></td>
                <td class="hang1" align="center"><?php echo $ngaytaoDH ?></td>
                <td ><?php echo $soluong ?></td>
                <td class="hang1" align="center"><?php echo $tongtien ?></td>
                <td class="hang1" align="center">
                    <?php
                        // echo "<a href='suadaychuyen.php?idSP=".$row["idSP"]."'>Edit</a>";
                    ?>
                    <a class="btn btn-primary btn-sm edit" href="../quanly.php?page=suadonhang&idDH=<?php echo $row["idDH"]; ?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-primary btn-sm trash" onclick="return Del('<?php echo $row['tenKH'] ?>')" href="xoadonhang.php?idDH=<?php echo $row["idDH"]; ?>"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php
                }
            }
        }
?>
            </div>
          </div>
        </div>
      </div>
    </main>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="src/jquery.table2excel.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <!-- Data table plugin-->
  <!-- <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script> -->
  <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
  <script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function () {
      jQuery(".trash").click(function () {
        swal({
          title: "Cảnh báo",
         
          text: "Bạn có chắc chắn là muốn xóa đơn hàng này?",
          buttons: ["Hủy bỏ", "Đồng ý"],
        })
          .then((willDelete) => {
            if (willDelete) {
              swal("Đã xóa thành công.!", {
                
              });
            }
          });
      });
    });
    oTable = $('#sampleTable').dataTable();
    $('#all').click(function (e) {
      $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
      e.stopImmediatePropagation();
    });

    //EXCEL
    // $(document).ready(function () {
    //   $('#').DataTable({

    //     dom: 'Bfrtip',
    //     "buttons": [
    //       'excel'
    //     ]
    //   });
    // });


    //Thời Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
    //In dữ liệu
    var myApp = new function () {
      this.printTable = function () {
        var tab = document.getElementById('sampleTable');
        var win = window.open('', '', 'height=700,width=700');
        win.document.write(tab.outerHTML);
        win.document.close();
        win.print();
      }
    }
    //     //Sao chép dữ liệu
    //     var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

    // copyTextareaBtn.addEventListener('click', function(event) {
    //   var copyTextarea = document.querySelector('.js-copytextarea');
    //   copyTextarea.focus();
    //   copyTextarea.select();

    //   try {
    //     var successful = document.execCommand('copy');
    //     var msg = successful ? 'successful' : 'unsuccessful';
    //     console.log('Copying text command was ' + msg);
    //   } catch (err) {
    //     console.log('Oops, unable to copy');
    //   }
    // });


    //Modal
    $("#show-emp").on("click", function () {
      $("#ModalUP").modal({ backdrop: false, keyboard: false })
    });
  </script>
     <Script>
        function Del(name) {
            return confirm(" Bạn có chắc chắn muốn xóa sản phẩm:" + name + " ?");
        }
    </Script>
</body>

</html>