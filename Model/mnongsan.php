<?php

	include_once("ketnoi.php");

	class mnongsan{
		function select_nongsan(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc where trangthai='choduyet'";
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
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_nongsan_chuaban(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where trangthai = 'choban' and  mancc = '".$_SESSION['mancc']."'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_nongsan_bituchoi(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where trangthai = 'tuchoi' and  mancc = '".$_SESSION['mancc']."'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}

		function xem_nongsancomaqr(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join maqr on nongsan.manongsan = maqr.manongsan where mancc = '".$_SESSION['mancc']."'";
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

		function xem_nongsanchuacomaqr(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) where maqr = 0 and mancc = '".$_SESSION['mancc']."'";
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
		function capnhattrangthai($manongsan,$trangthai){
			$con;
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring ="update nongsan ";
				$querystring .= "set trangthai='".$trangthai."'";
				//echo $trangthai;
				$querystring .= " where manongsan=".$manongsan;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		function capnhattrangthaidangban($manongsan,$trangthai){
			$con;
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring ="update nongsan ";
				$querystring .= "set trangthai='".$trangthai."'";
				//echo $trangthai;
				$querystring .= " where manongsan=".$manongsan;
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