<?php

	include("Controller/doanhnghiep/cdndoanhnghiep.php");

	$p = new cdoanhnghiep();
	$table = $p-> view_doanhnghiep();
	//var_dump($table);
	if($table){
		
			while($row = mysqli_fetch_array($table)){
				//echo "1";
				//echo "<b><a href='trangquanly.php?madoanhnghiep=".$row['madoanhnghiep']."'>".$row['tendoanhnghiep']."</a></b>";
				
				$_SESSION['madoanhnghiep'] = $row['madoanhnghiep'];
				//$_SESSION['mabv'] = $row["mabv"];
				$_SESSION['tendoanhnghiep'] = $row["tendoanhnghiep"];

				//echo $_SESSION["mabv"];
			
			
		}
	}
?>