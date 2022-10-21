<?php
	
	include("Model/chung/mSanpham.php");
	
	class cSanpham{
		function view_sanpham(){
			$p = new mSanpham();
			$table = $p-> get_sanpham();
			return $table;
		}
		///phân trang
		function count_sanpham(){
			$p = new mSanpham();
			$tableProduct = $p ->get_sanpham();
			return mysqli_num_rows($tableProduct);
			//return $tableProduct;
		}
		function get_all_sanpham_page($page,$count){
			$p = new mSanpham();
			//$total_page = ceil($count/$limit);
			$tableProduct = $p -> get_sanpham_phantrang(($page-1)*$count,$count);
			//var_dump($tableProduct);
			return $tableProduct;
		}
		function get_total_page($count,$limit){
			return  ceil($count/$limit);
		}
		//////////
		////
		function view_sanpham_by_hangsua($mahs){
			$p = new mSanpham();
			$table = $p ->  get_product_by_hangsua($mahs);
			//var_dump($table);
			return $table;
		}
		//hàm join sp với hãng sữa
		function view_sanpham_join_hangsua($masua){
			$p = new mSanpham();
			$table = $p -> join_sanpham_hangsua($masua);
			return $table;
		}
		//hàm insert sản phẩm
		function add_product($tensua, $mahs, $loaisua,$trongluong,$dongia,$thanhphan,$loiich, $file, $name, $loaianh, $size){
			if($loaianh == "image/jpeg" || $loaianh == "image/png"){
				if($size <= 2*1024*1024){
					if(move_uploaded_file($file,"IMAGE/".$name)){
						$p = new mSanpham();
						$insert = $p ->insert_sua($tensua,$loaisua,$mahs,$trongluong,$dongia,$thanhphan,$loiich,$name);
						//var_dump($insert);
						if($insert){
							return 1;
						}
						else{
							return 0; //không thể insert
						}
					}else{
						return -1; //không thể upload
					}
				}else{
					return -2; //Size kích thước lơn
				}
			}else{
				return -3; //Không đúng loại file
			}
		}
		//hàm thông báo thêm thành công
		function thongbao_them($masua){
			$p = new mSanpham();
			$table = $p -> thongbao_sanpham_thanhcong($masua);
			return $table;
		}//
		//max masua
		function max_masua(){
			$p = new mSanpham();
			$table  = $p->max_sanpham();
			return $table;
		}
		//chinhsua_sanpham
		function chinhsua_sanpham($masua,$tensua,$loaisua,$hangsua,$dongia,$trongluong,$thanhphan,$loiich,$file,$hinh,$type,$size){
			if($hinh != ""){
				if($type == "image/jpeg" || $type == "image/png"){
					if($size <= 2*1024*1024){
						if(move_uploaded_file($file,"IMAGE/".$hinh)){
							$p = new mSanpham();
							$update = $p -> update_sanpham($masua,$tensua,$loaisua,$trongluong,$dongia,$thanhphan,$loiich,$hinh,$mahs);
							//var_dump($update);
							if($update){
								return 1;
							}
							else{
								return 0; //không thể update
							}
						}else{
							return -1; //không thể upload
						}
					}else{
						return -2; //Size kích thước lơn
					}
				}else{
					return -3; //Không đúng loại file
				}
			}else{
				$p = new mSanpham();
				$update = $p ->update_sanpham($masua,$tensua,$loaisua,$trongluong,$dongia,$thanhphan,$loiich,$hinh,$mahs);
				//var_dump($update);
				if($update){
					return 1;
				}
				else{
					return 0; //không thể update
				}
			}
		}
		////xóa sản phẩm
		function xoa_sanpham($masua){
			$p = new mSanpham();
			$delete = $p ->delete_sanpham($masua);
			return $delete;
		}
	}



?>