<?php
	
	include_once("ketnoi.php");
	
	class msanpham{
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
		function hienthichitietsanpham($comp){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
				$string = "select * from (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join qrcode on nongsan.manongsan = qrcode.manongsan where nongsan.manongsan= ".$comp;
				//echo $string;
				$table = mysqli_query($con,$string);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
		function xemchitietdathang($comp){
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
		function tao_donhangkhachhang($makhachhang,$mancc,$manongsan,$trangthai,$tongtien,$thanhtoan){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
				$string = "insert into donhang(makhachhang, manhacungcap, manongsan, trangthai, tongtien, hinhthucthanhtoan) values";
				$string .= "('$makhachhang','$mancc','$manongsan','$trangthai','$tongtien','$thanhtoan')";

				//echo $string;
				$kq = mysqli_query($con,$string);
				echo $string;
				//var_dump($kq);
				$p->dongketnoi($con);
				return $kq;
			}else{	
				return false;
			}
		}
<<<<<<< HEAD
		function tao_donhangkhachhangnganhang($makhachhang,$mancc,$manongsan,$trangthai,$tongtien,$magiaodichvnpay,$manganhang){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
				$string = "insert into donhang(makhachhang, manhacungcap, manongsan, trangthai, tongtien, magiaodichvnpay, manganhang) values";
				$string .= "('$makhachhang','$mancc','$manongsan','$trangthai','$tongtien','$magiaodichvnpay','$manganhang')";

				//echo $string;
				$kq = mysqli_query($con,$string);
				echo $string;
				//var_dump($kq);
				$p->dongketnoi($con);
				return $kq;
			}else{	
				return false;
			}
		}
		function tao_donhangncc($makhachhang,$mancc,$manongsan,$trangthai,$tongtien,$thanhtoan){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
=======
		function tao_donhangncc($makhachhang,$mancc,$manongsan,$trangthai,$tongtien,$thanhtoan){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
				$string = "insert into donhang(makhachhang, manhacungcap, manongsan, trangthai, tongtien, hinhthucthanhtoan) values";
				$string .= "('$makhachhang','$mancc','$manongsan','$trangthai','$tongtien','$thanhtoan')";

				//echo $string;
				$kq = mysqli_query($con,$string);
				echo $string;
				//var_dump($kq);
				$p->dongketnoi($con);
				return $kq;
			}else{	
				return false;
			}
		}
	}
	



?>