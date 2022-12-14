<?php
//Require tập tin autoload.php
require 'dompdf/vendor/autoload.php';

//Khai báo sử dụng thư viện
use Dompdf\Dompdf;
$hung = 'nguyentanhung';
$html = '
<html lang="en">

<head>
    <title>Trang Sản Phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        .title{
            text-align: center;
            margin-top: 40px;
        }
        .border-top, .border-left, .border-right, .border-bottom{
          border: 3px solid #000 !important;
          font-size: 15px !important;
        }

        .text-align {
          
        }
        .title-top {
          margin-left: 150px;
          position: relative;
          display: block;
        }
        .title-right {
          float: right;
          position: absolute;
          top: 80px;
          right: 500px;
        }
        .date-item {
          margin-left: 800px;
          margin-bottom: 20px;
        }
        .date-item img{
          width: 200px;
          height: 150px;
        }
       .info-detail{
            margin-top: 32px;
        }
        .wrapper-detail{
            display: flex;
            justify-content: flex-start;
            margin-bottom: 16px;
        }
        .info {
            margin-left: 14px;
        } 
        h4 {
         color: blue !important;
        }

    </style>
</head>

<body class="goto-here main-content">
   <div class="container border-top border-left border-right border-bottom">
    <div class="wrap-info">
      <br>
      <div class="title-top">
        <h4>SỞ Y TẾ TP.HCM</h4>
        <h5>Trung tâm Kiểm nghiệm quốc gia</h5>
        <h6> <u> Số 12 / 2022 / KNTP</u></h6>
      </div>
      <?php
        
        include("Controller/chung/cgiaykiemdinh.php");
        $p = new cgiaykiemdinh();
        if(isset($_REQUEST["xemgiaykiemdinh"])){
            $ns = $_REQUEST["xemgiaykiemdinh"];
            $tblnongsan = $p->hienthi_giaykiemdinh($ns);
        }else{
            //$tblnongsan = $p->();
        }
        if($tblnongsan){
          if(mysqli_num_rows($tblnongsan)>0){
              $dem = 0; 
              
              while($row = mysqli_fetch_assoc($tblnongsan)){
                  if($dem==0){      
                  }
                 
      ?>
      <!-- <div class="title-right">
        <h4 >CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h4>
        <h5 >Dộc lập - tự do - hạnh phúc</h5>
      </div> -->
      
        <h2 class="title">GIẤY KIỂM NGHIỆM NÔNG SẢN</h2>
        <div class="div-df" style="display: flex;">
            <div class="info-detail" style="margin-left:100px ;">
                <h6 class="info-1">1. Tên mẫu thử</h6>
                <h6 class="info-3">2. Cơ sở sản xuất</h6>
                <h6 class="info-5">3. Trụ sở</h6>
                <h6 class="info-7">4. Ngày nhận mẫu</h6>
                <h6 class="info-11">6. Tình trạng mẫu</h6>

            </div>
            <div class="info-detail" style="margin-left: 200px;">
                <h6 class="info"><?php echo $row["tennongsan"]; ?></h6>
                <h6 class="info"><?php echo $row["tenncc"]; ?></h6>
                <h6 class="info"><?php echo $row["diachi"]; ?></h6>
                <h6 class="info">16/9/2011</h6>
                <h6 class="info">Đóng kính túi nilon</h6>


            </div>
        </div>
        <!-- <div class="info-detail">
            <div class="wrapper-detail">
                <h4 class="info-1">1. Tên mẫu thử</h4>
                <h4 class="info">Hành củ khô</h4>
            </div>
            <div class="wrapper-detail">
                <h4 class="info-3">2. Cơ sở sản xuất</h4>
                <h4 class="info">Công ty TNHH MTV TMDL</h4>
            </div>
            <div class="wrapper-detail">
                <h4 class="info-5">3. Trụ sở</h4>
                <h4 class="info">Số 229 Nam Hòa - P Long Phước</h4>
            </div>
            <div class="wrapper-detail">
                <h4 class="info-7">4. Ngày nhận mẫu</h4>
                <h4 class="info">16/9/2011</h4>
            </div>
            <div class="wrapper-detail">
                <h4 class="info-9">5. Lượng mẫu</h4>
                <h4 class="info">03 túi/ 1 mẫu</h4>
            </div>
            <div class="wrapper-detail">
                <h4 class="info-11">6. Tình trạng mẫu</h4>
                <h4 class="info">Đóng kính túi nilon</h4>
            </div>
        </div> -->
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Thứ tự</th>
            <th scope="col">Tên chỉ tiêu</th>
            <th scope="col">Đơn vị tính</th>
            <th scope="col">Kết quả</th>
            <th scope="col-4">Kỹ thuật</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">I. Chỉ tiêu vi sinh</th>
          </tr>
          
          <tr>
            <th scope="row">1</th>
            <td>Tổng số vi khuẩn hiếu khí</td>
            <td>KL/g</td>
            <td><?php echo $row["chisovikhuanhieukhi"]; ?></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Tổng số vi khuẩn kỵ khí</td>
            <td>KL/g</td>
            <td><?php echo $row["chisovikhuankykhi"]; ?></td>

          </tr>

          <tr>
            <th scope="row">II. Chỉ tiêu hóa sinh</th>
            
          </tr>
          
          <tr>
            <th scope="row">1</th>
            <td>Chỉ số nấm mốc</td>
            <td>KL/g</td>
            <td><?php echo $row["nammoc"]; ?></td>
            

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dộ ẩm</td>
            <td>KL/g</td>
            <td><?php echo $row["doam"]; ?></td>

          </tr>
        </tbody>
      </table>
      <div class="date-item">
        <p>TP.HCM Ngày 20 tháng 10 năm 2022</p>
        <img  src="img/condau3.png" alt="">
      </div>
      <?php
                $dem++;
                  if($dem%4==0){
                   $dem = 0;
                  }
                }
                //echo "</table>";
              }else{
                echo "0 redult";
              }
            }else{
              echo "Khong co gia tri";
            }
          ?>
      
</div>

    <script src="/script/script.js"></script>
    <script src="/script/products.js"></script>

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>


</body>
</html>';
//echo $html;
require_once dirname(__FILE__) . '/dompdf/autoload.inc.php'; //$rendererLibrary;
//Khởi tạo đối tượng dompdf
$dompdf = new Dompdf();

//Nạp nội dung HTML cần tạo PDF
$dompdf->loadHtml($html, 'UTF-8');

//
//$dompdf->setCharset('utf-8');
//Khai báo khổ giấy và chiều giấy
$dompdf->setPaper('A4');

//Xuất nội dung với định dạng PDF ra trình duyệt
$dompdf->render();

//Hoặc xuất thành tập tin PDF để tải về
$dompdf->stream("file.pdf");