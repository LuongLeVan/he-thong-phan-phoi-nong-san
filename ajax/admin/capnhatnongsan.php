<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        $manongsan = $_POST['manongsan'];
        $manongsan = $_POST['manongsan'];
        $tennongsan = $_POST['tennongsan'];
        $phanhoi = $_POST['mota'];
        $trangthai = "tuchoi";
        $query1 = "UPDATE nongsan SET tennongsan='$tennongsan', trangthai='$trangthai' WHERE manongsan='$manongsan'";
        $query_run1 = mysqli_query($connection, $query1);
        echo $query1;

        $query2 = "INSERT INTO lienhephanhoi (`noidungphanhoi`,`manongsan`) VALUES ('$phanhoi','$manongsan')";
        $query_run2 = mysqli_query($connection, $query2);
        echo $query2;
        if($query_run1)
        {
            echo '<script> alert("Nông sản đã bị từ chối"); </script>';
           
            echo "<script>
                window.location.href='../../trangquanly.php?duyetnongsan';
            </script>"; 
        }
        else
        {
            
        }
    }
?>