<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $nguoidaidien = $_POST['nguoidaidien'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];

        $query = "UPDATE nhacungcap SET tennguoidaidien='$nguoidaidien', sdt='$sdt', email='$email' WHERE mancc='$id'";
        $query_run = mysqli_query($connection, $query);
        echo $query;
        if($query_run)
        {
            echo "<script>alert('Thông tin nhà cung cấp đã được cập nhật')</script>";
       echo "<script>
            window.location.href='../../trangquanly.php?quanlynhacungcap';
        </script>";  
    
        }
        else
        {
            echo '<script> alert("Cập nhật không thành công"); </script>';
           
        }
    }
?>