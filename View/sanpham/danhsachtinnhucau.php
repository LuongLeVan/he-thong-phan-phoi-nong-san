<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách tin nhu cầu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
  rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
<link rel="stylesheet" href="./css/blog.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/reponsive.css">
<link rel="stylesheet" href="./css/magnific-popup.css">
<link rel="stylesheet" href="./css/flaticon.css">
<link rel="stylesheet" href="./css/post.css">
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


  <!--  -->
</head>

<body class="goto-here">


  <div class="container">
     <!-- List posts -->
     <h3 class="tilte__list-post">DANH SÁCH CÁC BÀI ĐĂNG TIN NHU CẦU</h3>
     <ul class="header__cart-list-post">
     <?php
include("Controller/chung/ctinnhucau.php");

$p = new ctinnhucau();
$table = $p-> hienthi_danhsachtinnhucau();
if($table){
    while($row = mysqli_fetch_assoc($table)){
        
  
?>

        <li class="header__cart-post">
            <?php echo "<img class='header__cart-image' src='img/".$row['hinh']."'/>"; ?> 

            <div class="header__cart-post-info">
                <div class="header__cart-post-head">
                    <h2 class="header__cart-post-name">
                        <?php
                            echo "<a href='tinnhucaunongsan.php?chitiettinnhucau=".$row['mabaitin']."'>".$row['tenbaitin']."</a>";

                            echo $row['tenbaitin'];
                        ?>
                    </h2>
                  <div class="header__cart-post-wrap">
                    <span class="header__cart-post-date">
                        <i class="fa fa-clock" aria-hidden="true"></i>
                        05-09-2022
                    </span>
                    <span class="header__cart-time">11:31 AM</span>
                  </div>
                </div>
                <div class="header__cart-post-body">
                    <span class="header__cart-post-name-company">
                        <?php
                            echo $row['tendoanhnghiep'];
                        ?>
                    </span>
                    <div class="header__post-contact">
                        <button class="header__cart-post-message">
                            <i class="fa fa-comment" aria-hidden="true"></i>
                            Liên hệ 
                        </button>
                        <button class="header__cart-post-read">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            Xem CV
                        </button>
                    </div>
                </div>
            </div>
        </li>
        <?php
}
}
?>
    </ul>
 <!-- List posts -->

  </div>
 
  <!-- END nav -->




  

  <script src="./script/script.js"></script>

  <!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="./dist/js/demo.js"></script>
<script src="View/adoanhnghiep/script.js"></script>

</body>

</html>
