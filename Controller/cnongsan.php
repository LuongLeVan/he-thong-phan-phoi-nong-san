<?php

	include_once("../../Model/mnongsan.php");

	class cnongsan{
		function view_nongsan(){
			$p = new mnongsan();
			$table  = $p -> select_nongsan();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan_chuaban(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_chuaban();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan_bituchoi(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_bituchoi();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsancomaqr(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsancomaqr();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsanchuacomaqr(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsanchuacomaqr();
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
		function capnhat_trangthai_dangban($manongsan,$trangthai){
			$p = new mnongsan();
			$update = $p -> capnhattrangthaidangban($manongsan,$trangthai);
			if($update){
				return 1;
			}else{
				return 0;
			}
		}

    }



?>