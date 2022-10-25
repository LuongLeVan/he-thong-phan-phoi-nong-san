<?php

	include_once("Model/khachhang/mdnkhachhang.php");

	class ckhachhang{
		function view_khachhang(){
			$p = new mkhachhang();
			$table  = $p -> select_khachhang();
			//var_dump($table);
			return $table;
		}
    }



?>