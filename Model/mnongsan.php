<?php

	include_once("ketnoi.php");

	class mnongsan{
		function select_nongsan(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc ";
				//$string = "select * from benhnhan join benhvien on benhnhan.mabv = benhvien.mabv where tt=1";

				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}

		function SelectAllchitietBynongsan($comp){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
				$string = "select * from nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc where manongsan= ".$comp;
				//echo $string;
				$table = mysqli_query($comp,$string);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
	}


?>