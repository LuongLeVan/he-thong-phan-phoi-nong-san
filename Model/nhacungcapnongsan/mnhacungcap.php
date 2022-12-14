<?php

	include_once("Model/chung/ketnoi.php");

	class mnhacungcap{
		function select_nhacungcap(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM nhacungcap  WHERE username = '".$_SESSION['matk']."' ";
				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function capnhatthongtin($mancc,$tenncc,$sdt,$emai,$diachi,$tinh,$quan,$phuong,$hinh){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update nhacungcap ";
				$querystring .= " set tenncc='".$tenncc."',sdt=".$sdt.",diachi='".$diachi."',matinh='".$tinh."',maquan='".$quan."',hinh='".$hinh."',maphuong=".$phuong;
				$querystring .= " where mancc=".$mancc;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		function capnhatthongtin_hinh($mancc,$hinh){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update nhacungcap ";
				$querystring .= " set hinh='".$hinh."'";
				$querystring .= " where mancc=".$mancc;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		
		function capnhatthongtinncc($mancc,$tenncc,$sdt,$emai,$diachi,$tinh,$quan,$phuong){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring="update nhacungcap ";
				$querystring .= " set tenncc='".$tenncc."',sdt=".$sdt.",diachi='".$diachi."',matinh='".$tinh."',maquan='".$quan."',maphuong=".$phuong;
				$querystring .= " where mancc=".$mancc;
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