<?php

	include_once("Model/khachhang/mdnkhachhang.php");

	class ckhachhang{
		function view_khachhang(){
			$p = new mkhachhang();
			$table  = $p -> select_khachhang();
			//var_dump($table);
			return $table;
		}
		function view_khachhang_google(){
			$p = new mkhachhang();
			$table  = $p -> select_khachhang_google();
			//var_dump($table);
			return $table;
		}
    }



?>