<?php

	include_once("Model/nhacungcapnongsan/mdnnhacungcap.php");

	class cnhacungcap{
		function view_nhacungcap(){
			$p = new mnhacungcap();
			$table  = $p -> select_nhacungcap();
			//var_dump($table);
			return $table;
		}
    }



?>