<?php
    // Khai báo biến toàn cục kết nối
global $conn;
 
// Hàm kết nối database
function connect(){
    global $conn;
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanviet') or die ('{error:"bad_request"}');
    mysqli_set_charset($conn, 'utf8');

}
 
// Hàm đóng kết nối
function disconnect(){
    global $conn;
    if ($conn){
        mysqli_close($conn);
    }
}
 
// Hàm đếm tổng số thành viên
function count_all_member()
{
    global $conn;
    $query = mysqli_query($conn, 'select count(*) as total from nongsan');
    if ($query){
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        return $row['total'];
    }
    return 0;
}
 
// Lấy danh sách thành viên
function get_all_member($limit, $start)
{
    global $conn;
    $sql = 'select * from nongsan where trangthai="daduyet" limit '.(int)$start . ','.(int)$limit;
    $query = mysqli_query($conn, $sql);
     
    $result = array();
     
    if ($query)
    {
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $result[] = $row;
        }
    }
     
    return $result;
}
?>