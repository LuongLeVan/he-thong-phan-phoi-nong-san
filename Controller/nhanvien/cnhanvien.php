<?php

	include_once("../../Model/nhanvien/mnhanvien.php");

	class cnhanvien{
		function view_nhanvien(){
			$p = new mnhanvien();
			$table  = $p -> select_nhanvien();
			//var_dump($table);
			return $table;
		}
		
		function capnhat_thongtin($mancc,$tenncc,$sdt,$emai,$diachi,$tinh,$quan,$phuong){
			$p = new mnhanvien();
			$update = $p -> capnhatthongtin($mancc,$tenncc,$sdt,$emai,$diachi,$tinh,$quan,$phuong);
			if($update){
				return 1;
			}else{
				return 0;
			}
		}

		function capnhat_thongtin_nhanvien($manhanvien,$tennhanvien,$sdt,$emai,$diachi,$tinh,$quan,$phuong,$file,$tenanh,$loaianh,$sizeanh){
			if($tenanh !=""){
				if($loaianh == "image/png" || $loaianh == "image/jpeg" ){
					if($sizeanh<=2*1024*1024){
						if(move_uploaded_file($file,"../../img/".$tenanh)){
							$p= new mnhanvien();
							$ins = $p->capnhatthongtin($manhanvien,$tennhanvien,$sdt,$emai,$diachi,$tinh,$quan,$phuong,$tenanh);
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
			}else{
				$p = new mnhanvien();
				$update = $p -> capnhatthongtin_nhanvien($manhanvien,$tennhanvien,$sdt,$emai,$diachi,$tinh,$quan,$phuong);
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