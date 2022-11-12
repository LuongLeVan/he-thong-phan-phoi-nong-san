<?php

	include_once("../../Model/mdiachi.php");

	class cdiachi{
		function hienthi_diachi(){
			$p = new mdiachi();
			$table  = $p -> xem_diachi();
			//var_dump($table);
			return $table;
		} 

    }



?>