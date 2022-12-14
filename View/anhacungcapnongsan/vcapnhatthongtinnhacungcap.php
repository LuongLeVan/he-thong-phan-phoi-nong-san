
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
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/input.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script src="dist/js/ajax.js"></script>
  <script>
        function chooseFile(fileInput){
            if (fileInput.files && fileInput.files[0]){
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
</head>

<body class="hold-transition sidebar-mini">
<form action="#" method="post" enctype="multipart/form-data">

  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            
            <?php 
<<<<<<< HEAD
            echo "<img  id='image' class='rounded-circle mt-5' style='border-radius: 50%' width='150px' src='img/".$_SESSION['hinh']."'/>"; 
            echo "<input type='file' id='imageFile' onchange='chooseFile(this)'  accept='image/gif, image/png, image/jpeg' name='fflie' value='". $_SESSION['hinh']."'>";
=======
<<<<<<< HEAD
            echo "<img class='rounded-circle mt-5' style='border-radius: 50%' width='150px' src='../../img/".$_SESSION['hinh']."'/>"; 
            echo "<input type='file' name='fflie' value='". $_SESSION['hinh']."'>";
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
              
=======
            echo'<i class="fa fa-pen" style="color: blue;">';
            echo "<input type='file' name='fflie' value='". $_SESSION['hinh']."'>";
            echo '</i>';
            echo "<img class='rounded-circle mt-5' width='150px' src='../../img/".$_SESSION['hinh']."'/>"; 
            
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
            ?>
          <!-- <img src="" alt="" id="image" width="50px" height="50px"> -->
          <!-- <input type="file" name="" id="imageFile" onchange="chooseFile(this)"  -->
          <!-- accept="image/gif, image/png, image/jpeg"> -->

            <span class="font-weight-bold">
            <?php
                echo $_SESSION['tenncc'];
              ?>
            </span><span class="text-black-50">
            <?php
                echo $_SESSION['email'];
              ?>
            </span><span> </span>
        </div>
      </div>
      <div class="col-md-8 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Cập nhật thông tin</h4>
          </div>
          <div class="row mt-6">
            <div class="col-md-12"><label class="labels">Họ và Tên</label>
              <p class="user-infor form-control">
              <?php
                echo '<input type="text" name="tenncc" value="'.$_SESSION['tenncc'].'">';
                //echo $_SESSION['tenncc'];
              ?>
              </p>
            </div>

          <div class="row mt-6">
            <div class="col-md-6"><label class="labels">Số điện thoại</label>
              <p class="user-infor form-control">
              <?php
                echo '<input type="text" name="sdt" value="'.$_SESSION['sdt'].'">';
                //echo $_SESSION['sdt'];
              ?>
              </p>
            </div>
            <div class="col-md-6"><label class="labels">Email ID</label>
              <p class="user-infor form-control">
              <?php
                echo '<input type="text" name="email" value="'.$_SESSION['email'].'">';
              ?>
              </p>
            </div>
            <div class="col-md-12"><label class="labels">Địa chỉ giao hàng</label>
              <p class="user-infor form-control">
                <?php
<<<<<<< HEAD
                  include("vdiachi.php");
=======
                  include("../vdiachi.php");
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
                ?>
              </p>
            </div>
            <div class="col-md-6"><label class="labels">Chọn tỉnh / thành phố</label>
            <select name="tinh" class="form-control tinh" id="select">
                <option value="">Tỉnh/Thành phố</option>
                <?php
                    $conn = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($conn, 'nongsanviet');
                          mysqli_set_charset($conn, 'utf8');
                    $sql = "select * from tinh";
                    $query = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($query);          
                    if($num >0){
                        while($row = mysqli_fetch_array($query)){

                    ?>
                        <option value="<?php echo $row['matinh'];?>"><?php echo $row['tentinh'];?></option>
                <?php
                        }
                    }
                ?>
            </select>
            </div>
            <div class="col-md-6"><label class="labels">Chọn quận / thành huyện</label>
            <select name="quan" class="form-control quan" id="select">
                <option value="">Quận/Huyện</option>
            </select>
            </div>
            <div class="col-md-6"><label class="labels">Chọn phường / xã</label>
            <select name="phuong" class="form-control phuong" id="select">
                <option value="phuong">Phường/Xã</option>
            </select>
            </div>
            <div class="col-md-6"><label class="labels">Số nhà - tên đường</label>
              <p class="user-infor form-control">
              <?php
                echo '<input type="text" name="diachi" value="'.$_SESSION['diachi'].'">';
              ?>
              </p>
            </div>
            
          </div>

          <div class="mt-5 text-center">
            <input type="submit"  name="btnsubmit" class="btn btn-success" value="Lưu thông tin" id="add">
          </div>
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
<<<<<<< HEAD
include_once("Controller/nhacungcapnongsan/cnhacungcap.php");
=======
<<<<<<< HEAD
include_once("../../Controller/nhacungcapnongsan/cnhacungcap.php");
=======
include_once("../../Controller/cnhacungcap.php");
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
if(isset($_REQUEST["btnsubmit"])){
    $tenncc=$_REQUEST["tenncc"];
    $sdt=$_REQUEST["sdt"];
    $email=$_REQUEST["email"];
    $tinh=$_REQUEST["tinh"];
    $quan=$_REQUEST["quan"];
    $phuong=$_REQUEST["phuong"];
    $diachi=$_REQUEST["diachi"];
    $mancc=$_SESSION['mancc'];
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    echo $file=$_FILES["fflie"]["tmp_name"];
=======
<<<<<<< HEAD
>>>>>>> bd87a24a518191a0513ff23a987e0e52eb182ab1
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
    echo $file=$_FILES["fflie"]["tmp_name"];
    $type=$_FILES["fflie"]["type"];
    $name=$_FILES["fflie"]["name"];
    $size=$_FILES["fflie"]["size"];
    echo "<script>
            //alert('$name');
            //window.location.href='trangquanly.php?capnhatthongtin';
        </script>"; 
    $p=new cnhacungcap();
    $kp=$p->capnhat_thongtin_nhacungcap($mancc,$tenncc,$sdt,$email,$diachi,$tinh,$quan,$phuong,$file,$name,$type,$size);
=======
    $file=$_FILES["fflie"]["tmp_name"];
>>>>>>> e4b84782c814da02501c19b9a438eb5386fbc170
    $type=$_FILES["fflie"]["type"];
    $name=$_FILES["fflie"]["name"];
    $size=$_FILES["fflie"]["size"];
    echo "<script>
            //alert('$name');
            //window.location.href='trangquanly.php?capnhatthongtin';
        </script>"; 
    $p=new cnhacungcap();
    $kp=$p->UpProduct($mancc,$tenncc,$sdt,$email,$diachi,$tinh,$quan,$phuong,$file,$name,$type,$size);
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
    if($kp==1){
        echo "<script>
            alert('Thông tin đã được cập nhật');
            window.location.href='trangquanly.php?capnhatthongtin';
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
</body>

</html>
