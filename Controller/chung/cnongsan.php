<?php

	include_once("Model/chung/mnongsan.php");

	class cnongsan{
		function view_nongsan(){
			$p = new mnongsan();
			$table  = $p -> select_nongsan();
			//var_dump($table);
			return $table;
		}
		function hienthi_donhang(){
			$p = new mnongsan();
			$table  = $p -> xem_donhang();
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
		function hienthi_nongsan_duocduyetban(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_duocduyetban();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan_chuakiemdinh(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_chuakiemdinh();
			//var_dump($table);
			return $table;
		}
		function hienthi_nongsan_dakiemdinh(){
			$p = new mnongsan();
			$table  = $p -> xem_nongsan_dakiemdinh();
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
            $tblProduct = $p->xemgiaykiemdinh($manongsan);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> bd87a24a518191a0513ff23a987e0e52eb182ab1
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
            return $tblProduct;
        }
		function kiem_dinh($manongsan){
            $p = new mnongsan();
            $tblProduct = $p->kiemdinh($manongsan);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> e4b84782c814da02501c19b9a438eb5386fbc170
>>>>>>> bd87a24a518191a0513ff23a987e0e52eb182ab1
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
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
		function capnhat_thongtin_hinh($manongsan,$mancc,$maloai,$file,$tenanh,$loaianh,$sizeanh){
			if($tenanh !=""){
				if($loaianh == "image/png" || $loaianh == "image/jpeg" ){
					if($sizeanh<=2*1024*1024){
						if(move_uploaded_file($file,"../../img/".$tenanh)){
							$p= new mnongsan();
							$ins = $p->capnhatthongtin_hinh($manongsan,$mancc,$maloai,$tenanh);
							var_dump($ins);
							if($ins){
								return 1;
							}else{
								return 0; //không   thể insert
							}
						}else {
							return -1; //Không thể upload
						}
					}else{
						return -2; //File quá lớn
					}
				}else{
					return -3; //Không đúng định dạng file
				}    
			}
		}

		function themnongsan($manhacungcap, $tennongsan, $maloai, $soluong, $kichthuoc, $file, $tenanh,  $loaianh, $sizeanh){
        if ($loaianh == "image/jpeg" || $loaianh == "image/png") {
            if ($sizeanh <= 2 * 1024 * 1024) {
                if (move_uploaded_file($file,"img/".$tenanh)) {
                    $p = new mnongsan();
                    $ins = $p->them_nongsan($manhacungcap, $tennongsan, $maloai, $soluong, $kichthuoc, $tenanh);
                    //var_dump($ins);
                    if ($ins) {
                        return 1;
                    } else{
                        return 0;
                    }
                } else {
                    return -1;
                }
            } else {
                return -2;
            }
        } else {
            return -3;
        }
    }
    }



?>