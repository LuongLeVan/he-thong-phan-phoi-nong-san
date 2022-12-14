<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');

    if(isset($_POST['viewbtn']))
    {   
        $id = $_POST['update_id'];
        $fname = $_POST['fname'];
       // $lname = $_POST['lname'];
        // $course = $_POST['course'];
        // $contact = $_POST['contact'];
        $query = "select nongsan SET tennongsan='$fname' WHERE manongsan='$id'";
        $query_run = mysqli_query($connection, $query);
        echo $query;
        if($query_run)
        {
            echo '<script> alert("Cập nhật nông sản thành công"); </script>';
            //header("Location:index.php");
            echo "<script>
                window.location.href='trangquanly.php?nongsan';
            </script>"; 
        }
        else
        {
            echo '<script> alert("Cập nhật không thành công"); </script>';
            echo "<script>
                window.location.href='../../trangquanly.php?nongsan';
            </script>";
        }
    }
?>