<?php

	include_once("Model/khachhang/mkhachhang.php");

	class ckhach_hang{
		function view_khachhang(){
			$p = new mkhach_hang();
			$table  = $p -> select_khachhang();
			//var_dump($table);
			return $table;
		}
		function capnhat_thongtin($makhachhang,$tenkhachhang,$sdt,$emai,$diachi,$tinh,$quan,$phuong){
			$p = new mkhach_hang();
			$update = $p -> capnhatthongtin($makhachhang,$tenkhachhang,$sdt,$emai,$diachi,$tinh,$quan,$phuong);
			if($update){
				return 1;
			}else{
				return 0;
			}
		}


		function capnhat_thongtin_khachhang($makhachhang,$tenkhachhang,$sdt,$emai,$diachi,$tinh,$quan,$phuong,$file,$tenanh,$loaianh,$sizeanh){
			if($tenanh !=""){
				if($loaianh == "image/png" || $loaianh == "image/jpeg" ){
					if($sizeanh<=2*1024*1024){
						if(move_uploaded_file($file,"img/".$tenanh)){
							$p= new mkhach_hang();
							$ins = $p->capnhatthongtin($makhachhang,$tenkhachhang,$sdt,$emai,$diachi,$tinh,$quan,$phuong,$tenanh);
							$ins2 = $p->capnhatthongtin_hinh($makhachhang,$tenanh);
							var_dump($ins2);
							var_dump($ins);
							if($ins || $ins2){
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
			}else{
				$p = new mkhach_hang();
				$update = $p -> capnhatthongtinkhachhang($makhachhang,$tenkhachhang,$sdt,$emai,$diachi,$tinh,$quan,$phuong);
				var_dump($update);
				if($update){
					return 1;
				}else{
					return 0;
				}
			}    
			/*$p = new mProduct();
			$update = $p -> UpdateProduct($ProdID,$ten,$gia,$mota,$congty);
			var_dump($update);
			if($update){
				return 1;
			}else{
				return 0;
			}*/
		}
    }



?>