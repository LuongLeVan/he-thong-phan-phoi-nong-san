<?php

	include_once("ketnoi.php");

	class mtinnhucau{
		function select_tinnhucau(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM baitinnhucau join doanhnghiep on baitinnhucau.madoanhnghiep = doanhnghiep.madoanhnghiep where trangthai='choduyet'";
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
		function xem_nongsan(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai";
				//$string = "select * from (benhvien join benhnhan on benhvien.mabv = benhnhan.mabv) join nhanvienbenhvien on benhvien.mabv = nhanvienbenhvien.mabv) where mabv= ".$comp;

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