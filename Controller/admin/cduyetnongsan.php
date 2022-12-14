<?php

	include_once("Model/chung/mnongsan.php");

	class duyetnongsan{
		function view_nongsan(){
			$p = new mnongsan();
			$table  = $p -> select_nongsan();
			//var_dump($table);
			return $table;
		}
		function getAllchitietBynongsan($comp){
                $p = new mnongsan();
                $tblProduct = $p->SelectAllchitietBynongsan($comp);
                return $tblProduct;
            }

		function capnhat_trangthai($manongsan,$trangthai){
			$p = new mnongsan();
			$update = $p -> capnhattrangthai($manongsan,$trangthai);
			if($update){
				return 1;
			}else{
				return 0;
			}
		} 

    }



?>