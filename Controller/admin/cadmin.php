<?php

	include_once("Model/admin/madmin.php");

	class cadmin{
		function view_admin(){
			$p = new madmin();
			$table  = $p -> select_admin();
			//var_dump($table);
			return $table;
		}
		function view_nhanvien(){
			$p = new madmin();
			$table  = $p -> select_nhanvien();
			//var_dump($table);
			return $table;
		}

		function capnhat_thongtin_admin($maadmin,$tenadmin,$sdt,$email,$diachi,$tinh,$quan,$phuong,$file,$tenanh,$loaianh,$sizeanh){
			if($tenanh !=""){
				if($loaianh == "image/png" || $loaianh == "image/jpeg" ){
					if($sizeanh<=2*1024*1024){
						if(move_uploaded_file($file,"img/".$tenanh)){
							$p= new madmin();
							$ins = $p->capnhatthongtin_admin($maadmin,$tenadmin,$sdt,$email,$diachi,$tinh,$quan,$phuong,$tenanh);
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
				$p = new madmin();
				$update = $p -> capnhatthongtin_admin($maadmin,$tenadmin,$sdt,$email,$diachi,$tinh,$quan,$phuong);
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