<?php

	include_once("ketnoi.php");

	class mgiaykiemdinh{
        function xemgiaykiemdinh($manongsan){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
				//$string = "select * from nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc where manongsan= ".$manongsan;
				$string = "SELECT * FROM ((nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai) join phieukiemdinh on nongsan.manongsan = phieukiemdinh.manongsan where phieukiemdinh.trangthai = 'dakiemdinh' and nongsan.manongsan= ".$manongsan;
				//echo $string;
				$table = mysqli_query($con,$string);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
    }
?>