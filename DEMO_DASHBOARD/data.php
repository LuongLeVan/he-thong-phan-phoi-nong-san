<?php
    require_once("database.php");
    $data = array();
    $query = "SELECT role, COUNT(role) AS size_status FROM taikhoan GROUP BY role";
    //echo $query;
    $ketqua = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($ketqua)){
        if($row['role'] == 1){
            $id = "Nhà cung cấp nông sản";
        }elseif($row['role'] == 2){
            $id = "Doanh nghiệp";
        }elseif($row['role'] == 5){
            $id = "Doanh khách hàng lẻ";
        }elseif($row['role'] == 3){
            $id = "Admin";
        }else{
            $id = "Nhân viên";

        }
        $id2 = $row['size_status'];
        $data[] = array('status'=>$id,'size_status'=>$id2);
    }
    
    //echo 1;
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode($data);
?>