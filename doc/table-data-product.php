
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
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
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
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">

                <a class="btn btn-add btn-sm" href="../doc/quanly.php?page=form-add-san-pham" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo mới sản phẩm</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i class="fas fa-file-upload"></i> Tải từ file</a>
              </div>

              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i class="fas fa-copy"></i> Sao chép</a>
              </div>

              <div class="col-sm-2">
                <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Xuất PDF</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
              </div>
            </div>
            <form action="../doc/quanly.php?page=timkiemsp" method="POST">
                <input type="text" name="tukhoa" placeholder="Tìm kiếm đơn hàng...">
                <input type="submit" name="timkiem" value="Tìm Kiếm">
            </form>
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>ID</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá sản phẩm </th>
                  <th>Ngày nhập</th>
                  <th>Số lượng kho</th>
                  <th>Ảnh sản phẩm</th>
                  <th>Ảnh sản phẩm1</th>
                  <th>Thông tin chi tết</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <?php
              require_once "db.php";
              $sql = "SELECT * FROM daychuyen";
              $result = mysqli_query($conn, $sql);
              // in danh sách dữ liệuTrình 
              while ($row = mysqli_fetch_assoc($result)) {
                $idSP = $row["idSP"];
                $tenSp = $row["tenSP"];
                $giaSp = $row["giaSP"];
                $ngaynhap = $row["ngaynhap"];
                $soluongtrongkho = $row["soluongtrongkho"];
                $anh = $row["anh"];
                $anh1 = $row["anh1"];
                $mota = $row["mota"];

                // include('./update_product.php');
              ?>
                <tbody>

                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td><?php echo $idSP ?></td>
                    <td><?php echo $tenSp ?></td>
                    <td><?php echo $giaSp ?></td>
                    <td><?php echo $ngaynhap ?></td>
                    <td><?php echo $soluongtrongkho ?></td>
                    <div class="modal fade" id="ModalUP<?php echo $idSP; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-body">

                            <form action="update_product.php" method="POST" role="form" enctype="multipart/form-data">
                              <div class="row">
                                <div class="form-group  col-md-12">
                                  <span class="thong-tin-thanh-toan">
                                    <h5>Chỉnh sửa thông tin sản phẩm cơ bản</h5>
                                  </span>
                                </div>
                              </div>
                              <div class="row">
                                <input type="text" name="input_id" class="form-control" value="<?php echo ($idSP) ?>" id="" style="display: none;">
                                <div class="form-group col-md-6">
                                  <label for="">Tên sản phẩm</label>
                                  <input type="text" name="txtTensp" class="form-control" value="<?php echo ($tenSp) ?>" id="" placeholder="Nhập tên sản phẩm">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="">Giá sản phẩm</label>
                                  <input type="text" name="txtGiasp" class="form-control" value="<?php echo ($giaSp) ?>" id="" placeholder="Nhập giá sản phẩm">
                                </div>
                                <div class="form-group  col-md-6">
                                  <label for="">Ngày nhập</label>
                                  <input class="form-control" name="datedepart" type="date" value="<?php echo date('Y-m-d', strtotime("$ngaynhap")) ?>" />
                                </div>
                                <div class="form-group col-md-6 ">
                                  <label for="">Số lượng </label>
                                  <input type="text" name="txtSoluongkho" class="form-control" value="<?php echo ($soluongtrongkho) ?>" id="" placeholder="Nhập số lượng sản phẩm">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="">Ảnh</label>
                                  <input type="file" name="txtpic" class="form-control" id="" placeholder="Chọn ảnh sản phẩm">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="">Ảnh1</label>
                                  <input type="file" name="txtpic1" class="form-control" id="" placeholder="Chọn ảnh sản phẩm">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="">Mô tả </label>
                                  <input type="text" name="txtMoTa" class="form-control" value="<?php echo ($mota) ?>" id="" placeholder="Chi tiết sản phẩm">
                                </div>
                              </div>
                              <BR>
                              <a href="#" style="    float: right;
    font-weight: 600;
    color: #ea0000;">Chỉnh sửa sản phẩm nâng cao</a>
                              <BR>
                              <BR>
                              <input type="submit" class="btn btn-primary" value="Lưu" id="btnGhi" name="btnGhi">
                              
                              <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                              <BR>

                            </form>
                          </div>

                          <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                    </div>
                    <td> <img width="150px" height="150px" src=" <?php echo $anh ?> "></td>
                    <td> <img width="150px" height="150px" src=" <?php echo $anh1 ?> "></td>
                    <td width="500px"><?php echo $mota ?></td>
                    <td width="100px">
                    <a class="btn btn-primary btn-sm trash" onclick="return Del('<?php echo $row['tenSP'] ?>')" href="xoasp.php?idSP=<?php echo $row["idSP"]; ?>"><i class="fas fa-trash-alt"></i></a>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP<?php echo $idSP; ?>" data-id="<?php echo $idSP; ?>">
                        <i class="fas fa-edit"></i>
                      </button>
                      
                    </td>
                  </tr>
                <?php
              }
                ?>
                <?php
                mysqli_close($conn); ?>
                </tbody>
            </table>
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
  <script type="text/javascript">
    $('#sampleTable').DataTable();
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
  </script>
  <script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function() {
      jQuery(".trash").click(function() {
        swal({
            title: "Cảnh báo",
            text: "Bạn có chắc chắn là muốn xóa sản phẩm này?",
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
    $('#all').click(function(e) {
      $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
      e.stopImmediatePropagation();
    });
  </script>
  <Script>
        function Del(name) {
            return confirm(" Bạn có chắc chắn muốn xóa sản phẩm:" + name + " ?");
        }
    </Script>
</body>

</html>