<?php

	include_once("Model/chung/ketnoi.php");

	class mkhach_hang{
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
		function select_khachhang_google(){
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
		function capnhatthongtin($makhachhang,$tenkhachhang,$sdt,$emai,$diachi,$tinh,$quan,$phuong,$hinh){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update khachhang ";
				$querystring .= " set tenkhachhang='".$tenkhachhang."',sdt=".$sdt.",diachi='".$diachi."',matinh='".$tinh."',maquan='".$quan."',hinh='".$hinh."',maphuong=".$phuong;
				$querystring .= " where makhachhang=".$makhachhang;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		function capnhatthongtin_hinh($makhachhang,$hinh){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update khachhang ";
				$querystring .= " set hinh='".$hinh."'";
				$querystring .= " where makhachhang=".$makhachhang;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		
		function capnhatthongtinkhachhang($makhachhang,$tenkhachhang,$sdt,$emai,$diachi,$tinh,$quan,$phuong){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update khachhang ";
				$querystring .= " set tenkhachhang='".$tenkhachhang."',sdt=".$sdt.",diachi='".$diachi."',matinh='".$tinh."',maquan='".$quan."',maphuong=".$phuong;
				$querystring .= " where makhachhang=".$makhachhang;
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