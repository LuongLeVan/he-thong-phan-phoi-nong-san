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
        
        include("Controller/chung/csanpham.php");
        $p = new csanpham();
        if(isset($_REQUEST["chitietnongsan"])){
            $ns = $_REQUEST["chitietnongsan"];
            $tblnongsan = $p->xemchitietsanpham($ns);
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
             echo "<img width=470px height=470px src='img/".$row['hinhanh']."'/>";
            ?>
            <!-- <div class="image_selected"><img src="tao.jpg" height="580px" width="580px" alt=""></div> -->
          </div>
          <div class="col-lg-5 order-3">
            <div class="product_description">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="trangchu.html">Trang chủ</a></li>
                  <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                  <!-- <li class="breadcrumb-item active">Táo đỏ</li> -->
                </ol>
              </nav>
              <!-- form xác nhận -->
            <form action="#" method="post" enctype="multipart/form-data">
              <div class="product_name">
                <?php
                  echo'<input style="border: none;" type="text" name="tennongsan" value="'.$row["tennongsan"].'">';
                    
                ?>
              </div>
              <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span>
                <span class="rating-review">35 Ratings & 45 Reviews</span>
              </div>
              <div> <span class="product_price">
              <?php
                  echo'<input style="border: none; width: 100px" type="text" name="gia" value="'.$row["gia"].'">VNĐ';
                  //echo 'Đ';
                ?>
              </span> <strike class="product_discount"> <span
                    style='color:black'>200,000đ<span> </strike> 
              </div>
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

                <div class="col-md-7">
                   <!-- 


                    -->
                </div>
                </div>
                <div class="row" style="margin-top: 15px;">
                  <div class="col-xs-6" style="margin-left: 15px;"> 
                  <span class="product_options">Trọng Lượng</span><br>
                  <select name="soluong" class="form-control quan" id="select">
                    <option value="1">1KG</option>
                    <option value="2">2KG</option>
                    <option value="3">3KG</option>
                    <option value="5">5KG</option>
                  </select>
                </div>
                <div class="col-xs-4" style="margin-left: 15px; margin-top: 46px;"> 
                <button class="btn-success"name="btnsubmit">Xác nhận</button>
                </div> 
              </div>
          
              <hr class="singleline">
              <div class="order_info d-flex flex-row">
                <form action="#">
              </div>
              <div class="row">
                <!-- <div class="col-xs-12">  -->
                <?php
                  //echo "</td><td><a href='trangchuadmin.php?doitrangthai=".$row['manongsan']."'>Duyệt | </a><a style='color: red' href='trangchuadmin.php?tuchoi=".$row['manongsan']."'>Từ chối</a>";
                ?>
                <!-- </div> -->
                <div class="col-xs-6" style="margin-left: 13px;">
                  <div class="product_quantity"> <span>Số khác: </span> <input id="quantity_input" type="text"
                      pattern="[0-9]*" value="1">
                    <div class="quantity_buttons">
                      <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                          class="fas fa-chevron-up"></i></div>
                      <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                          class="fas fa-chevron-down"></i></div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6">
                  <?php
                  if((isset($_SESSION["login_id"])&& $_SESSION["login_id"]==True)){ 
                    echo '<button type="button" class="btn btn-primary shop-button">Thêm vào giỏ hàng</button>';
                    echo '<button type="button" class="btn btn-success shop-button" name="btnsubmit">';
                        echo "<a style='color: #fff' href='nongsan.php?thanhtoan=".$row['manongsan']."'>Thanh toán ngay</a>";
                  }elseif((isset($_SESSION["dn"])&& $_SESSION["dn"]==True)){
                    echo '<button type="button" class="btn btn-primary shop-button">Thêm vào giỏ hàng </button>';
                    echo '<button type="button" class="btn btn-success shop-button" name="btnsubmit">';
                        echo "<a style='color: #fff' href='nongsan.php?thanhtoan=".$row['manongsan']."'>Thanh toán ngay</a>";
                  }
                  ?>
                      

                    </button>
                  <div class="product_fav"><i class="fas fa-heart"></i></div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-3 order-lg-4">
          <div>
          <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="trangchu.html">Tra cứu nguồn gốc nông sản</a></li>
                </ol>
              </nav>
                <?php
                  echo "<img style='width: 350px; height: 350px' src='Model/nhacungcapnongsan/qr_assets/".$row['hinh']."'/>";               

              ?>
          </div>
              
        </div>

        </form>
       <!-- Footer -->
  
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


<?php
if(isset($_REQUEST["btnsubmit"])){
  $_SESSION['tennongsan']=$_REQUEST["tennongsan"];
  $_SESSION['gia']=$_REQUEST["gia"];
  $_SESSION['soluong']=$_REQUEST["soluong"];
  echo $_SESSION['soluong'];
  echo $_SESSION['gia'];
  echo $_SESSION['tennongsan'];
}
?>
</body>


</html>
