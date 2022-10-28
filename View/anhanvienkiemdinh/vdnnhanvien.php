<?php

<<<<<<< HEAD
	include("Controller/nhanvien/cdnnhanvien.php");
=======
	include("Controller/cdnnhanvien.php");
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe

	$p = new cnhanvien();
	$table = $p-> view_nhanvien();
	//var_dump($table);
	if($table){
		
			while($row = mysqli_fetch_array($table)){
				//echo "1";
				echo "<b><a href='trangquanly.php?manhanvien=".$row['manhanvien']."'>".$row['tennhanvien']."</a></b>";
				
				$_SESSION['manhanvien'] = $row['manhanvien'];
				//$_SESSION['mabv'] = $row["mabv"];
				$_SESSION['tennhanvien'] = $row["tennhanvien"];
<<<<<<< HEAD
				$_SESSION['hinh'] = $row["hinh"];
=======
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe

				//echo $_SESSION["mabv"];
			
			
		}
	}
?>