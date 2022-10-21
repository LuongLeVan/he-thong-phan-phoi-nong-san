<?php
    session_start();
?>
<?php
  if ($_SESSION["dn"]==False) {
      include("../../View/login.php");
  }
?>
 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nông sản Việt / Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="https://vcdn.tikicdn.com/ts/seller/66/44/79/bec621134f5b9cc6f7a9571567f423ac.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Nông sản Việt</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            
          <a href="#" class="d-block">
            <?php
              if (isset($_SESSION["dn"])&& $_SESSION["dn"]==True){
                //echo 1123;
                //echo $_SESSION['role'];
                if($_SESSION['role']==1){
                  include('vnhacungcap.php');
                }
              }
            ?> 
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Quản lí  -->

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Quản lý
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">3</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <?php
                  echo '<a href="trangquanly?capnhatthongtin" class="nav-link">';
              ?>
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý thông tin nhà cung cấp</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./quanlynhanvien.html" class="nav-link">
              <?php
                  echo '<a href="trangquanly?taomaqr" class="nav-link">';
              ?>
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý mã QR</p>
              </a>
            </li>
            <li class="nav-item">
            <?php
                  echo '<a href="trangquanly?nongsan" class="nav-link">';
              ?>
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý thông tin nông sản</p>
              </a>
            </li>

          </ul> 
        </li>


        <!-- Quản lí -->


        <!-- Phân Quyền + Thống kê báo cáo -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Nông sản
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
            <?php
                  echo '<a href="trangquanly?guiyeucauhotro" class="nav-link">';
              ?>
                <i class="far fa-circle nav-icon"></i>
                <p>Yêu cầu hỗ trợ nông sản</p>
              </a>
            </li>
            <li class="nav-item">
            <?php
                  echo '<a href="trangquanly?kiemdinh" class="nav-link">';
              ?>
                <i class="far fa-circle nav-icon"></i>
                <p>Giấy kiểm định nông sản</p>
              </a>
            </li>

          </ul>
        </li>
        <!-- Phân quyền + thống kê báo cáo -->
        <!-- Duyệt Bài đăng   -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Mua bán
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <?php
                  echo '<a href="trangquanly?dangban" class="nav-link">';
              ?>
              
                <i class="far fa-circle nav-icon"></i>
                <p>Dăng bán nông sản</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./duyettinnhucau.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Đơn hàng</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Thống kê
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Thông báo
            </p>
          </a>
        </li>

        <!-- Duyệt bài đăng -->
      </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Chỗ này include nội dung vô -->

           <?php
               if(isset($_REQUEST["nongsan"])){
                include("vquanlythongtinnongsan.php");
               }elseif(isset($_REQUEST["chitietnongsan"])){
                include("vchitietnongsan.php");
               }elseif(isset($_REQUEST["doitrangthai"])){
                include("vcapnhattrangthai.php");
               }elseif(isset($_REQUEST["capnhatthongtin"])){
                include("vcapnhatthongtinnhacungcap.php");
               }elseif(isset($_REQUEST["dangban"])){
                include("vdangbannongsan.php");
               }elseif(isset($_REQUEST["taomaqr"])){
                include("vtaomaqr.php");
               }elseif(isset($_REQUEST["dangbannongsan"])){
                include("vcapnhattrangthainongsan.php");
               }elseif(isset($_REQUEST["guiyeucauhotro"])){
                include("vyeucauhotronongsan.php");
               }elseif(isset($_REQUEST["yeucauhotro"])){
                include("vtaogiaykiemdinh.php");
               }elseif(isset($_REQUEST["kiemdinh"])){
                include("vkiemdinhnongsan.php");
               }elseif(isset($_REQUEST["xemgiaykiemdinh"])){
                include("giaykiemdinhnongsan.php");
               }else{
                include("vquanlythongtinnongsan.php");
               }
               
           ?>
<!-- Chỗ này include nội dung vô -->

  
  <footer class="main-footer">
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>