<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="./css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <div class="container">
          <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
       <a href="../akhachhangle/hoadon.html" style="all: unset;">
        <span style="margin-right:2px"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
        <span>0</span>
        <span style="margin: 0 2px">sản phẩm</span>
        <span>0.00</span>

       </a>
      </ul>
      <div class="mx-auto">
        <img src="https://vcdn.tikicdn.com/ts/seller/66/44/79/bec621134f5b9cc6f7a9571567f423ac.png" alt="" style="height:100px ;">
      </div>
      <form class="form-inline my-2 my-lg-0">
<!--         <span><i class="fa fa-search"></i></span>
 -->        <input class="form-control mr-sm-2 outline-success" type="search" placeholder="Từ khóa" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
      </form>
    </div>
  </nav>



  <!-- Menu -->
  <nav class="navbar navbar-expand-lg ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav navbar-list" >
        <li class="nav-item active">
          <a class="nav-link nav-item" href="#">Trang chủ</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link nav-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Nông sản
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Trái cây</a>
              <a class="dropdown-item" href="#">Rau</a>
              <a class="dropdown-item" href="#">Củ</a>
              <a class="dropdown-item" href="#">Khác</a>
              
            </div>
          </li>
        <li class="nav-item">
            <a class="nav-link nav-item" href="#">Giới thiệu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-item" href="#">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-item" href="#">Liên hệ</a>
          </li>
      </ul>
    </div>
  </nav>


  
    </div>
<!-- Slider -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> 
      <div class="carousel-item active">
        <img style="height:500px; " class="d-block w-100" src="https://growmax.weba.vn/shop/images/growmax/slider/2a2ee41f9a9230e599a60ec5d8fdac37.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img style="height:500px; " class="d-block w-100" src="https://growmax.weba.vn/shop/images/growmax/slider/banner-traicay.jpg" alt="Third slide">
      </div> 
      <div class="carousel-item">
        <img style="height:500px; " class="d-block w-100" src="https://growmax.weba.vn/shop/images/growmax/slider/banner1.jpg" alt="Second slide">
      </div>
     
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="background-circle">
  
  </div>
  <div class="container  card-circle">
    <div class="row">
      <a href="#">
        <div class="col">
          <div class="card card-circle__item" style="background-color: transparent; box-shadow:none;">
            <img class="card-img-top image-circle" src="https://growmax.weba.vn/shop/images/growmax/posts/traicay-ava2.jpg" alt="Card image cap">
            <div class="card-body card-body-circle">
              <h5 class="card-title heading-circle">LỢI ÍCH CỦA THỰC PHẨM SẠCH</h5>
              <p class="card-text">
                Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ...</p>
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
          Viết vài dòng giới thiệu với khách hàng về cửa hàng của bạn (các loại sản phẩm bạn bán, thương...	</p>
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
              Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ...</p>
          </div>
        </div>
      </div>
      </a>

      <a href="#">
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
      </a>
      
    </div>
  </div>

  <!-- Slider -->



  <!-- Start Introduce -->

  <div class="container container-introduce">
    <div class="row">
      <div class="col">
        <div class="controduce">
          <img class="img-controduce" src="https://growmax.weba.vn/shop/images/growmax/hinhanh/hen-suyen-an-trai-cay-2.png" alt="">
        </div>
      </div>
      <div class="col">
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

<!-- List item -->
<div class="list-item">
  <div class="container" style="margin-top:20px">
    <div class="grid-item">
        <div class="col product-item">
            <div class="card card-parent" style="width: 18rem;">
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
          <div class="card card-parent" style="width: 18rem;">
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
        <div class="card card-parent" style="width: 18rem;">
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
      <div class="card card-parent" style="width: 18rem;">
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


  <div class="grid-item">

    <div class="col product-item">
      <div class="card card-parent" style="width: 18rem;">
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
    <div class="card card-parent" style="width: 18rem;">
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
    <div class="card card-parent" style="width: 18rem;">
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
    <div class="card card-parent" style="width: 18rem;">
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
  <div class="row">
    <div class="col">
    <a href="#">
      <div class="card posts" >
        <img class="card-img-top card-image_post" src="https://growmax.weba.vn/shop/images/growmax/posts/back.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title heading-post">Nông Sản Bắc Mỹ Rầm Rộ Tìm Đường Vào Việt Nam</h4>
          <i class="fa fa-calendar icon-calendar" aria-hidden="true"></i> <span style="margin-right:4px;">30-07-2017</span>
          <p class="card-text">
            Là nước xuất khẩu nông sản lớn trên thế giới nhưng trên sân nhà nông sản Việt Nam có nguy cơ bị bao vây bởi nông sản chất lượng cao đế từ các nước Bắc Mỹ và Newzeland sau TPP.	</p>
        </div>
      </div>
      
    </a> 

        
  </div>

  <div class="col">
   
<a href="#">
  <div class="card posts" >
    <img class="card-img-top card-image_post" src="https://growmax.weba.vn/shop/images/growmax/posts/cach-chon-rau-cu-qua-sach-tuoi-ngon-khong-ngam-doc-221922.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title heading-post">Tỏi, Ổi, Thanh Long... Việt Lên Vị Trí Nóng Ở Siêu Thị</h4>
      <i class="fa fa-calendar icon-calendar" aria-hidden="true"></i> <span style="margin-right:4px ;">30-07-2017</span>
      <p class="card-text">
      
    Tỏi Lý Sơn, thanh long Bình Thuận, ổi Long Khánh… được các siêu thị, cửa hàng bán lẻ… dành những vị trí đẹp nhất để trưng bày quảng bá đến người tiêu dùng.	</p>
    </div>
</div>
  
</a>   
      
</div>

<div class="col">
 
  <a href="#">
    <div class="card posts" >
      <img class="card-img-top card-image_post" src="https://growmax.weba.vn/shop/images/growmax/posts/5918_hoaqua.jpg" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title heading-post">Vì Sao Người Tiêu Dùng Không Cải tiếng quy trình...</h4>
        <i class="fa fa-calendar icon-calendar" aria-hidden="true"></i> <span style="margin-right:4px ;">30-07-2017</span>
        <p class="card-text">
         
				Sau hơn 6 năm triển khai Vietgap (thực hành sản xuất nông nghiệp tốt) tới nay mới...	</p>
      </div>
    </div>
    
  </a>
    
</div>
  </div>
</div>


<!-- List Posts  -->


 <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="margin-top:200px">
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
            <p>Công Ty TNHH Thương Mại Dịch Vụ Đầu Tư Vạn Phú</p>
            <p>
                <i class="fa fa-map-marker"></i>
              vnaz.vn Tầng 7 Đoàn Hải Plaza, Số 756 Trường Chinh, Tân Bình, Hồ Chí Minh 
            </p>
            <p><i class="fas fa-phone me-3"></i> 02866860863 </p>
            <p><i class="fa fa-envelope"></i>kinhdoanh@vnaz.vn</p>
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

 <!-- Footer -->


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
