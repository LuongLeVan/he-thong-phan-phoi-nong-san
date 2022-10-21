<?php
//Require tập tin autoload.php
// require 'dompdf/vendor/autoload.php';
// //Khai báo sử dụng thư viện
// use Dompdf\Dompdf;
// $html = "<div>XIN CHÀO</div>";
// //Khởi tạo đối tượng dompdf
// $dompdf = new Dompdf();

// //Nạp nội dung HTML cần tạo PDF
// $dompdf->loadHtml($html);

// //Khai báo khổ giấy và chiều giấy
// $dompdf->setPaper('A4', 'landscape');

?>
<div><a href="inpdf.php">IN PDF</a></div>
<div><a href="giaykiemdinhnongsan.php">KIEMDINH</a></div>
<?php
//Xuất nội dung với định dạng PDF ra trình duyệt
//$dompdf->render();
// if(isset($_REQUEST['inpdf'])){
// 	//Hoặc xuất thành tập tin PDF để tải về
// 	$dompdf->stream("newfile.pdf");
// }
?>