<?php

	include("Controller/khachhang/cdnkhachhang.php");

	$p = new ckhachhang();
	$table = $p-> view_khachhang();
	//var_dump($table);
	if($table){
		
			while($row = mysqli_fetch_array($table)){
				//echo "1";
				//echo "<b><a href='trangquanly.php?makhachhang=".$row['makhachhang']."'>".$row['tenkhachhang']."</a></b>";
				
				$_SESSION['makhachhang'] = $row['makhachhang'];
				//$_SESSION['mabv'] = $row["mabv"];
				$_SESSION['tenkhachhang'] = $row["tenkhachhang"];
				$_SESSION['hinh'] = $row["hinh"];
				$_SESSION['sdt'] = $row["sdt"];
				$_SESSION['email'] = $row["email"];
				$_SESSION['diachi'] = $row["diachi"];



				//echo $_SESSION["mabv"];
			
			
		}
	}
?>