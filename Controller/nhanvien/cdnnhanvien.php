<?php

	include_once("Model/nhanvien/mdnnhanvien.php");

	class cnhanvien{
		function view_nhanvien(){
			$p = new mnhanvien();
			$table  = $p -> select_nhanvien();
			//var_dump($table);
			return $table;
		}
    }



?>