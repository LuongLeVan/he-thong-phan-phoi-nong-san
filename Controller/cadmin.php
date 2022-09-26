<?php

	include_once("../../Model/madmin.php");

	class cadmin{
		function view_admin(){
			$p = new madmin();
			$table  = $p -> select_admin();
			//var_dump($table);
			return $table;
		}
    }



?>