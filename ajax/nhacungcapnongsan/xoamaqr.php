<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];
    echo $id;

    $query = "DELETE FROM qrcode WHERE manongsan='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Nông sản đã được xóa thành công"); </script>';
        //header("Location:index.php");
        echo "<script>
            window.location.href='../../trangquanly.php?taomaqr';
        </script>"; 
         
    }
    else
    {
        echo '<script> alert("Không thành công"); </script>';
        echo "<script>
            window.location.href='../../trangquanly.php?taomaqr';
        </script>"; 
    }
}

?>