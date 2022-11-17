<?php

	include_once("ketnoi.php");

	class mdiachi{
		
		function xem_diachi(){
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT tentinh, tenquan, tenphuong, diachi FROM ((nhacungcap join tinh on nhacungcap.matinh = tinh.matinh) join quan on nhacungcap.maquan = quan.maquan) join phuong on nhacungcap.maphuong = phuong.maphuong WHERE mancc = '".$_SESSION['mancc']."' ";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}

	}	


?>