<?php

	include("../../Controller/admin/cadmin.php");

	$p = new cadmin();
	$table = $p-> view_admin();
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
				//echo "<b><a href='trangchuadmin.php?maadmin=".$row['maadmin']."'>".$row['tenadmin']."</a></b>";
				$_SESSION['maadmin'] = $row['maadmin'];
				$_SESSION['hinh'] = $row['hinh'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['sdt'] = $row['sdt'];
				$_SESSION['diachi'] = $row['diachi'];
				
				$_SESSION['tenadmin'] = $row["tenadmin"];
			
			
		}
	}
?>