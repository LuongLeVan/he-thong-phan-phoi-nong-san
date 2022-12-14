<?php

session_start();

// $connection = mysqli_connect("localhost","root","");
// $db = mysqli_select_db($connection, 'nongsanviet');
// mysqli_set_charset($connection, 'utf8');
include ("../../Controller/chung/cthemnongsan.php");
if(isset($_POST['insertdata']))
{
    $tennongsan = $_POST['tennongsan'];
    $loai2 = $_POST['loai2'];
    $soluong = $_POST['soluong'];
    $kichthuoc = $_POST['kichthuoc'];
    $manhacungcap = $_SESSION['mancc'];
<<<<<<< HEAD
    $file=$_FILES["fflie"]["tmp_name"];
    $type=$_FILES["fflie"]["type"];
    $name=$_FILES["fflie"]["name"];
    $size=$_FILES["fflie"]["size"];
    $p=new cnongsan();
    $kp=$p->themnongsan($manhacungcap,$tennongsan,$loai2,$soluong,$kichthuoc,$file,$name,$type,$size);
        if($kp==1){
            echo "<script>alert('Thêm Dữ liệu thành công')</script>";
            echo header("refresh:0; url='admin?qlsp.php'");
        }elseif ($kp==0) {
            echo "<script>alert('Không thể insert')</script>";
        }elseif ($kp==-1) {
            echo "<script>alert('Không thể upload')</script>";
        }elseif ($kp==-2) {
            echo "<script>alert('size quá lớn')</script>";
        }elseif ($kp==-3) {
            echo "<script>alert('file không đúng dạng')</script>";
        }else {
            echo "error";
        }
    }
    // $query = "INSERT INTO nongsan (`manhacungcap`,`tennongsan`,`maloai`,`soluong`,`kichthuoc`) VALUES ('$manhacungcap','$fname','$loai2','$course','$contact')";
    // $query_run = mysqli_query($connection, $query);
=======
<<<<<<< HEAD:ajax/nhacungcapnongsan/themnongsan.php
=======

>>>>>>> cb40d2010451878e806801f4fd735638402ecabe:Model/themnongsan.php
    $query = "INSERT INTO nongsan (`manhacungcap`,`tennongsan`,`maloai`,`soluong`,`kichthuoc`) VALUES ('$manhacungcap','$fname','$loai2','$course','$contact')";
    $query_run = mysqli_query($connection, $query);
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
    
    
    //echo $query;
    //echo $query_run;

    
        echo '<script> alert("Nông sản đã được tạo"); </script>';
        // echo "<script>
        //     window.location.href='../../trangquanly.php?nongsan';
        // </script>"; 
   

?>