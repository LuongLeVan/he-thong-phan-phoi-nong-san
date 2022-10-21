<?php

	include_once("../../Model/chung/mtinnhucau.php");

	class ctinnhucau{
		function view_tinnhucau(){
			$p = new mtinnhucau();
			$table  = $p -> select_tinnhucau();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan();
			//var_dump($table);
			return $table;
		}
		function getAllchitietBynongsan($comp){
                $p = new mnongsan();
                $tblProduct = $p->SelectAllchitietBynongsan($comp);
                return $tblProduct;
            }

		function capnhat_trangthai($mabaitin,$trangthai){
			$p = new mtinnhucau();
			$update = $p -> capnhattrangthai($mabaitin,$trangthai);
			if($update){
				return 1;
			}else{
				return 0;
			}
		} 

    }



?>