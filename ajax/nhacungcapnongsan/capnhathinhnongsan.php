<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $fname = $_POST['fname'];
        $loai = $_POST['loai'];
        $soluong = $_POST['soluong'];
        $contact = $_POST['contact'];
        $mota = $_POST['mota'];
        $query = "UPDATE nongsan SET tennongsan='$fname', maloai='$loai', soluong='$soluong', kichthuoc='$contact', mota='$mota' WHERE manongsan='$id'";
        $query_run = mysqli_query($connection, $query);
        echo $query;
        if($query_run)
        {
            echo '<script> alert("Cập nhật nông sản thành công"); </script>';
            //header("Location:index.php");
            echo "<script>
                window.location.href='../../trangquanly.php?nongsan';
            </script>"; 
        }
        else
        {
            
        }
    }
?>