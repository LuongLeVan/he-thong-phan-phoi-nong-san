<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');
if(isset($_POST['insertdata']))
{
    $fname = $_POST['fname'];
    $lname = md5($_POST['lname']);
    $nguoidaidien = $_POST['tennguoidaidien'];
    $course = 2;

    $query = "INSERT INTO taikhoan (`username`,`password`,`role`) VALUES ('$fname','$lname','$course')";
    $query2 = "INSERT INTO doanhnghiep (`username`,`tendoanhnghiep`,`tennguoidailien`) VALUES ('$fname','$fname','$nguoidaidien')";

    $query_run = mysqli_query($connection, $query);
    $query_run2 = mysqli_query($connection, $query2);
    
    echo $query;
    echo $query_run;
    echo $query2;
    echo $query_run2;

    if($query_run){
        if($query_run){
            echo '<script> alert("Đã thêm doanh nghiệp mới"); </script>';
            header('Location: ../../trangquanly.php?quanlydoanhnghiep');
            echo "<script>
            header('Location: ../../trangquanly.php?quanlydoanhnghiep');
            </script>"; 
        }
        
    }
    else
    {
        echo '<script> alert("Không thành công"); </script>';
    }
}

?>