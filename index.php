<?php
// Import thư viện data vào
require_once 'View/phantrang/database.php';
 
// Load thư viện phân trang
include_once 'View/phantrang/pagination.php';
 
// Connect DB
connect();
 
// Phân trang
$config = array(
    'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1,
    'total_record'  => count_all_member(), // tổng số thành viên
    'limit'         => 8,
    'link_full'     => 'index.php?page={page}',
    'link_first'    => 'index.php',
    'range'         => 9
);
 
$paging = new Pagination();
$paging->init($config);
 
// Lấy limit, start
$limit = $paging->get_config('limit');
$start = $paging->get_config('start');
 
// Lấy danh sách thành viên
$member = get_all_member($limit, $start);
 
// Kiểm tra nếu là ajax request thì trả kết quả
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    die (json_encode(array(
        'member' => $member,
        'paging' => $paging->html()
    )));
}
 
// Disconnect DB
disconnect();
?>

        
    </body>
</html>
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
  <link rel="stylesheet" href="./dist/css_index/reponsive.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="./dist/css_index/style.css">

  <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
  
<style>
  .card-img, .card-img-top{
    height: 250px}

  .page_li{float:left; margin: 3px;  list-style: none}
  .page_a{padding: 5px;}
  .page_span{display:inline-block; padding: 0px 3px; background: #63ae45; color:white }

  .page_li, .page_a, .page_span{
    position: relative;
    left: 350px;
    bottom: 10px;
  }
  .list-item {
    position: relative;
  }
  .list-layout {
    position: absolute;
    right: 125px;
    left: 125px;
  }
  
  
    
  
</style>

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
                                              echo '<a href="#">Giỏ hàng</a>';
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
                                              echo '<a href="#">Giỏ hàng</a>';
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
                                              echo '<a href="#">Giỏ hàng</a>';
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
                                                echo '<a href="View/admin/trangchuadmin.php">Truy cập trang admin</a>';
                                            echo '</li>';
                                            echo '<li class="navbar__user-item navbar__user-item-sepharator">';
                                                echo '<a href="View/login_logout/vdangxuat.php">Đăng xuất</a>';
                                            echo '</li>';
                                          echo '</ul>';
                                      echo '</li>';
                                    echo '</ul>';
                                  }elseif($_SESSION['role']==4){
                                    include('View/anhanvienkiemdinh/vdnnhanvien.php');
                                    echo '<ul class="navbar__list" >';
                                      echo '<li class="navbar__item navbar__user">';
                                        echo "<img src='img/".$_SESSION['hinh']."'  class='navbar__user-img' width='30'>";
                                        echo '<span class="navbar__user-name">'.$_SESSION['tennhanvien'].'</span>';
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
                      <li class="nav-item active"><a href="#" class="nav-link">Trang chủ</a></li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="trangsanpham.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nông sản</a>
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
                          if($_SESSION['role']==1){
                            echo '<li class="nav-item"><a href="View/anhacungcapnongsan/trangquanly.php" class="nav-link">Quản lý</a></li>';
                          }elseif($_SESSION['role']==2){
                            echo '<li class="nav-item"><a href="View/adoanhnghiep/trangquanly.php" class="nav-link">Quản lý</a></li>';

                          }

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

  <div class="background-circle">
  
  </div>
  <div class="container  card-circle">
    <div class="normal-wrapper">
      
    </div>
    <div class="row container__list">
      <a href="#">
        <div class="col">
          <div class="card card-circle__item" style="background-color: transparent; box-shadow:none;">
            <img class="card-img-top image-circle" src="https://growmax.weba.vn/shop/images/growmax/posts/traicay-ava2.jpg" alt="Card image cap">
            <div class="card-body card-body-circle">
              <h5 class="card-title heading-circle">LỢI ÍCH CỦA THỰC PHẨM SẠCH</h5>
              <p class="card-text">
            </div>
          </div>
        </div>
      </a>

      <a href="#">
        <div class="col">
          <div class="card card-circle__item" style="background-color: transparent; box-shadow:none;">
            <img class="card-img-top image-circle" src="https://growmax.weba.vn/shop/images/growmax/posts/rau-xanh-tot-cho-benh-nhan-viem-phe-quan.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title heading-circle">TRÁI CÂY NHẬP KHẨU 100%</h5>
              <p class="card-text">
            </div>
          </div>
        </div>
      </a>

      <a href="#">
      <div class="col">
        <div class="card card-circle__item" style="background-color: transparent; box-shadow:none;">
          <img class="card-img-top image-circle" src="https://growmax.weba.vn/shop/images/growmax/posts/loi-ich-suc-khoe-tu-nhung-loai-trai-cay-rau-cu-mau-do-10-.7305.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title heading-circle">THỰC PHẨM HỮU CƠ XANH - SẠCH MỖI NGÀY</h5>
            <p class="card-text">
          </div>
        </div>
      </div>
      </a>

      <!-- <a href="#">
        <div class="col">
          <div class="card card-circle__item" style="background-color: transparent; box-shadow:none;">
            <img class="card-img-top image-circle" src="https://growmax.weba.vn/shop/images/growmax/posts/slider-02.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title heading-circle">SALAD NGON MỖI NGÀY</h5>
              <p class="card-text">
                
          Viết vài dòng giới thiệu với khách hàng về cửa hàng của bạn (các loại sản phẩm bạn bán, thương...	</p>
            </div>
          </div>
        </div>
      </a> -->
      
    </div>
  </div>

  <!-- Slider -->



  <!-- Start Introduce -->
  <!-- Start Introduce -->

<div class="container container-introduce">
    <div class="row row-introduce">
      <div class="col introduce__parent">
        <div class="controduce">
          <img class="img-controduce" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/hen-suyen-an-trai-cay-2.png" alt="">
        </div>
      </div>
      <div class="col introduce-text__content">
        <div class="controduce__text">
          <h2 class="controduce-text-heading">SƠ LƯỢC</h2>
          <div class="controduce__content">
           <h3 class="content-text"> <p>Về chúng tôi</p></h3>
           <p>
            Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. 
            Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.
           </p>
           <p>
            Một vài gợi ý cho nội dung trang Giới thiệu:
           </p>
           <div>
            <ul>
              <li>Bạn là ai</li>
              <li>Giá trị kinh doanh của bạn là gì</li>
              <li>Địa chỉ cửa hàng</li>
              <li>Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</li>
              <li>Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</li>
              <li>Đội ngũ của bạn gồm những ai</li>
              <li><span>Thông tin liên hệ</span></li>
              <li>Liên kết đến các trang mạng xã hội (Twitter, Facebook)</li>
            </li>
            </ul>
            <p>Bạn có thể chỉnh sửa hoặc xoá bài viết này tại <strong>đây</strong> hoặc thêm những bài viết mới trong phần quản lý <strong>Trang nội dung</strong></p>
           </div>
          </div>
        </div>
      </div>
    </div>
  

  </div>

  <!-- End Introduce -->


  <!-- Phân trang start-->

  <!-- Phân trang end -->

<!-- List item -->
<div class="list-item">
<div id="content" class="list-layout">
            <div id="list">
              <?php $dem=0; //echo $dem; ?>  
                <table border="0" cellspacing="0" cellpadding="0">
                    <?php foreach ($member as $item){ ?>
                        

                    <!-- <tr>
                        <td>
                           <?php //echo $item['manongsan']; ?>  
                        </td>
                        <td>
                           <?php //echo $item['tennongsan']; ?> 
                        </td>
                        <td>
                           <?php //echo $item['maloai']; ?>  
                        </td>
                        <td>
                           <?php //echo $item['trongluong']; ?>  
                        </td>
                        <td>
                           <?php //echo $item['kichthuoc']; ?>  
                        </td>
                    </tr> -->
                      
                    <?php if($dem == 0){
                        echo "<th>";
                      }
                      ?>
                        <div class="container" style="margin-top:20px">
                          <div class="grid-item">
                          <div class="col product-item ml8">
                            <div class="card card-parent">
                            <?php echo "<img class='card-img-top' src='img/".$item['hinhanh']."'/>"; ?>

                              <!-- <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/upload_b64c243e49b84e4e8fccf12d271cd7c7_1024x1024.jpg" alt="Card image cap"> -->
                              <a href="#">
                                <button class="btn-btn-buy">
                                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                  <span>Thêm vào giỏ hàng</span>
                                   <?php echo '<button class="btn btn-success" >'."<a  style='color:white; text-decoration: none' href='trangsanpham.php?chitietnongsan=".$item["manongsan"]."'>"."Xem chi tiết"."</a>"."</button>"; ?>
                                   <?php echo "<a  style='color:white; text-decoration: none' href='blog/chitietbaiblog.php?chitietnongsan=".$item["manongsan"]."'>"."Xem nguồn gốc"."</a>"; ?>

                                </button>
                              </a>
                              <div class="card-body">
                                <h5 class="item-heading"><?php echo $item['tennongsan']; ?></h5>
                                <span class="item-price"><?php echo $item['gia']; ?> Đ</span>
                                <div class="btn-buying">
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>
                          </div>
                          <?php
                            $dem++;
                          ?>
                          <?php
                          if($dem%2==0){
                            echo "</th>";
                            $dem = 0;
                          }
                          ?>

                        
                      
                    <?php } ?>
                </table>
            </div>
            <div id="paging">
                <?php echo $paging->html(); ?>
            </div>
        </div>
         <script language="javascript">
             $('#content').on('click','#paging a', function ()
             {
                 var url = $(this).attr('href');
                  
                 $.ajax({
                     url : url,
                     type : 'get',
                     dataType : 'json',
                     success : function (result)
                     {
                         //  kiểm tra kết quả đúng định dạng không
                         var dem = 0;
                        
                         if (result.hasOwnProperty('member') && result.hasOwnProperty('paging'))
                         {
                                                    
                             var html = '<table border="0" cellspacing="0" cellpadding="5">';
                             // lặp qua danh sách thành viên và tạo html
                             $.each(result['member'], function (key, item){
                              if(dem == 0){ 
                            html += '<th>';
                           } 
                                html += '<div class="col product-item">';
                                html += '<div class="card card-parent" >';
                                html += '<img class="card-img-top" src="img/' + item['hinhanh']+ '"></img>';
                                //html += '<img class="card-img-top" src="">';
                                html += '<a href="#">';
                                html += ' <button class="btn-btn-buy">';
                                html += '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
                                html += '<span>Thêm vào giỏ hàng</span>';
                                html += '</button>';
                                html += '<button class="btn btn-success" >';

                                html += '<a  style="color: #fff;text-decoration: none" href="trangsanpham.php?chitietnongsan=' + item["manongsan"]+ '">Xem chi tiết</a>';


                                html += '</button>';  
                                html += '</a>';
                                html += '<div class="card-body">';
                                html += '<h5 class="item-heading">'+item['tennongsan']+'</h5>'; 
                                html += '<span class="item-price">'+item['gia']+'</span>'; 
                                html += '<div class="btn-buying">';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                                dem++;
                                if(dem%2==0){
                                  html += '</th>';
                                  dem = 0;
                                }
                                

                                // html += '<tr>';
                                // html += '<div class="col product-item">';
                                // html += '<div class="card card-parent" >';
                                // html += '<a href="#">';
                                // html += '<button class="btn-btn-buy">';
                                // html += '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
                                // html += '<span>Mua hàng</span>';
                                // html += '</button>';
                                // html += '</a>';
                                // html += '<div class="card-body">';
                                // html += '<h5 class="item-heading">'+$item['tennongsan']+</h5>';
                                // html += '<span class="item-price">'+$item['gia']+'</span>';
                                // html += '<div class="btn-buying">';
                                // html += '</div>';
                                // html += '</div>';
                                // html += '</div>';
                                // html += '</div>';
                                // html += '</tr>';


                             });
                              
                             html += '</table>';
                              
                             // Thay đổi nội dung danh sách thành viên
                             $('#list').html(html);
                              
                             // Thay đổi nội dung phân trang
                             $('#paging').html(result['paging']);
                              
                             // Thay đổi URL trên website
                             window.history.pushState({path:url},'',url);
                         }
                     }
                 });
                 return false;
             });
         </script>
    
    </div>
  </div>
</div>

<!-- List item -->


<!-- Start List Imagae -->

<div class="">
  <div class="row list-image__item">
      <img class="list-image" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/Gorgeous-Mix-Fresh-Fruits.jpg" alt="">
<!--       <div class="content-overlay"></div>
 -->      <img class="list-image" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/16113207_1291856107520109_7899272927030557727_o(1).jpg" alt="">
      <img class="list-image" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/photo-1-1501135431883.jpg" alt="">
      <img class="list-image" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/376028-sepik-15657821551051653886997.jpg" alt="">
      <img class="list-image" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/20180529-nhung-loai-trai-cay-lam-mat-co-the-nhanh-nhat-trong-ngay-nong-1.jpg" alt="">
      <img class="list-image" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/ba-ba-u-a-n-bu-o-i-1549852744-8567-1549852913.png" alt="">
      <img class="list-image" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/tey1555934946.jpg" alt="">
      <img class="list-image" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/Trai-cay-nhap-khau-tphcm-VinFruits.jpg" alt="">
  </div>
</div>



 
<!-- List Posts  -->

<div class="container">
  <div class="row ">
    <div class="col container-posts">
    <a href="#" class="post-link__item">
      <div class="card posts" >
        <img class="card-img-top card-image_post" src="https://growmax.weba.vn/shop/images/growmax/posts/back.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title heading-post">Nông Sản Bắc Mỹ Rầm Rộ Tìm Đường Vào Việt Nam</h4>
          <i class="fa fa-calendar icon-calendar" aria-hidden="true"></i> <span style="margin-right:4px;">30-07-2017</span>
          <p class="card-text">
        </div>
      </div>
      
    </a> 

        

  
   
<a href="#" class="post-link__item">
  <div class="card posts" >
    <img class="card-img-top card-image_post" src="https://growmax.weba.vn/shop/images/growmax/posts/cach-chon-rau-cu-qua-sach-tuoi-ngon-khong-ngam-doc-221922.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title heading-post">Tỏi, Ổi, Thanh Long... Việt Lên Vị Trí Nóng Ở Siêu Thị</h4>
      <i class="fa fa-calendar icon-calendar" aria-hidden="true"></i> <span style="margin-right:4px ;">30-07-2017</span>
      <p class="card-text">
      
    </div>
</div>
  
</a>   
      

 
  <a href="#" class="post-link__item">
    <div class="card posts" >
      <img class="card-img-top card-image_post" src="https://growmax.weba.vn/shop/images/growmax/posts/5918_hoaqua.jpg" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title heading-post">Vì Sao Người Tiêu Dùng Không Cải tiếng quy trình...</h4>
        <i class="fa fa-calendar icon-calendar" aria-hidden="true"></i> <span style="margin-right:4px ;">30-07-2017</span>
        <p class="card-text">
         
      </div>
    </div>
    
  </a>
    
</div>
  </div>

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
