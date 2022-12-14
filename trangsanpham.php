<?php
  //  session_start();
?>
<?php
require 'google_login/db_connection.php';
if(isset($_SESSION['login_id'])){
  $id = $_SESSION['login_id'];
  $get_user = mysqli_query($db_connection, "SELECT * FROM `khachhang` WHERE `google_id`='$id'");
  if(mysqli_num_rows($get_user) > 0){
      $user = mysqli_fetch_assoc($get_user);
  }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang chủ</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="./dist/css_index/style.css">
  <link rel="stylesheet" href="./dist/css_index/reponsive.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <button type="button" class="btn btn-success btn-floating btn-lg backtop blocked-btn" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>	
          <!-- Navbar -->
          <?php
            //echo $_SESSION["login_id"];
          ?>
            <div class="container-fluid px-md-5">
              <div class="row justify-content-between">
                <div class="col-md-8 order-md-last">
                  <div class="row">
                    <div class="col-md-8 text-center">
                      <form class="form-inline  my-lg-0" style="min-height: 100px">
                        <input class="input-search mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background-color:#fff ;margin:0 8px 0 0;padding:6px 12px">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                    <div class="col-md-4 d-md-flex justify-content-end mb-md-0 mb-3"  style="min-height: 100px;max-height: 200px;">
                          
                            <?php
                              if((isset($_SESSION["login_id"])&& $_SESSION["login_id"]==True)){
                                echo '<ul class="navbar__list" >';
                                    echo '<li class="navbar__item navbar__user">';
                                      echo "<img src='".$user['hinh']."'  class='navbar__user-img' width='30'>";
                                      echo '<span class="navbar__user-name">'.$user['tenkhachhang'].'</span>';
                                      echo '<ul class="navbar__user-menu">';
                                          echo '<li class="navbar__user-item">';
                                              echo '<a href="#">Tài khoản</a>';
                                          echo '</li>';
                                          echo '<li class="navbar__user-item">';
                                              echo '<a href="#">Địa chỉ của tôi</a>';
                                          echo '</li>';
                                          echo '<li class="navbar__user-item">';
                                              echo '<a href="#">Đơn mua</a>';
                                          echo '</li>';
                                          echo '<li class="navbar__user-item navbar__user-item-sepharator">';
                                          echo '<a href="View/login_logout/vdangxuat.php">Đăng xuất</a>';
                                          echo '</li>';
                                        echo '</ul>';
                                    echo '</li>';
                                  echo '</ul>';
                              }elseif((isset($_SESSION["dn"])&& $_SESSION["dn"]==True)){
                                if($_SESSION['role']==1){
                                  include('View/anhacungcapnongsan/vdnnhacungcap.php');
                                  echo '<ul class="navbar__list" >';
                                    echo '<li class="navbar__item navbar__user">';
                                      echo "<img src='img/".$_SESSION['hinh']."'  class='navbar__user-img' width='30'>";
                                      echo '<span class="navbar__user-name">'.$_SESSION["tenncc"].'</span>';
                                      echo '<ul class="navbar__user-menu">';
                                          echo '<li class="navbar__user-item">';
                                              echo '<a href="#">Tài khoản</a>';
                                          echo '</li>';
                                          echo '<li class="navbar__user-item">';
                                              echo '<a href="#">Địa chỉ của tôi</a>';
                                          echo '</li>';
                                          echo '<li class="navbar__user-item">';
                                              echo '<a href="#">Đơn mua</a>';
                                          echo '</li>';
                                          echo '<li class="navbar__user-item navbar__user-item-sepharator">';
                                              echo '<a href="View/login_logout/vdangxuat.php">Đăng xuất</a>';
                                          echo '</li>';
                                        echo '</ul>';
                                    echo '</li>';
                                  echo '</ul>';
                                
                                }elseif($_SESSION['role']==2){
                                  include('View/adoanhnghiep/vdndoanhnghiep.php');
                                  echo '<ul class="navbar__list" >';
                                    echo '<li class="navbar__item navbar__user">';
                                      echo "<img src='img/".$_SESSION['tendoanhnghiep']."'  class='navbar__user-img' width='30'>";
                                      echo '<span class="navbar__user-name">'.$_SESSION['tendoanhnghiep'].'</span>';
                                      echo '<ul class="navbar__user-menu">';
                                          echo '<li class="navbar__user-item">';
                                              echo '<a href="#">Tài khoản</a>';
                                          echo '</li>';
                                          echo '<li class="navbar__user-item">';
                                              echo '<a href="#">Địa chỉ của tôi</a>';
                                          echo '</li>';
                                          echo '<li class="navbar__user-item">';
                                              echo '<a href="#">Đơn mua</a>';
                                          echo '</li>';
                                          echo '<li class="navbar__user-item navbar__user-item-sepharator">';
                                          echo '<a href="View/login_logout/vdangxuat.php">Đăng xuất</a>';
                                          echo '</li>';
                                        echo '</ul>';
                                    echo '</li>';
                                  echo '</ul>';
                                  }elseif($_SESSION['role']==3){
                                    //include('View/adoanhnghiep/vdndoanhnghiep.php');
                                    echo '<ul class="navbar__list" >';
                                      echo '<li class="navbar__item navbar__user">';
                                        echo "<img src='img/".$_SESSION['hinh']."'  class='navbar__user-img' width='30'>";
                                        echo '<span class="navbar__user-name">'.$_SESSION['tenadmin'].'</span>';
                                        echo '<ul class="navbar__user-menu">';
                                            echo '<li class="navbar__user-item">';
                                                echo '<a href="#">Tài khoản</a>';
                                            echo '</li>';
                                            echo '<li class="navbar__user-item">';
                                                echo '<a href="#">Địa chỉ của tôi</a>';
                                            echo '</li>';
                                            echo '<li class="navbar__user-item">';
                                                echo '<a href="#">Đơn mua</a>';
                                            echo '</li>';
                                            echo '<li class="navbar__user-item navbar__user-item-sepharator">';
                                            echo '<a href="View/login_logout/vdangxuat.php">Đăng xuất</a>'; 
                                            echo '</li>';
                                          echo '</ul>';
                                      echo '</li>';
                                    echo '</ul>';
                                  }elseif($_SESSION['role']==5){
                                    include('View/akhachhang/vdnkhachhang.php');
                                    echo '<ul class="navbar__list" >';
                                      echo '<li class="navbar__item navbar__user">';
                                        echo "<img src='img/".$_SESSION['hinh']."'  class='navbar__user-img' width='30'>";
                                        echo '<span class="navbar__user-name">'.$_SESSION['tenkhachhang'].'</span>';
                                        echo '<ul class="navbar__user-menu">';
                                            echo '<li class="navbar__user-item">';
                                                echo '<a href="#">Tài khoản</a>';
                                            echo '</li>';
                                            echo '<li class="navbar__user-item">';
                                                echo '<a href="#">Địa chỉ của tôi</a>';
                                            echo '</li>';
                                            echo '<li class="navbar__user-item">';
                                                echo '<a href="#">Giỏ hàng</a>';
                                            echo '</li>';
                                            echo '<li class="navbar__user-item navbar__user-item-sepharator">';
                                                echo '<a href="View/login_logout/vdangxuat.php">Đăng xuất</a>';
                                            echo '</li>';
                                          echo '</ul>';
                                      echo '</li>';
                                    echo '</ul>';
                                  }
                                else{
                                   echo $user['tenkhachhang'];
                                }
                          
                              }else{
                                echo '<ul class="login-list" >';
                                //echo $user['tenkhachhang'];
                                echo '<li class="login-list-item">
                                  <a class="login-list-text" href="View/login_logout/register.php">Đăng ký |</a>
                                  <a class="login-list-text" href="View/login_logout/login.php">Đăng nhập</a>
                                  </li>';
                                echo '</lu>';
                              }
                              ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 d-flex">
                  <div class="social-media">
                    <p class="mb-0 d-flex">
                      <img class="d-flex align-items-center justify-content-center" src="https://vcdn.tikicdn.com/ts/seller/66/44/79/bec621134f5b9cc6f7a9571567f423ac.png" alt="" style="height:100px ;">
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-navbar">
              <nav class=" navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                <div class="container-fluid container-nav">
                
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                  </button>
                  <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                      <li class="nav-item active"><a href="index.php" class="nav-link">Trang chủ</a></li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nông sản</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                          <a class="dropdown-item" href="#">Trái cây</a>
                          <a class="dropdown-item" href="#">Rau củ</a>
                          <a class="dropdown-item" href="#">Khác</a>
                        </div>
                      </li>
                      <li class="nav-item"><a href="#" class="nav-link">Giới thiệu</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Tin tức</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Liên hệ</a></li>
                      <?php
                        if(isset($_SESSION["dn"])&& $_SESSION["dn"]==True){
                          echo '<li class="nav-item"><a href="View/anhacungcapnongsan/trangquanly.php" class="nav-link">Quản lý</a></li>';
                        }
                      ?>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            <!-- END nav -->
<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> 
      <div class="carousel-item active">
        <img  class="d-block img-size w-100" src="https://growmax.weba.vn/shop/images/growmax/slider/2a2ee41f9a9230e599a60ec5d8fdac37.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img  class="d-block img-size w-100" src="https://growmax.weba.vn/shop/images/growmax/slider/banner-traicay.jpg" alt="Third slide">
      </div> 
      <div class="carousel-item">
        <img  class="d-block img-size w-100" src="https://growmax.weba.vn/shop/images/growmax/slider/banner1.jpg" alt="Second slide">
      </div>
     
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Lùi</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Tới</span>
    </a>
  </div>

  

  <!-- Slider -->



  <!-- Start Introduce -->
  <!-- Start Introduce -->



  <!-- End Introduce -->


  <!-- Phân trang start-->

  <!-- Phân trang end -->

<!-- List item -->
<?php
  if(isset($_REQUEST["chitietnongsan"])){
    include("View/sanpham/vchitietsanpham.php");
  }elseif(isset($_REQUEST["thanhtoan"])){
    include("View/sanpham/vthanhtoan.php");
  }else{
  //include("vquanlythongtinnhanvien.php");
}

?>
<!-- List item -->


<!-- Start List Imagae -->





 
<!-- List Posts  -->



        



</div>
<!-- List Posts  -->

 <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Kết nối với chúng tôi trên các mạng xã hội:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset" style="margin:0 8px">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset" style="margin:0 8px">

          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset" style="margin:0 8px">
            <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4   text-reset" style="margin:0 8px">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset" style="margin:0 8px">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset" style="margin:0 8px">
            <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="" style="background-color:#82ae46;color: #fff">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3" >
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="padding-top:30px">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
                Weba.vn
            </h6>
            <p>
                Chúng Tôi Tin Chất Lượng Là Dịch Vụ Tốt Nhất.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="padding-top:30px">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              GIỚI THIỆU
            </h6>
            <p>
              <a href="#!" class="text-reset">Hỗ trợ khách hàng</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Điều khoản & dịch vụ</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Hướng dẫn thanh toán</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="padding-top:30px">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
             HỖ TRỢ KHÁCH HÀNG
            </h6>
            <p>
              <a href="#!" class="text-reset">Trang chủ</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Giỏ hàng</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Thanh toán</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Liên hệ</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="padding-top:30px">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">THÔNG TIN CÔNG TY</h6>
            <p>Công Ty TNHH Phân Phối Nông Sản Việt</p>
            <p>
                <i class="fa fa-map-marker"></i>
              Số 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp, Hồ Chí Minh 
            </p>
            <p><i class="fas fa-phone me-3"></i> 02866860863 </p>
            <p><i class="fa fa-envelope"></i>dhcn@gmail.com</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        Thiết Kế Web & Marketing Bởi Partner Google:<a class="text-reset fw-bold" href="https://mdbootstrap.com/"> https://vnaz.vn</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->



  

<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="View/adoanhnghiep/script.js"></script>
</body>
</html>
