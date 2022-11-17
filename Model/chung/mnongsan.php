<?php

	include_once("ketnoi.php");

	class mnongsan{
		function select_nongsan(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc where trangthai='choduyet'";
				//$string = "select * from benhnhan join benhvien on benhnhan.mabv = benhvien.mabv where tt=1";

				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_donhang(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT madonhang, tennongsan, donhang.trangthai, tenkhachhang, nongsan.manongsan  FROM ((donhang join nhacungcap on donhang.manhacungcap = nhacungcap.mancc) join khachhang on donhang.makhachhang = khachhang.makhachhang) join nongsan on donhang.manongsan = nongsan.manongsan";
				//$string = "select * from benhnhan join benhvien on benhnhan.mabv = benhvien.mabv where tt=1";

				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		
		
		function xem_nongsan(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_giaykiemdinh_all(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where trangthaikiemdinh = 'dakiemdinh'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_nongsan_chuaban(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where trangthai = 'choban' and  mancc = '".$_SESSION['mancc']."'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_nongsan_duocduyetban(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where trangthai = 'daduyet' and  mancc = '".$_SESSION['mancc']."'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_nongsan_chuakiemdinh(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where trangthaikiemdinh = 'chuakiemdinh' and  mancc = '".$_SESSION['mancc']."'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_nongsan_chokiemdinh(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM ((nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai) join phieukiemdinh on nongsan.manongsan = phieukiemdinh.manongsan where phieukiemdinh.trangthai = 'chokiemdinh'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_nongsan_dakiemdinh(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM ((nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai) join phieukiemdinh on nongsan.manongsan = phieukiemdinh.manongsan where phieukiemdinh.trangthai = 'dakiemdinh'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		

		function xem_nongsan_bituchoi(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where trangthai = 'tuchoi' and  mancc = '".$_SESSION['mancc']."'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}
		function xem_nongsan_bituchoi_kiemdinh(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where trangthaikiemdinh = 'tuchoi' and  mancc = '".$_SESSION['mancc']."'";
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}

		
		function xem_nongsancomaqr(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join maqr on nongsan.manongsan = maqr.manongsan where mancc = '".$_SESSION['mancc']."'";
				//$string = "select * from (benhvien join benhnhan on benhvien.mabv = benhnhan.mabv) join nhanvienbenhvien on benhvien.mabv = nhanvienbenhvien.mabv) where mabv= ".$comp;

				//$string = "select * from benhnhan join benhvien on benhnhan.mabv = benhvien.mabv where tt=1";

				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}

		function xem_nongsanchuacomaqr(){
			//$aa=mysqli_connect("localhost","admin","1234");
			$p = new clsketnoi();
			if($p -> ketnoiDB($con)){
				$string = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) where maqr = 0 and mancc = '".$_SESSION['mancc']."'";
				//$string = "select * from (benhvien join benhnhan on benhvien.mabv = benhnhan.mabv) join nhanvienbenhvien on benhvien.mabv = nhanvienbenhvien.mabv) where mabv= ".$comp;

				//$string = "select * from benhnhan join benhvien on benhnhan.mabv = benhvien.mabv where tt=1";

				//echo $string;
				$table = mysqli_query($con,$string);
				$p -> dongketnoi($con);
				//var_dump($table);
				return $table;
			}else{
				return false;
			}
		}

		function SelectAllchitietBynongsan($comp){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
				$string = "select * from nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc where manongsan= ".$comp;
				//echo $string;
				$table = mysqli_query($con,$string);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}
		function kiemdinh($manongsan){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
				//$string = "select * from nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc where manongsan= ".$manongsan;
				$string = "SELECT * FROM ((nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai) join phieukiemdinh on nongsan.manongsan = phieukiemdinh.manongsan where nongsan.manongsan= ".$manongsan;
				//echo $string;
				$table = mysqli_query($con,$string);
				$p->dongketnoi($con);
				return $table;
			}else{
				return false;
			}
		}

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

		function capnhattrangthai($manongsan,$trangthai){
			$con;
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring ="update nongsan ";
				$querystring .= "set trangthai='".$trangthai."'";
				//echo $trangthai;
				$querystring .= " where manongsan=".$manongsan;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		function capnhattrangthaiyeucauhotro($manongsan,$trangthai){
			$con;
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring ="update nongsan ";
				$querystring .= "set trangthaikiemdinh='".$trangthai."'";
				//echo $trangthai;
				$querystring .= " where manongsan=".$manongsan;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
		function capnhattrangthaidangban($manongsan,$trangthai){
			$con;
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring ="update nongsan ";
				$querystring .= "set trangthai='".$trangthai."'";
				//echo $trangthai;
				$querystring .= " where manongsan=".$manongsan;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}

		function capnhattrangthaiphieukiemdinhchapnhan($manongsan,$trangthai,$danhgiancc,$danhgianhanvien,$vikhuankykhi,$vikhuanhieukhi,$doam,$nammoc,$luongmauthu){
			$con;
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring ="update phieukiemdinh ";
				//$querystring .= " set ProdName='".$ten."',ProdPrice=".$gia.",ProdDescription='".$mota."',CompID=".$congty;
				$querystring .= "set trangthai='".$trangthai."',danhgiaNCC='".$danhgiancc."',danhgiatunhanvien='".$danhgianhanvien."',chisovikhuankykhi='".$vikhuankykhi."',chisovikhuanhieukhi='".$vikhuanhieukhi."',doam='".$doam."',nammoc='".$nammoc."',luongmauthu='".$luongmauthu."'";
				//echo $trangthai;
				$querystring .= " where manongsan=".$manongsan;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}

		function tao_phieukiemdinh($manongsan,$trangthaikiemdinh){
			$con;
			$p = new clsketnoi();
			if($p->ketnoiDB($con)){
				$string = "insert into phieukiemdinh(manongsan, ngayyeucau, trangthai) values";
				$string .= "('$manongsan',now(),'$trangthaikiemdinh')";

				//echo $string;
				$kq = mysqli_query($con,$string);
				echo $string;
				//var_dump($kq);
				$p->dongketnoi($con);
				return $kq;
			}else{	
				return false;
			}
		}

		function capnhatthongtin_hinh($manongsan,$mancc,$maloai,$hinh){
			$p=new clsketnoi();
			if($p->ketnoiDB($con)){
				$querystring ="update nongsan ";
				$querystring .= " set manhacungcap='".$mancc."',maloai='".$maloai."',hinhanh='".$hinh."'";
				$querystring .= " where manongsan=".$manongsan;
				echo $querystring;
				$kq=mysqli_query($con,$querystring);
				echo $querystring;
				$p->dongketnoi($con);
				return $kq;
			}else{
				return false;
			}
		}
	}
?>