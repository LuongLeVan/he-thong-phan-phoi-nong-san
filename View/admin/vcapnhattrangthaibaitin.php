
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

    <?php
include("Controller/chung/ctinnhucau.php");
    if(isset($_REQUEST["trangthaibaitin"])){
      $mabaitin=$_REQUEST["trangthaibaitin"];
      $tt='daduyet';
      //echo $tt;
      $p=new ctinnhucau();
      $kp=$p->capnhat_trangthai($mabaitin,$tt);
    
       echo "<script>alert('Bài đăng tin nhu cầu đã được duyệt')</script>";
       echo "<script>
            window.location.href='trangquanly.php?duyetbaitinnhucau';
        </script>";  
    }elseif(isset($_REQUEST["tuchoibaitin"])){
      $mabaitin=$_REQUEST["tuchoibaitin"];
      $tt='tuchoi';
    //echo $tt;
      $p=new ctinnhucau();
      $kp=$p->capnhat_trangthai($mabaitin,$tt);
    
       echo "<script>alert('Bài đăng tin nhu cầu đã bị từ chối')</script>";
       echo "<script>
            window.location.href='trangquanly.php?duyetbaitinnhucau';
        </script>";  
    }
                                                                                                                                                                                                                                                                                                                                                                                                              
?>



                  </body>
                  </html>
