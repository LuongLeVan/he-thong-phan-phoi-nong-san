<?php

	include("Controller/nhanvien/cdnnhanvien.php");

	$p = new cnhanvien();
	$table = $p-> view_nhanvien();
	//var_dump($table);
	if($table){
		
			while($row = mysqli_fetch_array($table)){
				//echo "1";
				//echo "<b><a href='trangquanly.php?manhanvien=".$row['manhanvien']."'>".$row['tennhanvien']."</a></b>";
				
				$_SESSION['manhanvien'] = $row['manhanvien'];
				//$_SESSION['mabv'] = $row["mabv"];
				$_SESSION['tennhanvien'] = $row["tennhanvien"];
				$_SESSION['hinh'] = $row["hinh"];
				$_SESSION['email'] = $row["email"];
				$_SESSION['diachi'] = $row["diachi"];
				$_SESSION['sdt'] = $row["sdt"];

				//echo $_SESSION["mabv"];
			
			
		}
	}
?>