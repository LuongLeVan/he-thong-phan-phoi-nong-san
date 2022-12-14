<?php

	include_once("Model/chung/mdiachi.php");

	class cdiachi{
		function hienthi_diachi(){
			$p = new mdiachi();
			$table  = $p -> xem_diachi();
			//var_dump($table);
			return $table;
		} 
		function hienthi_diachi_admin(){
			$p = new mdiachi();
			$table  = $p -> xem_diachi_admin();
			//var_dump($table);
			return $table;
		} 
		function hienthi_diachi_nhanvien(){
			$p = new mdiachi();
			$table  = $p -> xem_diachi_nhanvien();
			//var_dump($table);
			return $table;
		}
		function hienthi_diachi_khachhang(){
			$p = new mdiachi();
			$table  = $p -> xem_diachi_khachhang();
			//var_dump($table);
			return $table;
		} 

    }



?>