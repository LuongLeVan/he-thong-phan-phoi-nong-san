
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đặt hàng nông sản</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/input.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../dist/js/ajax.js"></script>
</head>

<body class="hold-transition sidebar-mini">
<form action="#" method="post" enctype="multipart/form-data">

  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
      <div class="col-md-4 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
              <?php
              include("Controller/chung/csanpham.php");
              $p = new csanpham();
              if(isset($_REQUEST["thanhtoan"])){
                  $ns = $_REQUEST["thanhtoan"];
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

            <?php 
            echo "<img  width='350px' height='250px' src='img/".$row['hinhanh']."'/>";               
            ?>
            <?php 
            echo "<img width=250px src='Model/nhacungcapnongsan/qr_assets/".$row['hinh']."'/>";               
            ?>

            <span class="font-weight-bold">
            <?php
                echo $row['tennongsan'];
              ?>
            </span><span class="text-black-50">
            <?php
                echo 'Giá: '.$row['gia']." VNĐ".'<br>';

                echo 'Nhà cung cấp: '.$row['tenncc'];
              ?>

            </span>
            <span> </span>
            <div>
              <table class="table">
                  <th>Số lượng đặt mua (kg)</th>
                  <th>Tổng tiền thanh toán (VND)</th>
                  <tr>
                    <td class="border-bottom">
                      <?php 
                      echo '<input style="border: none;" type="text" name="soluong" value="'.$_SESSION['soluong'].'">';
                      //echo $_SESSION['soluong']; 
                      ?>
                    </td>
                    
                    <td class="border-bottom">
                      <?php
                        $soluong=$_SESSION['soluong'];
                        $gia=$row['gia'];
                        echo $tt=$gia*$soluong;
                        echo '<input  style="display: none;" type="text" name="tongtien" value="'.$tt.'">';

                         echo '<input  style="display: none;" type="text" name="mancc" value="'.$row['mancc'].'">';
                         echo '<input  style="display: none;" type="text" name="manongsan" value="'.$row['manongsan'].'">';


                      ?>
                    </td>
                  </tr>
              </table>
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
      </div>
      <div class="col-md-8 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Đặt hàng nông sản</h4>
          </div>
          <div class="row mt-6">
            <div class="col-md-12"><label class="labels">Họ và Tên</label>
              <?php
                if($_SESSION['role']==1){
                  echo '<input class="user-infor form-control" type="text" name="tenadmin" value="'.$_SESSION['tenncc'].'">';
                  echo '<input class="user-infor form-control" type="text" name="makhachhang" value="'.$_SESSION['mancc'].'">';
                }else{
                  echo '<input class="user-infor form-control" type="text" name="tenkhachhang" value="'.$_SESSION['tenkhachhang'].'">';
                  echo '<input class="user-infor form-control" type="text" name="makhachhang" value="'.$_SESSION['makhachhang'].'">';
                }
                //echo $_SESSION['tenncc'];
              ?>
              </div>
          <di class="row mt-6">
            <div class="col-md-6"><label class="labels">Số điện thoại</label>
              <?php
                if($_SESSION['role']==1){
                  echo '<input  class="user-infor form-control" type="text" name="sdt" value="'.$_SESSION['sdt'].'">';
                //echo $_SESSION['sdt'];
                }else{
                  echo '<input  class="user-infor form-control" type="text" name="sdt" value="'.$_SESSION['sdt'].'">';
                }
              ?>
            </div>
            <div class="col-md-6"><label class="labels">Email ID</label>
              <?php
                echo '<input class="user-infor form-control" type="text" name="email" value="'.$_SESSION['email'].'">';
              ?>
            </div>
            <div class="col-md-12"><label class="labels">Địa chỉ giao hàng</label>
              <p class="user-infor form-control">
                <?php
                if($_SESSION['role']==1){
                  include("View/sanpham/vdiachigiaohang.php");
                }else{
                  include("View/sanpham/vdiachigiaohangkhachhang.php");
                }
                ?>
              </p>
            </div>
          </div>
          <div class="row mt-12">
            <label class="labels">Hình thức thanh toán</label>
          </div>
          <div class="row">
            <input type="radio" name="thanhtoan" value="1" id="">&nbsp Thanh toán khi giao hàng
          </div>
          <div class="row">
            <input type="radio" name="thanhtoan" value="2" id="">&nbsp Thanh toán qua ví điện tử
          </div>

          <div class="mt-5 text-center">
            <input type="submit"  name="btnsubmit" class="btn btn-success" value="Đặt hàng" id="add">
          </div>
        </div>
      </div>
</form> 
      
    </div>
  </div>
  </div>
  </div>


  <?php
//include ("Controller/chung/csanpham.php");
 if(isset($_REQUEST["btnsubmit"])){
     if($_SESSION['role']==1){
      $makhachhang=$_REQUEST["mancc"];
     }else{
      $makhachhang=$_REQUEST["makhachhang"];
     }
     $soluong=$_REQUEST["soluong"];
     $mancc=$_REQUEST["mancc"];
     $thanhtoan=$_REQUEST["thanhtoan"];
     $manongsan = $_REQUEST["manongsan"];
     $trangthai = 'chotiepnhan';
     $tongtien = $_REQUEST["tongtien"];
     $p=new csanpham();
     if($_SESSION['role']==1){
     $kp=$p->tao_donhang_ncc($makhachhang,$mancc,$manongsan,$trangthai,$tongtien,$thanhtoan);
     //$kp2=$p->tao_chitiethoadon_ncc($madonhang,$manongsan,$soluong);
     }else{
     $kp=$p->tao_donhang_khachhang($makhachhang,$mancc,$manongsan,$trangthai,$tongtien,$thanhtoan);
     //$kp2=$p->tao_chitiethoadon_khachhang($madonhang,$manongsan,$soluong);

     }
     if($kp==1){
      echo "<script>
        alert('Bạn đã đặt hàng thành công');
        window.location.href='index.php';
      </script>";
     }else {
         echo "error";
     }
 }
?>

</body>

</html>
