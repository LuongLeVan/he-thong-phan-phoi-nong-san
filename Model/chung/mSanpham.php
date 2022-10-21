<?php
	
	include_once("ketnoi.php");
	
	class mSanpham{
		function get_sanpham(){
			$conn;
			$p = new clsketnoi();
			if($p -> ketnoiDB($conn)){
				$string = "SELECT * FROM nongsan";
				$table = mysqli_query($conn,$string);
				$p -> dongketnoi($conn);
				return $table;
			}else{
				return false;
			}
		}
		
		//phân trang
		function get_sanpham_phantrang($start,$limit){
			$conn;
			$p = new clsketnoi();
			if($p -> ketnoiDB($conn)){
				$string = "SELECT * FROM nongsan order by manongsan DESC LIMIT $start, $limit";
				$table = mysqli_query($conn,$string);
				//var_dump($table);
				$p -> dongketnoi($conn);
				return $table;
			}else{
				return false;
			}
		}
		//
		function get_product_by_hangsua($mahs){
			$conn;
			$p = new clsketnoi();
			if($p -> ketnoiDB($conn)){
				$string = "SELECT * FROM nongsan WHERE manhacungcap ='".$mahs."'";
				//echo $string;
				$table = mysqli_query($conn,$string);
				//var_dump($table);
				$p -> dongketnoi($conn);
				return $table;
			}else{
				return false;
			}
		}
		///hàm JOIN sanpham voi hangsua
		function join_sanpham_hangsua($masua){
			$conn;
			$p = new ketnoi();
			if($p-> moketnoi($conn)){
				$string = "SELECT * FROM sanpham JOIN hangsua "; 
				$string .= "WHERE sanpham.maHS = hangsua.maHS AND masua =".$masua;
				$kq = mysql_query($string);
				//echo $string;
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		//hàm insert sản phẩm mới
		function insert_sua($tensua,$loaisua,$mahs,$trongluong,$dongia,$thanhphan,$loiich,$name){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "INSERT INTO sanpham (tensua, loaisua, trongluong, dongia, thanhphan, loiich, hinhanh,maHS) values";
				$string .= " (N'".$tensua."',N'".$loaisua."',".$trongluong.",".$dongia.",N'".$thanhphan."',N'".$loiich."'";
				$string .= ",N'".$name."',N'".$mahs."')";
				//echo $string;
				$kq = mysql_query($string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		//hàm thông báo thành công
		function thongbao_sanpham_thanhcong($masua){
			$conn;
			$p = new ketnoi();
			if($p-> moketnoi($conn)){
				$string = "SELECT * FROM sanpham JOIN hangsua "; 
				$string .= "WHERE sanpham.maHS = hangsua.maHS AND masua = ".$masua;
				$kq = mysql_query($string);
				//echo $string;
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		//tìm max mã
		function max_sanpham(){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "SELECT MAX(masua) as max FROM sanpham";
				$kq = mysql_query($string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
		///update_sanpham
		function update_sanpham($masua,$tensua,$loaisua,$trongluong,$dongia,$thanhphan,$loiich,$hinh,$mahs){
			$conn;
			$p = new ketnoi();
			if($hinh !=""){
				if($p -> moketnoi($conn)){
						$string = "UPDATE sanpham ";
						$string .= " SET tensua = N'".$tensua."', loaisua = '".$loaisua."', trongluong = ".$trongluong.", dongia =".$dongia.",thanhphan = '".$thanhphan."',loiich = '".$loiich."',hinhanh='".$hinh."' ";
						$string .= " WHERE masua =".$masua;
						echo $string;
						$kq = mysql_query($string);
						//var_dump($kq);
						$p -> dongketnoi($conn);
						return $kq;
					}else{
						return false;
					}
			
			}else{
				if($p -> moketnoi($conn)){
					$string = "UPDATE sanpham ";
					$string .= " SET tensua = N'".$tensua."', loaisua = '".$loaisua."', trongluong = ".$trongluong.", dongia =".$dongia.",thanhphan = '".$thanhphan."',loiich = '".$loiich."' ";
					$string .= " WHERE masua =".$masua;
					echo $string;
					$kq = mysql_query($string);
					//var_dump($kq);
					$p -> dongketnoi($conn);
					return $kq;
				}else{
					return false;
				}
 			}
		}
		////hàm xóa sản phẩm trong table sản phẩm
		function delete_sanpham($masua){
			$conn;
			$p = new ketnoi();
			if($p -> moketnoi($conn)){
				$string = "DELETE FROM sanpham WHERE masua =".$masua;
				$kq = mysql_query($string);
				$p -> dongketnoi($conn);
				return $kq;
			}else{
				return false;
			}
		}
	}
	



?>