<?php
session_start();
include('../../Create_a_QR_Code_in_PHP/library/php_qr_code/qrlib.php'); // Include a library for PHP QR code
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nongsanviet');
mysqli_set_charset($connection, 'utf8');

    if(isset($_POST['updatedata'])){   
        $id = $_POST['update_id']; 
	$_SESSION['id']=$id;

    }
	echo $_SESSION['id'];
	

	$query = "SELECT * FROM nongsan WHERE manongsan = '".$_SESSION['id']."'";


	$execute = mysqli_query($connection,$query);
	 while($row = mysqli_fetch_array($execute)){
		$fullname = 'https://nsvietnam.000webhostapp.com/?manongsan='.$row["manongsan"];
		 //$fullname = $_SESSION['id'];
		// $fullname .= $row['tennongsan'];
		 //$fullname .= $row['soluong'];
	
	 }
	
	 // var_dump($row);
	 // $fullname = implode(' ',$row);
	 echo $fullname;
	
	
	 if(isset($_REQUEST['updatedata']) and $_REQUEST['updatedata']!=""){

		//its a location where generated QR code can be stored.
		$qr_code_file_path = dirname(__FILE__).DIRECTORY_SEPARATOR.'qr_assets'.DIRECTORY_SEPARATOR;
		$set_qr_code_path = 'qr_assets/';
	
		// If directory is not created, the create a new directory 
		if(!file_exists($qr_code_file_path)){
			mkdir($qr_code_file_path);
		}
		//Set a file name of each generated QR code
		$filename	=	$qr_code_file_path.time().'.png';

		
	/* All the user generated data must be sanitize before the processing */
	 if (isset($_REQUEST['level']) && $_REQUEST['level']!='')
		$errorCorrectionLevel = $_REQUEST['level'];
	
	 if (isset($_REQUEST['size']) && $_REQUEST['size']!='')
		$matrixPointSize = $_REQUEST['size'];
		
		//$frm_link	=	$_REQUEST['frm_qr'];
		$frm_link	=	$fullname;
		
		// After getting all the data, now pass all the value to generate QR code.
		QRcode::png($frm_link, $filename, $errorCorrectionLevel, $matrixPointSize, 3);
		$tenhinh = basename($filename);
		$query2 = "INSERT INTO qrcode (`hinh`,`manongsan`) VALUES ('$tenhinh','".$_SESSION['id']."')";

		$query_run = mysqli_query($connection, $query2);
		echo $query2;
		echo $query_run;
	}

    
    
    //echo $query2;
    //echo $query_run;
	echo "<script>alert('Tạo mã QR thành công')</script>";
	echo "<script>
		 	window.location.href='../../trangquanly.php?taomaqr';
	 </script>"; 

	?>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
		
		
		
		<!--Only these JS files are necessary--> 
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>   
	</body>
	</html>