<?php
	
	include("../Model/chung/mblog.php");
	
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
	
	}



?>