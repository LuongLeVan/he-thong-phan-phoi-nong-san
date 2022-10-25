<?php
	
	include("Model/chung/msanpham.php");
	
	class csanpham{
		function getAllchitietBynongsan($comp){
			$p = new msanpham();
			$tblProduct = $p->SelectAllchitietBynongsan($comp);
			return $tblProduct;
		}
		function xemchitietsanpham($comp){
			$p = new msanpham();
			$tblProduct = $p->hienthichitietsanpham($comp);
			return $tblProduct;
		}
		function tao_donhang_khachhang($makhachhang,$mancc,$manongsan,$trangthai,$soluong,$thanhtoan){
			$p = new msanpham();
			$ins = $p->tao_donhangkhachhang($makhachhang,$mancc,$manongsan,$trangthai,$soluong,$thanhtoan);
			if($ins){
				return 1;
			}else{
				return 0;

			}
		}
		function tao_donhang_ncc($makhachhang,$mancc,$manongsan,$trangthai,$soluong,$thanhtoan){
			$p = new msanpham();
			$ins = $p->tao_donhangncc($makhachhang,$mancc,$manongsan,$trangthai,$soluong,$thanhtoan);
			if($ins){
				return 1;
			}else{
				return 0;

			}
		}
	}



?>