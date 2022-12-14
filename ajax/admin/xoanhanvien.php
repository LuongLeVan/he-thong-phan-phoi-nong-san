<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];
    $id_vaitro = $_POST['delete_vaitro'];

    echo $id;

    $query = "DELETE FROM nhanvien WHERE manhanvien='$id'";
    $query2 = "DELETE FROM taikhoan WHERE username='$id_vaitro'";
    $query_run = mysqli_query($connection, $query);
    $query_run2 = mysqli_query($connection, $query2);
    echo $query;
    echo $query2;


    if($query_run)
    {
        echo '<script> alert("Nhân viên này đã được xóa thành công"); </script>';
        header('Location: ../../trangquanly.php?quanlynhanvien');
        echo "<script>
        header('Location: ../../trangquanly.php?quanlynhanvien');
        </script>";
       
    }
    else
    {
        echo '<script> alert("Không thành công"); </script>';
        echo "<script>
            window.location.href='../View/anhacungcapnongsan/trangquanly.php?nongsan';
        </script>"; 
    }
}

?>