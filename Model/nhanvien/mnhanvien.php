<?php

	include_once("../../Model/chung/ketnoi.php");

	class mnhanvien{
		function select_nhanvien(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM nhanvien  WHERE username = '".$_SESSION['matk']."' ";
				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}

		function capnhatthongtin_nhanvien($manhanvien,$tennhanvien,$sdt,$email,$diachi,$tinh,$quan,$phuong){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update nhanvien ";
				$querystring .= " set tennhanvien='".$tennhanvien."',sdt=".$sdt.",email='".$email."',diachi='".$diachi."',matinh='".$tinh."',maquan='".$quan."',maphuong=".$phuong;
				$querystring .= " where manhanvien=".$manhanvien;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		

		function capnhatthongtin($manhanvien,$tennhanvien,$sdt,$emai,$diachi,$tinh,$quan,$phuong,$hinh){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update nhanvien ";
				$querystring .= " set tennhanvien='".$tennhanvien."',sdt=".$sdt.",diachi='".$diachi."',matinh='".$tinh."',maquan='".$quan."',hinh='".$hinh."',maphuong=".$phuong;
				$querystring .= " where manhanvien=".$manhanvien;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}

		function capnhatthongtin_nhanvien_hinh($manhanvien,$hinh){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update nhanvien ";
				$querystring .= " set hinh='".$hinh."'";
				$querystring .= " where manhanvien=".$manhanvien;
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