<?php

	include("Controller/cdnnhacungcap.php");

	$p = new cnhacungcap();
	$table = $p-> view_nhacungcap();
	//var_dump($table);
	if($table){
		
			while($row = mysqli_fetch_array($table)){
				//echo "1";
				//echo "<b><a href='trangquanly.php?mancc=".$row['mancc']."'>".$row['tenncc']."</a></b>";
				
				$_SESSION['mancc'] = $row['mancc'];
				//$_SESSION['mabv'] = $row["mabv"];
				$_SESSION['tenncc'] = $row["tenncc"];
				$_SESSION['hinh'] = $row["hinh"];

				//echo $_SESSION["mabv"];
			
			
		}
	}
?>