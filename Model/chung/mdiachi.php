<?php

	include_once("ketnoi.php");

	class mdiachi{
		
		function xem_diachi(){
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT tentinh, tenquan, tenphuong, diachi FROM ((nhacungcap join tinh on nhacungcap.matinh = tinh.matinh) join quan on nhacungcap.maquan = quan.maquan) join phuong on nhacungcap.maphuong = phuong.maphuong WHERE mancc = '".$_SESSION['mancc']."' ";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_diachi_admin(){
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT tentinh, tenquan, tenphuong, diachi FROM ((admin join tinh on admin.matinh = tinh.matinh) join quan on admin.maquan = quan.maquan) join phuong on admin.maphuong = phuong.maphuong WHERE maadmin = '".$_SESSION['maadmin']."' ";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_diachi_nhanvien(){
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT tentinh, tenquan, tenphuong, diachi FROM ((nhanvien join tinh on nhanvien.matinh = tinh.matinh) join quan on nhanvien.maquan = quan.maquan) join phuong on nhanvien.maphuong = phuong.maphuong WHERE manhanvien = '".$_SESSION['manhanvien']."' ";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_diachi_khachhang(){
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT tentinh, tenquan, tenphuong, diachi FROM ((khachhang join tinh on khachhang.matinh = tinh.matinh) join quan on khachhang.maquan = quan.maquan) join phuong on khachhang.maphuong = phuong.maphuong WHERE makhachhang = '".$_SESSION['makhachhang']."' ";
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