
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
<<<<<<< HEAD
    include("Controller/chung/cnongsan.php");
=======
<<<<<<< HEAD
    include("../../Controller/chung/cnongsan.php");
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291

    if(isset($_REQUEST["dangbannongsan"])){
      $manongsan=$_REQUEST["dangbannongsan"];
=======
    include("../../Controller/cnongsan.php");
    if(isset($_REQUEST["guiyeucau"])){
      $manongsan=$_REQUEST["guiyeucau"];
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
      $tt='choduyet';
      //echo $tt;
      $p=new cnongsan();
      $kp=$p->capnhat_trangthai($manongsan,$tt);
    
<<<<<<< HEAD
       echo "<script>alert('Bài đăng nông sản đã gửi, bạn hãy chờ admin duyệt')</script>";
=======
<<<<<<< HEAD
       echo "<script>alert('Bài đăng nông sản đã gửi, bạn hãy chờ admin duyệt')</script>";
=======
<<<<<<< HEAD
       echo "<script>alert('Bài đăng nông sản đã gửi, bạn hãy chờ admin duyệt')</script>";
=======
<<<<<<< HEAD
       echo "<script>alert('Bài đăng nông đã được duyệt rồi')</script>";
>>>>>>> e4b84782c814da02501c19b9a438eb5386fbc170
>>>>>>> bd87a24a518191a0513ff23a987e0e52eb182ab1
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
       echo "<script>
            //window.location.href='trangquanly.php?dangban';
        </script>";  
    }
    if(isset($_REQUEST["yeucauhotro"])){
      $manongsan=$_REQUEST["yeucauhotro"];
      $tt='chokiemdinh';
      //echo $tt;
      $p=new cnongsan();
      $kp=$p->capnhat_trangthai_yeucauhotro($manongsan,$tt);
    
       echo "<script>alert('Nông sản đã được gửi yêu cầu để hỗ trợ')</script>";
       echo "<script>
            //window.location.href='trangquanly.php?guiyeucauhotro';
        </script>";  
    }
    if(isset($_REQUEST["capnhathinhanhnongsan"])){
      //$manongsan=$_REQUEST["capnhathinhanhnongsan"];
      echo "--";

      echo $manongsan=$_SESSION['manongsan'];
      echo "--";
      echo $file=$_SESSION['file'];
      echo "--";
      echo $type=$_SESSION['type'];
      echo "--";
       echo $name=$_SESSION['name'];
       echo "--";
       echo $size=$_SESSION['size'];
       echo "--";
       echo $mancc=$_SESSION['mancc'];
       echo "--";
       echo $maloai=$_SESSION['maloai'];
      //echo $tt;
      $p=new cnongsan();
      $kp=$p->capnhat_thongtin_hinh($manongsan,$mancc,$maloai,$file,$name,$type,$size);
<<<<<<< HEAD
      var_dump($kp);
=======
<<<<<<< HEAD
      var_dump($kp);
=======
<<<<<<< HEAD
      var_dump($kp);
=======
>>>>>>> e4b84782c814da02501c19b9a438eb5386fbc170
>>>>>>> bd87a24a518191a0513ff23a987e0e52eb182ab1
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
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
    
    
=======
       echo "<script>alert('Bài đăng nông đã được duyệt')</script>";
       echo "<script>
            window.location.href='trangquanly.php?dangban';
        </script>";  
    }
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
                                                                                                                                                                                                                                                                                                                                                                                                              
?>



                  </body>
                  </html>
