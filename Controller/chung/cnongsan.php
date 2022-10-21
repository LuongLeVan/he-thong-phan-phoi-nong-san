<?php

	include_once("../../Model/chung/mnongsan.php");

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
		function hienthi_giaykiemdinh_all(){
			$p = new mnongsan();
			$table  = $p -> xem_giaykiemdinh_all();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan_chuaban(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_chuaban();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan_chuakiemdinh(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_chuakiemdinh();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan_chokiemdinh(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_chokiemdinh();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan_bituchoi(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_bituchoi();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan_bituchoi_kiemdinh(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_bituchoi_kiemdinh();
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
		function hienthi_giaykiemdinh($manongsan){
            $p = new mnongsan();
            $tblProduct = $p->hienthigiaykiemdinh($manongsan);
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
		function capnhat_trangthai_yeucauhotro($manongsan,$trangthai){
			$p = new mnongsan();
			$update = $p -> capnhattrangthaiyeucauhotro($manongsan,$trangthai);
			if($update){
				return 1;
			}else{
				return 0;
			}
		}
		function capnhat_trangthai_kiemdinh_chapnhan($manongsan,$trangthai,$danhgiancc,$danhgianhanvien,$vikhuankykhi,$vikhuanhieukhi,$doam,$nammoc,$luongmauthu){
			$p = new mnongsan();
			$update = $p -> capnhattrangthaiphieukiemdinhchapnhan($manongsan,$trangthai,$danhgiancc,$danhgianhanvien,$vikhuankykhi,$vikhuanhieukhi,$doam,$nammoc,$luongmauthu);
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
		function tao_phieu_kiemdinh($manongsan,$trangthai){
			$p = new mnongsan();
			$ins = $p->tao_phieukiemdinh($manongsan,$trangthai);
			if($ins){
				return 1;
			}else{
				return 0;

			}
		}
    }



?>