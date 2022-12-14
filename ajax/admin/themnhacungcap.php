<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');
if(isset($_POST['insertdata']))
{
    $fname = $_POST['fname'];
    $lname = md5($_POST['lname']);
    $nguoidaidien = $_POST['nguoidaidien'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];



    $vaitro = 1;

    $query = "INSERT INTO taikhoan (`username`,`password`,`role`) VALUES ('$fname','$lname','$vaitro')";
    $query2 = "INSERT INTO nhacungcap (`username`,`tennguoidaidien`,`sdt`,`email`) VALUES ('$fname','$nguoidaidien','$sdt','$email')";

    $query_run = mysqli_query($connection, $query);
    $query_run2 = mysqli_query($connection, $query2);
    
    echo $query;
    echo $query_run;
    echo $query2;
    echo $query_run2;

    if($query_run)
    {
        echo '<script> alert("Đã thêm nhà cung cấp mới"); </script>';
        header('Location: ../../trangquanly.php?quanlynhacungcap');
        echo "<script>
        header('Location: ../../trangquanly.php?quanlynhacungcap');
        </script>"; 
    }
    else
    {
        echo '<script> alert("Không thành công"); </script>';
    }
}

?>