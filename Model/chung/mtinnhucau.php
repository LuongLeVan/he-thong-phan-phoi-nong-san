<?php

	include_once("ketnoi.php");

	class mtinnhucau{
		function select_tinnhucau(){
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM baitinnhucau join doanhnghiep on baitinnhucau.madoanhnghiep = doanhnghiep.madoanhnghiep where trangthai='choduyet'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_danhsachtinnhucau(){
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM baitinnhucau join doanhnghiep on baitinnhucau.madoanhnghiep = doanhnghiep.madoanhnghiep where trangthai='daduyet'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function view_tinnhucau($comp){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
				$string = "select * from baitinnhucau join doanhnghiep on baitinnhucau.madoanhngiep = doanhnghiep.madoanhnghiep where mabaitin= ".$comp;
				//echo $string;
				$table = mysqli_query($con,$string);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}

		function capnhattrangthai($mabaitin,$trangthai){
			$con;
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring ="update baitinnhucau ";
				$querystring .= "set trangthai='".$trangthai."'";
				//echo $trangthai;
				$querystring .= " where mabaitin=".$mabaitin;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
	}


?>