<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];
    echo $id;

    $query = "DELETE FROM nongsan WHERE manongsan='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Nông sản đã được xóa thành công"); </script>';
        //header("Location:index.php");
        echo "<script>
            window.location.href='../../trangquanly.php?nongsan';
        </script>"; 
         
    }
    else
    {
        echo '<script> alert("Nông sản này đã có mã QR và đã được kiểm định nên tác vụ xóa nông sản sẽ không được cho phép"); </script>';
        echo "<script>
            window.location.href='../../trangquanly.php?nongsan';
        </script>"; 
    }
}

?>