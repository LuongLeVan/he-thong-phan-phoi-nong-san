<?php

	include_once("Model/mdndoanhnghiep.php");

	class cdoanhnghiep{
		function view_doanhnghiep(){
			$p = new mdoanhnghiep();
			$table  = $p -> select_doanhnghiep();
			//var_dump($table);
			return $table;
		}
    }



?>