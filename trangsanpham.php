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
                                              echo '<a href="google_login/logout.php">Đăng xuất</a>';
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
                                              echo '<a href="View/vdangxuat.php">Đăng xuất</a>';
                                          echo '</li>';
                                        echo '</ul>';
                                    echo '</li>';
                                  echo '</ul>';
                        
                                  }elseif($_SESSION['role']==3){
                                    include('View/adoanhnghiep/vdndoanhnghiep.php');
                                    echo '<ul class="navbar__list" >';
                                      echo '<li class="navbar__item navbar__user">';
                                        echo "<img src='img/".$_SESSION['maadmin']."'  class='navbar__user-img' width='30'>";
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
                                                echo '<a href="View/vdangxuat.php">Đăng xuất</a>';
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
  <?php

	include("Controller/chung/cSanpham.php");

	$p = new cSanpham();
	if(isset($_REQUEST['hang'])){
		$mahs = $_REQUEST['hang'];
		$table_sanpham = $p -> view_sanpham_by_hangsua($mahs); 
	}else{
		$count = $p -> count_sanpham();
		$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		$limit = 4;
		$total_page = $p -> get_total_page($count,$limit);
		if ($page > $total_page){
			
            	$page = $total_page;
        	}
        else if ($page < 1){
            	$page = 1;
       	}
		
		$table_sanpham = $p-> get_all_sanpham_page($page,$limit);
	}
	/////
	if($table_sanpham){
		if(mysqli_num_rows($table_sanpham)>0){
			$dem = 0;
			echo "<table style='width:100%;text-align:center'>";
			//echo "<h3 style='text-align: center'>THÔNG TIN SẢN PHẨM</h3>";
			//echo "<tr style='text-align:center'><td colspan='5'><H3>THÔNG TIN CÁC SẢN PHẨM</H3></td></tr>";
			while($row = mysqli_fetch_assoc($table_sanpham)){
				if($dem == 0){
					echo "<tr>";
				}
				echo "<td style='width:20%;height:100px;border: 3px solid aqua'>";
				echo "<b><a href='index.php?masua=".$row['manongsan']."'>".$row['tennongsan']."</a></b><br>";
				echo $row['trongluong']."gr - ".$row['gia']."VNĐ<br>";
				echo "<img width='150px' height='165px' src='img/".$row['hinhanh']."'></img>";
				echo "</td>";
				$dem++;
				if($dem%3==0){
					echo "</tr>";
					$dem = 0;
				}
			}
			echo "</table>";
		}else{
			echo "0 có sản phẩm";
		}
		
	}else{
		echo "Lỗi";
	}

	///CHỌN TRANG HIỂN THỊ
	echo "<div>";
	if ($page > 1 && $total_page > 1){
                echo '<a href="index.php?page='.($page-1).'">Prev</a> | ';
    }
	// Lặp khoảng giữa
   	for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
        if ($i == $page){
            echo '<span style="font-size:28px">'.$i.'</span> | ';
        }
        else{
				echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
            }
     }
     // nếu page < $total_page và total_page > 1 mới hiển thị nút prev
     if ($page < $total_page && $total_page > 1){
		 echo '<a href="index.php?page='.($page+1).'">Next</a> | ';
     }
	echo "</div>";

?>
  <!-- Phân trang end -->

<!-- List item -->
<div class="list-item">
  <div class="container" style="margin-top:20px">
    <div class="grid-item">
        <div class="col product-item ml8">
            <div class="card card-parent" >
                <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/rauden_master.jpg" alt="Card image cap">
                <a href="#">
                  <button class="btn-btn-buy">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>Mua hàng</span>
                  </button>
                </a>
                <div class="card-body">
                  <h5 class="item-heading">Rau dền - 300gr</h5>
                  <span class="item-price">7,000 Đ</span>
                  <div class="btn-buying">
                  
                  </div>
                </div>
            </div>
        </div>

        <div class="col product-item">
          <div class="card card-parent" >
              <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/upload_b64c243e49b84e4e8fccf12d271cd7c7_1024x1024.jpg" alt="Card image cap">
              <a href="#">
                <button class="btn-btn-buy">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span>Mua hàng</span>
                </button>
              </a>
              <div class="card-body">
                <h5 class="item-heading">Rau mồng tơi - 300gr</h5>
                <span class="item-price">7,000 Đ</span>
                <div class="btn-buying">
                
                </div>
              </div>
            </div>
            
      </div>

      <div class="col product-item">
        <div class="card card-parent" >
            <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/upload_51ea93aa42af4d5497d9293f6dd6c608_1024x1024.jpg" alt="Card image cap">
            <a href="#">
              <button class="btn-btn-buy">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>Mua hàng</span>
              </button>
            </a>
            <div class="card-body">
              <h5 class="item-heading">Su hào tím - 300gr</h5>
              <span class="item-price">7,000 Đ</span>
              <div class="btn-buying">
              
              </div>
            </div>
          </div>
          
    </div>
    <div class="col product-item">
      <div class="card card-parent" >
          <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/su-su-dl_master.jpg" alt="Card image cap">
          <a href="#">
            <button class="btn-btn-buy">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <span>Mua hàng</span>
            </button>
          </a>
          <div class="card-body">
            <h5 class="item-heading">Su su - 400gr</h5>
            <span class="item-price">7,000 Đ</span>
            <div class="btn-buying">
            
            </div>
          </div>
        </div>
  </div>     


  </div>  


  <!--  -->

  <div class="grid-item">
        <div class="col product-item ml8">
            <div class="card card-parent" >
                <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/rauden_master.jpg" alt="Card image cap">
                <a href="#">
                  <button class="btn-btn-buy">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>Mua hàng</span>
                  </button>
                </a>
                <div class="card-body">
                  <h5 class="item-heading">Rau dền - 300gr</h5>
                  <span class="item-price">7,000 Đ</span>
                  <div class="btn-buying">
                  
                  </div>
                </div>
            </div>
        </div>

        <div class="col product-item">
          <div class="card card-parent" >
              <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/upload_b64c243e49b84e4e8fccf12d271cd7c7_1024x1024.jpg" alt="Card image cap">
              <a href="#">
                <button class="btn-btn-buy">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span>Mua hàng</span>
                </button>
              </a>
              <div class="card-body">
                <h5 class="item-heading">Rau mồng tơi - 300gr</h5>
                <span class="item-price">7,000 Đ</span>
                <div class="btn-buying">
                
                </div>
              </div>
            </div>
            
      </div>

      <div class="col product-item">
        <div class="card card-parent" >
            <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/upload_51ea93aa42af4d5497d9293f6dd6c608_1024x1024.jpg" alt="Card image cap">
            <a href="#">
              <button class="btn-btn-buy">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>Mua hàng</span>
              </button>
            </a>
            <div class="card-body">
              <h5 class="item-heading">Su hào tím - 300gr</h5>
              <span class="item-price">7,000 Đ</span>
              <div class="btn-buying">
              
              </div>
            </div>
          </div>
          
    </div>
    <div class="col product-item">
      <div class="card card-parent" >
          <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/su-su-dl_master.jpg" alt="Card image cap">
          <a href="#">
            <button class="btn-btn-buy">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <span>Mua hàng</span>
            </button>
          </a>
          <div class="card-body">
            <h5 class="item-heading">Su su - 400gr</h5>
            <span class="item-price">7,000 Đ</span>
            <div class="btn-buying">
            
            </div>
          </div>
        </div>
  </div>     


  </div>  

  <!--  -->


  <div class="grid-item">

    <div class="col product-item">
      <div class="card card-parent" >
          <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/su-su-non_master.jpg" alt="Card image cap">
          <a href="#">
            <button class="btn-btn-buy">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <span>Mua hàng</span>
            </button>
          </a>
          <div class="card-body">
            <h5 class="item-heading">Su su non - 300gr</h5>
            <span class="item-price">7,000 Đ</span>
            <div class="btn-buying">
            
            </div>
          </div>
        </div>
        
  </div>
  
  <div class="col product-item">
    <div class="card card-parent" >
        <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/upload_886589fea40345e0b5d895db3b63b367_1024x1024.jpg" alt="Card image cap">
        <a href="#">
          <button class="btn-btn-buy">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span>Mua hàng</span>
          </button>
        </a>
        <div class="card-body">
          <h5 class="item-heading">Súp lơ trắng Mini - 450gr</h5>
          <span class="item-price">7,000 Đ</span>
          <div class="btn-buying">
          
          </div>
        </div>
      </div>
      
  </div>
  
  
  <div class="col product-item">
    <div class="card card-parent" >
        <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/sup-lo-xanh_master.jpg" alt="Card image cap">
        <a href="#">
          <button class="btn-btn-buy">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span>Mua hàng</span>
          </button>
        </a>
        <div class="card-body">
          <h5 class="item-heading">Súp lơ xanh Mini - 300gr</h5>
          <span class="item-price">7,000 Đ</span>
          <div class="btn-buying">
          
          </div>
        </div>
      </div>
      
  </div>
  
  <div class="col product-item">
    <div class="card card-parent" >
        <img class="card-img-top" src="https://growmax.weba.vn/shop/images/growmax/product/upload_a7da9a299d4d436bb2b991121f4e8343_1024x1024.png" alt="Card image cap">
        <a href="#">
          <button class="btn-btn-buy">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span>Mua hàng</span>
          </button>
        </a>
        <div class="card-body">
          <h5 class="item-heading">Tỏi - 250gr</h5>
          <span class="item-price">7,000 Đ</span>
          <div class="btn-buying">
          
          </div>
        </div>
      </div>
      
  </div>

  </div>



       
        
    </div>
    
</div>
</div>

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
