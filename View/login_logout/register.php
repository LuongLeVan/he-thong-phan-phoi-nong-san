<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Nông sản Việt</b></a>
  </div>
  <form action="#" method="post" enctype="multipart/form-data" name="frm" onsubmit=" return validateform()">

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Đăng Ký Thành viên</p>
      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Đăng ký bằng số điện thoại">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="tenkhachhang" placeholder="Tên tài khoản">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <select class="form-control" name="nguoidung" aria-label="Default select example">
          <option value="1">Nhà cung cấp nông sản</option>
          <option value="2">Doanh nghiệp</option>
          <option value="5">Người mua hàng</option>
        </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Tôi đồng ý với  <a href="#">các điều khoản</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="btnsubmit" class="btn btn-primary btn-block">Đăng Ký</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google mr-2"></i>
          Đăng nhập bằng Google
        </a>
      </div>

      <a href="login.php" class="text-center">Tôi đã có tài khoản</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
</form>
<?php
    include ("../../Controller/chung/ctaikhoan.php");
    if(isset($_REQUEST["btnsubmit"])&&($_REQUEST['password'] !="")){
        //$Id=rand(1,10);
        $username=$_REQUEST["username"];
        $tenkhachhang=$_REQUEST["tenkhachhang"];
        $email=$_REQUEST["email"];
        $password=md5($_REQUEST["password"]);
        $loai=$_REQUEST["nguoidung"];
        $_SESSION=$loai;
        $p=new ctaikhoan();
        $table=$p->taotaikhoan($username,$password,$loai);
        $table2=$p->taokhachhang($username,$tenkhachhang,$username,$email);
        if($table==1){
            echo "<script>alert('thành công')</script>";
            //echo header("refresh:0; url='index.php?ctk'");
            echo "<script>window.location.href='login.php'</script>";
        }else{
            echo "error";
        }
    }elseif (isset($_REQUEST["btnsubmit"])) {
        echo "<script>alert('thành công')</script>";
    }
?>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
