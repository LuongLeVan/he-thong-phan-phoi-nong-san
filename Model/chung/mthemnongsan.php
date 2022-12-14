<?php

	include_once("ketnoi.php");

	class mnongsan{
		function them_nongsan($manhacungcap, $tennongsan, $maloai, $soluong, $kichthuoc, $hinh){
			$p = new clsketnoi();
			if ($p->ketnoiDB($con)) {
				$string = "insert into nongsan(manhacungcap,tennongsan,maloai,soluong,kichthuoc,hinhanh) values";
				$string .= "('".$manhacungcap."','".$tennongsan."','".$maloai."','".$soluong."','".$kichthuoc."','".$hinh."')";
				$kq = mysqli_query($con, $string);
				echo $string;
				$p->dongketnoi($con);
				return $kq;
			} else {
				return false;
			}
    	}
	}
?>