<?php

	include("Controller/khachhang/cdnkhachhanggoogle.php");

	$p = new ckhachhang();
	$table = $p-> view_khachhang_google();
	//var_dump($table);
	if($table){
			while($row = mysqli_fetch_array($table)){
				//echo "<b><a href='trangquanly.php?makhachhang=".$row['makhachhang']."'>".$row['tenkhachhang']."</a></b>";
				$_SESSION['makhachhang'] = $row['makhachhang'];
				$_SESSION['tenkhachhang'] = $row["tenkhachhang"];
				$_SESSION['hinh'] = $row["hinh"];
				$_SESSION['sdt'] = $row["sdt"];
				$_SESSION['email'] = $row["email"];
				$_SESSION['diachi'] = $row["diachi"];
		}
	}
?>