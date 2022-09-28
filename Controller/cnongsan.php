<?php

	include_once("../../Model/mnongsan.php");

	class cnongsan{
		function view_nongsan(){
			$p = new mnongsan();
			$table  = $p -> select_nongsan();
			//var_dump($table);
			return $table;
		}
    }



?>