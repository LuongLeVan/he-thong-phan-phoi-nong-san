
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
    include("../../Controller/chung/cnongsan.php");

    if(isset($_REQUEST["dangbannongsan"])){
      $manongsan=$_REQUEST["dangbannongsan"];
      $tt='choduyet';
      //echo $tt;
      $p=new cnongsan();
      $kp=$p->capnhat_trangthai($manongsan,$tt);
    
       echo "<script>alert('Bài đăng nông đã được duyệt')</script>";
       echo "<script>
            window.location.href='trangquanly.php?dangban';
        </script>";  
    }
    if(isset($_REQUEST["yeucauhotro"])){
      $manongsan=$_REQUEST["yeucauhotro"];
      $tt='chokiemdinh';
      //echo $tt;
      $p=new cnongsan();
      $kp=$p->capnhat_trangthai_yeucauhotro($manongsan,$tt);
    
       echo "<script>alert('Bài đăng nông đã được duyệt')</script>";
       echo "<script>
            window.location.href='trangquanly.php?guiyeucauhotro';
        </script>";  
    }
    if(isset($_REQUEST["capnhathinhanhnongsan"])){
      $manongsan=$_REQUEST["capnhathinhanhnongsan"];
      $file=$_FILES["fflie"]["tmp_name"];
      $type=$_FILES["fflie"]["type"];
      $name=$_FILES["fflie"]["name"];
      $size=$_FILES["fflie"]["size"];
      //echo $tt;
      $p=new cnongsan();
      $kp=$p->capnhat_thongtin_hinh($manongsan,$file,$name,$type,$size);
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
