<?php

	include("../../Controller/chung/cdiachi.php");

	$p = new cdiachi();
	$table = $p-> hienthi_diachi();
	//var_dump($table);
	if($table){
			while($row = mysqli_fetch_array($table)){
				echo $row["diachi"];
				echo" - ";
				echo $row["tenphuong"];
				echo" - ";
				echo $row["tenquan"];
				echo" - ";
				echo $row["tentinh"];

		}
	}
?>