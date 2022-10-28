<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');

    if(isset($_POST['viewbtn']))
    {   
        $id = $_POST['update_id'];
        $fname = $_POST['fname'];
<<<<<<< HEAD:ajax/nhacungcapnongsan/xemchitietnongsan.php
       // $lname = $_POST['lname'];
        // $course = $_POST['course'];
        // $contact = $_POST['contact'];
        $query = "select nongsan SET tennongsan='$fname' WHERE manongsan='$id'";
=======
        $loai = $_POST['loai'];
        $soluong = $_POST['soluong'];
        $contact = $_POST['contact'];

        $query = "UPDATE nongsan SET tennongsan='$fname', maloai='$loai', soluong='$soluong', kichthuoc='$contact' WHERE manongsan='$id'";
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe:Model/capnhatnongsan.php
        $query_run = mysqli_query($connection, $query);
        echo $query;
        if($query_run)
        {
            echo '<script> alert("Cập nhật nông sản thành công"); </script>';
            //header("Location:index.php");
            echo "<script>
                window.location.href='../View/anhacungcapnongsan/trangquanly.php?nongsan';
            </script>"; 
        }
        else
        {
            
        }
    }
?>