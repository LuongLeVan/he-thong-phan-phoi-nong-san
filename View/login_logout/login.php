<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Nông sản Việt</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Đăng nhập để bắt đầu phiên của bạn</p>

      <form action="#" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="tenDN"  placeholder="Tên tài khoản">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ghi Nhớ Tài Khoản
              </label>
            </div>
          </div>
          <!-- /.col -->
          
      
          <!-- /.col -->
        </div>
     

      <div class="social-auth-links text-center mb-3">
        <div class="btn btn-block ">
          <!-- <button type="submit" name="submit" class="btn btn-primary btn-block">Đăng Nhập</button> -->
          <input type="submit" name="submit" value="Đăng Nhập" class="btn btn-primary btn-block">   
        </div>
        <p>- Hoặc -</p>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google mr-2"></i> Đăng nhập với Google
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Quên mật khẩu</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Đăng ký tài khoản</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</form>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<?php
  include_once("../../Controller/cdangnhap.php");
  $dn = new cdangnhap();
    //var_dump($dn);
    if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['tenDN'];
         //echo $username;
    $password = $_REQUEST['pass'];
          //echo $password;
    $ketqua = $dn -> select_Dangnhap($username,$password);
         // var_dump($ketqua);
    
      //echo $ketqua;
      if ($username !=" " && $password !=" ") {
                  //echo 111;
                  if(($ketqua)){
                      //echo '123';
                      if (mysqli_num_rows($ketqua)>0) {
                          $_SESSION['dn'] = True;
                          var_dump($_SESSION["dn"]);
                          
                      //echo "123";
                      while($row = mysqli_fetch_assoc($ketqua)){
                          $_SESSION['role'] = $row['role'];
                          echo $_SESSION['role'];
                      }
                      if($_SESSION['dn'] == True){
                          $_SESSION['matk'] = $username;
                          $_SESSION['password'] = $password;
                      }

                      //echo header("refresh:0,url='index.php'");
                      if($_SESSION['role'] == 3){
                        echo "<script>window.location.href='../admin/trangchuadmin.php'</script>";
                      }elseif($_SESSION['role'] == 1){
                        echo "<script>window.location.href='../../index.php'</script>";
                      }
                      //echo "Đăng nhập thành công";
                      }else {
                          echo "<script>alert('Đăng nhập không thành công')</script>";
                          //echo "<script>window.location.href='HeThongHoTro_COVID19.php'</script>";
                          $_SESSION['dn'] = False;
                      }
                      
                  }else{
                      $_SESSION['dn'] = False;
                      echo "<script>alert('Đăng nhập k dc')</script>";
                      
                  }
              
              } else {
                  $_SESSION['dn'] = False;
              }
              
    
  }


?>
</body>
</html>
