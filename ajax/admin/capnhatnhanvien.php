<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $ten = $_POST['ten'];
        $sdt = $_POST['sdt'];
        $chucvu = $_POST['chucvu'];

        $query = "UPDATE nhanvien SET tennhanvien='$ten', sdt='$sdt', chucvu='$chucvu' WHERE manhanvien='$id'";
        $query_run = mysqli_query($connection, $query);
        echo $query;
        if($query_run)
        {
            echo '<script> alert("Nhân viên này đã được cập nhật thành công"); 
            </script>';
        echo "<script>
            window.location.href='../../trangquanly.php?quanlynhanvien';
        </script>";
    
        }
        else
        {
            echo '<script> alert("Cập nhật không thành công"); </script>';
           
        }
    }
?>