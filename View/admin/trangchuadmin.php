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
        <a href="../../index3.html" class="nav-link">Home</a>
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
                if($_SESSION['role']==3){
                  include('vadmin.php');
                }}
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
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./quanlythongtinnguoidung.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý thông tin người dùng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./quanlynhanvien.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý thông tin nhân viên</p>
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
              Khác
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">1</span>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="./thongkeadmin.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thống kê</p>
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
              Duyệt bài
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./duyetbainongsan.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Duyệt bài đăng nông sản</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./duyettinnhucau.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Duyệt bài đăng nhu cầu</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- Duyệt bài đăng -->
      </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thông tin cá nhân của admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Duyệt bài nông sản</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">


            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Mã bài</th>
                      <th>Tên bài</th>
                      <th>Ngàytaọ</th>
                      <th>Nội dung</th>
                      <th>Tác vụ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>Phiếu 001</td>
                      <td>15/9/2022</td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>
                   
                      <td>
                        <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a>  |
                        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                      </td>
                   
                   
                    </tr>

                   

                    <tr>
                        <td>183</td>
                        <td>Phiếu 001</td>
                        <td>15/9/2022</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>
                     
                        <td>
                            <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a>  |
                            <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                          </td>
                    
                    
                    </tr>

                      <tr>
                        <td>183</td>
                        <td>Phiếu 001</td>
                        <td>15/9/2022</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>
                     
                    
                        <td>
                            <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a>  |
                            <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                          </td>
                    
                    </tr>

                      <tr>
                        <td>183</td>
                        <td>Phiếu 001</td>
                        <td>15/9/2022</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>
                     
                    
                        <td>
                            <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a>  |
                            <a href="#"><i class="fa fa-times " aria-hidden="true"></i></a>
                          </td>
                    
                    </tr>
                  </tbody>
                </table>
              </div>

               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Chi tiết bài</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="purchase1">Tên bài đăng</label>
                            <input type="text" class="form-control" id="purchase1" disabled value="Bán nông sản" >
                          </div>
                          <div class="form-group col-md-6">
                            <label for="purchase12">Tên - loại nông sản</label>
                            <input type="text" class="form-control" id="purchase12" disabled value="Trái cây" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="purchase3">Nôi dung đăng</label>
                          <input type="text" class="form-control" id="purchase3" disabled value="Cần thanh lý 9 tấn thanh long..." >
                        </div>
                        <div class="form-group">
                          <label for="purchase4">Ngày giờ đăng</label>
                          <input type="text" class="form-control" id="purchase4" disabled value="15/9/2022" >
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Duyệt bài</button>
                    </div>
                  </div>
                </div>
              </div>

          <!-- Modal -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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