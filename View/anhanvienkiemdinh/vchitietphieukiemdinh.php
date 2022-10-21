
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thông tin người dùng</title>

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
<?php
	      //include("../../Controller/chung/cdiachi.php");
        
        include("../../Controller/chung/cnongsan.php");
        $p = new cnongsan();
        if(isset($_REQUEST["chitietkiemdinh"])){
            $ns = $_REQUEST["chitietkiemdinh"];
            $_SESSION["manongsan"] = $_REQUEST["chitietkiemdinh"];
            $tblnongsan = $p->hienthi_giaykiemdinh($ns);
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
<form action="#" method="post" enctype="multipart/form-data">

  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
      <!-- Thông tin nông sản -->
      <div class="col-md-3 border-top border-right border-left">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Thông tin nhà cung cấp</h4>
          </div>
          <div class="col-md-12"><label class="labels">Tên cơ sở</label>
              <?php
                echo '<input class="user-infor form-control" type="text" name="tenncc" value="'.$row["tenncc"].'">';
                //echo $row["tennongsan"];
                //echo $_SESSION['tenncc'];
              ?>
            </div>
            <div class="col-md-12"><label class="labels">Tên nhà cung cấp</label>
              <?php
                echo '<input class="user-infor form-control" type="text" name="tenncc" value="'.$row["tenncc"].'">';
                //echo $row["tennongsan"];
                //echo $_SESSION['tenncc'];
              ?>
            </div>

            <div class="col-md-12"><label class="labels">Số điện thoại</label>
              <?php
                echo '<input class="user-infor form-control" type="text" name="sdt" value="'.$row['sdt'].'">';
                //echo $_SESSION['sdt'];
              ?>
            </div>
            <div class="col-md-12"><label class="labels">Email ID</label>
              <?php
                echo '<input class="user-infor form-control" type="text" name="email" value="'.$row['email'].'">';
              ?>
            </div>

            
        </div>
      </div>
      
      <!-- Thông tin nhà cung cấp -->
      <div class="col-md-3 border-top border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Thông tin nông sản</h4>
          </div>
            <div class="col-md-12"><label class="labels">Tên nông sản</label>
              <?php
                  echo '<input class="user-infor form-control" type="text" name="tenncc" value="'.$row["tenncc"].'">';
                //echo $_SESSION['tenncc'];
              ?>
            </div>

            <div class="col-md-12"><label class="labels">Loại nông sản</label>
              <?php
                echo '<input class="user-infor form-control" type="text" name="sdt" value="'.$_SESSION['sdt'].'">';
                //echo $_SESSION['sdt'];
              ?>
            </div>
            <div class="col-md-12"><label class="labels">Lượng mẫu thử</label>
              <?php
                echo '<input class="user-infor form-control" type="text" name="luongmauthu" value="'.$row["luongmauthu"].'">';
              ?>
            </div>
            <div class="col-md-12"><label class="labels">Tình trạng mẫu thử</label>
              <?php
                echo '<input class="user-infor form-control" type="textarea" name="email" value="">';
              ?>
            </div>
          </div>
        </div>
<!-- Tiêu chí kiểm định -->
        <div class="col-md-6 border-top">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="text-right">Tiêu chí kiểm định</h4>
            </div>
              <div class="col-md-12"><label class="labels">Chất lượng đất mẫu</label>
                <?php
                  echo '<input class="user-infor form-control" type="text" name="tennhanvien" value="">';
                  //echo $_SESSION['tenncc'];
                ?>
              </div>
              <div class="col-md-12"><label class="labels">Tình trạng mẫu thử</label>
                <?php
                  echo '<input class="user-infor form-control" type="text" name="tennhanvien" value="">';
                  //echo $_SESSION['tenncc'];
                ?>
              </div>
              <div class="row mt-6">
                <div class="col-md-6"><label class="labels">Vi khuẩn hiếu khí</label>
                  <?php
                    echo '<input class="user-infor form-control" type="text" name="vikhuanhieukhi" value="'.$row["chisovikhuanhieukhi"].'">';
                    //echo $_SESSION['tenncc'];
                  ?>
                </div>
                <div class="col-md-6"><label class="labels">Vi khuẩn kỵ khí</label>
                  <?php
                    echo '<input class="user-infor form-control" type="text" name="vikhuankykhi" value="'.$row["chisovikhuanhieukhi"].'">';
                    //echo $_SESSION['tenncc'];
                  ?>
                </div>
              </div>
              <div class="row mt-6">
                <div class="col-md-6"><label class="labels">Nấm mốc</label>
                  <?php
                    echo '<input class="user-infor form-control" type="text" name="nammoc" value="'.$row["nammoc"].'">';
                    //echo $_SESSION['tenncc'];
                  ?>
                </div>
                <div class="col-md-6"><label class="labels">Độ ẩm</label>
                  <?php
                    echo '<input class="user-infor form-control" type="text" name="doam" value="'.$row["doam"].'">';
                    //echo $_SESSION['tenncc'];
                  ?>
                </div>
              </div>
              <div class="col-md-12"><label class="labels">Đánh giá từ nhà cung cấp</label>
                <?php
                  echo '<input class="user-infor form-control" type="text" name="danhgiaNCC" value="'.$row["danhgiaNCC"].'">';
                  //echo $_SESSION['tenncc'];
                ?>
              </div>
              <div class="col-md-12"><label class="labels">Đánh giá từ nhân viên kiểm định</label>
                <?php
                  echo '<input class="user-infor form-control" type="text" name="danhgiatunhanvien" value="'.$row["danhgiatunhanvien"].'">';
                  //echo $_SESSION['tenncc'];
                ?>
              </div>
              <div class="col-md-12"><label class="labels">Địa chỉ sản xuất</label>
            <textarea  class="user-infor form-control" name="" id="">
            <?php
                  $_SESSION['mancc']=$row['mancc'];
                  
                  include("../anhacungcapnongsan/vdiachi.php");
                ?>
            </textarea>
               
            </div>
              
        </div>
<!-- Tiêu chí kiểm định -->
      <div class="mt-5 text-center">
            <input type="submit"  name="btnsubmit" class="btn btn-success" value="Lưu thông tin" id="add">
          </div>
      </div>

      
      
</form> 
      
    </div>
  </div>
  </div>
  </div>


  <?php
//include_once("../../Controller/cnhacungcap.php");
//$p = new cnhacungcap();
//if(isset($_REQUEST["btnsubmit"])){
    //$tenncc=$_REQUEST["tenncc"];
    //$sdt=$_REQUEST["sdt"];
    //$email=$_REQUEST["email"];
    //$tinh=$_REQUEST["tinh"];
    //$quan=$_REQUEST["quan"];
    //$phuong=$_REQUEST["phuong"];
    //$diachi=$_REQUEST["diachi"];
    //$mancc=$_SESSION['mancc'];
    //echo $mancc;

    //$p=new cnhacungcap();
    //$kp=$p->capnhat_thongtin($mancc,$tenncc,$sdt,$email,$diachi,$tinh,$quan,$phuong);
    
    
        //echo "<script>
            //alert('Thông tin đã được cập nhật');
            //window.location.href='trangquanly.php?capnhatthongtin';
        //</script>"; 
    //}
?>

<?php
include_once("../../Controller/chung/cnongsan.php");
if(isset($_REQUEST["btnsubmit"])){
    $manongsan = $_SESSION["manongsan"];
    $trangthai='dakiemdinh';
    $danhgiancc=$_REQUEST["danhgiaNCC"];
    $danhgianhanvien=$_REQUEST["danhgiatunhanvien"];
    $vikhuankykhi=$_REQUEST["vikhuankykhi"];
    $vikhuanhieukhi=$_REQUEST["vikhuanhieukhi"];
    $doam=$_REQUEST["doam"];
    $nammoc=$_REQUEST["nammoc"];
    $luongmauthu=$_REQUEST['luongmauthu'];
    
    $p=new cnongsan();
    $kp=$p->capnhat_trangthai_kiemdinh_chapnhan($manongsan,$trangthai,$danhgiancc,$danhgianhanvien,$vikhuankykhi,$vikhuanhieukhi,$doam,$nammoc,$luongmauthu);
    if($kp==1){
      echo "<script>
            alert('Thông tin đã được cập nhật');
            window.location.href='trangquanly.php?kiemdinhnongsan';
        </script>"; 
    }elseif ($kp==0) {
        echo "<script>alert('Không thể Update')</script>";
    }
    elseif ($kp==-1) {
         echo "<script>alert('Không thể upload')</script>";
    }elseif ($kp==-2) {
         echo "<script>alert('size quá lớn')</script>";
    }elseif ($kp==-3) {
        echo "<script>alert('file không đúng dạng')</script>";
    }
    else {
        echo "error";
    }
}
?>
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
