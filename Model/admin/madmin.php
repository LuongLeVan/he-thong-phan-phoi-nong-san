<?php

	include_once("Model/chung/ketnoi.php");

	class madmin{
		function select_admin(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM admin  WHERE username = '".$_SESSION['matk']."' ";
				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
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

		function capnhatthongtin_admin($maadmin,$tenadmin,$sdt,$emai,$diachi,$tinh,$quan,$phuong){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update admin ";
				$querystring .= " set tenadmin='".$tenadmin."',sdt=".$sdt.",diachi='".$diachi."',matinh='".$tinh."',maquan='".$quan."',maphuong=".$phuong;
				$querystring .= " where maadmin=".$maadmin;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		function capnhatthongtin($maadmin,$tenadmin,$sdt,$emai,$diachi,$tinh,$quan,$phuong,$hinh){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update admin ";
				$querystring .= " set tenadmin='".$tenadmin."',sdt=".$sdt.",diachi='".$diachi."',matinh='".$tinh."',maquan='".$quan."',hinh='".$hinh."',maphuong=".$phuong;
				$querystring .= " where maadmin=".$maadmin;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		function capnhatthongtin_hinh($maadmin,$hinh){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update admin ";
				$querystring .= " set hinh='".$hinh."'";
				$querystring .= " where maadmin=".$maadmin;
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