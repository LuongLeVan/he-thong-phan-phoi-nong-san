
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

    <?php
    include("Controller/chung/cnongsan.php");

    if(isset($_REQUEST["yeucauhotro"])){
      $manongsan=$_REQUEST["yeucauhotro"];
      $tt='chokiemdinh';
      //echo $tt;
      $p=new cnongsan();
      $kp=$p->tao_phieu_kiemdinh($manongsan,$tt);
    
       echo "<script>alert('Đã gửi yêu cầu thành công')</script>";
       echo "<script>
            window.location.href='trangquanly.php?guiyeucauhotro';
        </script>";  
    }
                                                                                                                                                                                                                                                                                                                                                                                                              
?>

                  </body>
                  </html>
