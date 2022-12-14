<?php

	include_once("Model/chung/mtinnhucau.php");

	class ctinnhucau{
		function view_tinnhucau(){
			$p = new mtinnhucau();
			$table  = $p -> select_tinnhucau();
			//var_dump($table);
			return $table;
		}
		function hienthi_danhsachtinnhucau(){
			$p = new mtinnhucau();
			$table  = $p -> xem_danhsachtinnhucau();
			//var_dump($table);
			return $table;
		}
		function hienthibaitinnhucau_mabaitin($comp){
			$p = new mtinnhucau();
			$tblProduct = $p->xemtinnhucau_mabaitin($comp);
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