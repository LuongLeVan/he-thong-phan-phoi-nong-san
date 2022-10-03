<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');
if(isset($_POST['insertdata']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];
    $manhacungcap = $_POST['nhacungcap'];

    $query = "INSERT INTO nongsan (`manhacungcap`,`tennongsan`,`maloai`,`soluong`,`kichthuoc`) VALUES ('$manhacungcap','$fname','$lname','$course','$contact')";
    $query_run = mysqli_query($connection, $query);
    
    echo $query;
    echo $query_run;

    if($query_run)
    {
        echo '<script> alert("Nông sản đã được tạo"); </script>';
        //header('Location: ../View/anhacungcapnongsan/trangquanly.php?nongsan');
        echo "<script>
            window.location.href='../View/anhacungcapnongsan/trangquanly.php?nongsan';
        </script>"; 
    }
    else
    {
        echo '<script> alert("Không thành công"); </script>';
    }
}

?>