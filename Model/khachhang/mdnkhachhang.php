<?php

	include_once("Model/chung/ketnoi.php");

	class mkhachhang{
		function select_khachhang(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM khachhang  WHERE username = '".$_SESSION['matk']."' ";
				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
<<<<<<< HEAD
		function select_khachhang_google(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM khachhang WHERE login_id = '".$_SESSION["login_id"]."' ";
=======
		function select_nhanvien(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM nhanvien  WHERE username = '".$_SESSION['matk']."' ";
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
				//echo $string;
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