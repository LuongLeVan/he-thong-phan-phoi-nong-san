<?php

	include_once("../../Model/mtaikhoan.php");
	class ctaikhoan{
		function view_taikhoan(){
			$p = new mtaikhoan();
			$table  = $p -> select_taikhoan();
			//var_dump($table);
			return $table;
		}
		function taotaikhoan($username,$password,$role){
            $p= new mtaikhoan();
            $table = $p->dangkytaikhoan($username,$password,$role);
            //var_dump($ins);
            if($table){
            	return 1;
            }else{
                return 0; //không   thể insert
		    }
        }
		function select_bv_byid($loaibv){
            $p= new mtaikhoan();
            $table = $p->select_bv_id($loaibv);
            //var_dump($table);
            return $table;
        }
        function select_ttytp_byid($loaittytp){
            $p= new mtaikhoan();
            $table = $p->select_ttytp_id($loaittytp);
            //var_dump($table);
            return $table;
        }
                    
    }



?>