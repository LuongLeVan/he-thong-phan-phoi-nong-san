<?php
	//session_start();
	include("../../Controller/nhanvien/cnhanvien.php");

	$p = new cnhanvien();
	$table = $p-> view_nhanvien();
	//var_dump($table);
	if($table){
		//echo 9999;
		//echo "<pre>";
		//print_r(mysqli_fetch_array($table));
		//echo "</pre>";
		//$row = mysqli_fetch_array($table);
		//echo "<pre>";
		//print_r($row);
		//echo "</pre>";
			while($row = mysqli_fetch_array($table)){
				//echo "1";
				//echo "<b><a href='trangquanly.php?maadmin=".$row['manhanvien']."'>".$row['tennhanvien']."</a></b>";
				
				$_SESSION['manhanvien'] = $row['manhanvien'];
				//$_SESSION['mabv'] = $row["mabv"];
				$_SESSION['tennhanvien'] = $row["tennhanvien"];
				$_SESSION['hinh'] = $row["hinh"];
				$_SESSION['sdt'] = $row["sdt"];
				$_SESSION['email'] = $row["email"];
				$_SESSION['diachi'] = $row["diachi"];


				//echo $_SESSION['tennhanvien'];
				//echo 112121;

				//echo $_SESSION["mabv"];
			
			
		}
	}
?>