
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
    include("../../Controller/cnongsan.php");
    if(isset($_REQUEST["guiyeucau"])){
      $manongsan=$_REQUEST["guiyeucau"];
      $tt='choduyet';
      //echo $tt;
      $p=new cnongsan();
      $kp=$p->capnhat_trangthai($manongsan,$tt);
    
       echo "<script>alert('Bài đăng nông đã được duyệt')</script>";
       echo "<script>
            window.location.href='trangquanly.php?dangban';
        </script>";  
    }
                                                                                                                                                                                                                                                                                                                                                                                                              
?>



                  </body>
                  </html>
