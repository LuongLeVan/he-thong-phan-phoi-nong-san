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
<<<<<<< HEAD
                window.location.href='../../trangquanly.php?nongsan';
=======
                window.location.href='../../View/anhacungcapnongsan/trangquanly.php?nongsan';
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
            </script>"; 
        }
        else
        {
            
        }
    }
?>