<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>VNPAY RESPONSE</title>
        <!-- Bootstrap core CSS -->
        <link href="/vnpay_php/assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">         
        <script src="/vnpay_php/assets/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <?php
        require_once("./config.php");
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        ?>
        <!--Begin display -->
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">VNPAY RESPONSE</h3>
            </div>
            <div class="table-responsive">
                <div class="form-group">
                    <label >Mã đơn hàng:</label>

                    <label><?php echo $_GET['vnp_TxnRef'] ?></label>
                </div>    
                <div class="form-group">

                    <label >Số tiền:</label>
                    <label><?php echo $_GET['vnp_Amount'] ?></label>
                </div>  
                <div class="form-group">
                    <label >Nội dung thanh toán:</label>
                    <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã phản hồi (vnp_ResponseCode):</label>
                    <label><?php echo $_GET['vnp_ResponseCode'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã GD Tại VNPAY:</label>
                    <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã Ngân hàng:</label>
                    <label><?php echo $_GET['vnp_BankCode'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Thời gian thanh toán:</label>
                    <label><?php echo $_GET['vnp_PayDate'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Kết quả:</label>
                    <label>
                        <?php
                        if ($secureHash == $vnp_SecureHash) {
                            if ($_GET['vnp_ResponseCode'] == '00') {
                                echo "<span style='color:blue'>GD Thanh cong</span>";
                            } else {
                                echo "<span style='color:red'>GD Khong thanh cong</span>";
                            }
                        } else {
                            echo "<span style='color:red'>Chu ky khong hop le</span>";
                        }
                        ?>

                    </label>
                </div> 
            </div>
            <p>
                &nbsp;
            </p>
            <?php
    include ("../../Controller/chung/cthanhtoan.php");
    $_SESSION['tenkhachhang'];
     if($_SESSION['role']==1){
      $makhachhang=$_REQUEST["mancc"];
     }else{
      $makhachhang=$_SESSION["makhachhang"];
     }
     $soluong=$_SESSION["soluong"];
     //$mancc=$_SESSION["mancc"];
     //$thanhtoan=$_REQUEST["thanhtoan"];
     $manongsan = $_SESSION["manongsan"];
     $trangthai = 'dathanhtoan';
     $tongtien = $_GET['vnp_Amount'];
     $magiaodichvnpay = $_GET['vnp_TransactionNo'];
     $manganhang = $_GET['vnp_BankCode'];
     $madonhang = $_GET['vnp_TxnRef'];
     
     $p=new csanpham();
     if($_SESSION['role']==1){
     $kp=$p->tao_donhang_ncc($madonhang,$makhachhang,$manongsan,$trangthai,$tongtien,$magiaodichvnpay,$manganhang);
     //$kp2=$p->tao_chitiethoadon_ncc($madonhang,$manongsan,$soluong);
     }else{
     $kp=$p->tao_donhang_khachhang_nganhang($madonhang,$makhachhang,$manongsan,$trangthai,$tongtien,$magiaodichvnpay,$manganhang);
     //$kp2=$p->tao_chitiethoadon_khachhang($madonhang,$manongsan,$soluong);

     }
    //  include('guimail/sendmail.php');
  
    //  echo $mailnguoinhan = $_REQUEST['email'];
    //  echo $tennguoinhan = $_REQUEST['tenkhachhang'];

    //  include_once("guimail/sendmail.php");
    //  $mail = new cMailer();

    //  $send = $mail -> sendmail($mailnguoinhan, $tennguoinhan, $tongtien);
    //  if($kp==1){
    //   echo "<script>
    //     alert('Bạn đã đặt hàng thành công');
    //     //window.location.href='index.php';
    //   </script>";
    //  }else {
    //      echo "error";
    //  }
    echo "<script>alert('Đã thanh toán thành công')</script>";
    echo "<script>
         window.location.href='../../index.php';
     </script>"; 
 
?>
        </div>  
    </body>
</html>
