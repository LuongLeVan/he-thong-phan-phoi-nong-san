<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Chi tiết sản phẩm</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../adoanhnghiep/css/style.css">
  <link rel="stylesheet" href="../adoanhnghiep/css/reponsive.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
      <?php
        
        include("../../Controller/cnongsan.php");
        $p = new cnongsan();
        if(isset($_REQUEST["chitietnongsan"])){
            $ns = $_REQUEST["chitietnongsan"];
            $tblnongsan = $p->getAllchitietBynongsan($ns);
        }else{
            //$tblnongsan = $p->();
        }
        if($tblnongsan){
          if(mysqli_num_rows($tblnongsan)>0){
              $dem = 0; 
              //echo'<table class="table">';
              while($row = mysqli_fetch_assoc($tblnongsan)){
                  if($dem==0){      
                  }
                 
      ?>

  <div class="super_container">
    <header class="header" style="display: none;">
      <div class="header_main">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
              <div class="header_search">
                <div class="header_search_content">
                  <div class="header_search_form_container">
                    <form action="#" class="header_search_form clearfix">
                      <div class="custom_dropdown">
                        <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All
                            Categories</span> <i class="fas fa-chevron-down"></i>
                          <ul class="custom_list clc">
                            <li><a class="clc" href="#">All Categories</a></li>
                          </ul>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="single_product">
      <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
        <div class="row">
          <div class="col-lg-4 order-lg-2 order-1">
            <?php
             echo "<img width=470px height=470px src='../../img/".$row['hinhanh']."'/>";
            ?>
            <!-- <div class="image_selected"><img src="tao.jpg" height="580px" width="580px" alt=""></div> -->
          </div>
          <div class="col-lg-6 order-3">
            <div class="product_description">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="trangchu.html">Trang chủ</a></li>
                  <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                  <!-- <li class="breadcrumb-item active">Táo đỏ</li> -->
                </ol>
              </nav>

              <div class="product_name">
                <?php
                  echo'<input type="text" name="tennongsan" value="'.$row["tennongsan"].'">';
                    
                ?>
              </div>
              <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span>
                <span class="rating-review">35 Ratings & 45 Reviews</span></div>
              <div> <span class="product_price">
              <?php
                  echo'<input type="text" name="gianongsan" value="'.$row["gia"].'">';
                  //echo 'Đ';
                ?>
              </span> <strike class="product_discount"> <span
                    style='color:black'>200,000đ<span> </strike> </div>
              <!-- <div> <span class="product_saved">You Saved:</span> <span style='color:black'>50,000đ<span> </div> -->
              <hr class="singleline">
              <div>
                <span class="product_info"></span>Chính sách hoàn trả dễ dàng trong 7 ngày<span><br>
                  <span class="product_info">Còn hàng: 250kg được bán trong tuần này<span> </div>
              <div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="br-dashed">
                      <div class="row">
                        <div class="col-md-3 col-xs-3"> <img src="https://img.icons8.com/color/48/000000/price-tag.png">
                        </div>
                        <div class="col-md-9 col-xs-9">
                          <div class="pr-info"> <span class="break-all">Voucher 5%</span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7"> </div>
                </div>
                <div class="row" style="margin-top: 15px;">
                  <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">Trọng Lượng</span><br>
                    <button class="btn btn-primary btn-sm">1 KG</button> <button class="btn btn-primary btn-sm">2
                      KG</button> <button class="btn btn-primary btn-sm">5 KG</button> </div>
                </div>
                
              </div>
          
              <hr class="singleline">
              <div class="order_info d-flex flex-row">
                <form action="#">
              </div>
              <div class="row">
                <div class="col-xs-12"> 
                <?php
                  echo "</td><td><a href='trangchuadmin.php?doitrangthai=".$row['manongsan']."'>Duyệt | </a><a style='color: red' href='trangchuadmin.php?tuchoi=".$row['manongsan']."'>Từ chối</a>";
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>

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
    <section class="" style="background-color:#3e6500;color: #fff">
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
      </div>
    </div>
  </div>
  <?php
                $dem++;
                  if($dem%4==0){
                   $dem = 0;
                  }
                }
                //echo "</table>";
              }else{
                echo "0 redult";
              }
            }else{
              echo "Khong co gia tri";
            }
          ?>
</body>


</html>
