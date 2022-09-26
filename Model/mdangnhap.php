<?php

	include_once("ketnoi.php");

	class mdangnhap{
		function selectUser($tenDN,$mahoapass){
			 
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM taikhoan WHERE username = '".$tenDN."' and password = '".$mahoapass."'";
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