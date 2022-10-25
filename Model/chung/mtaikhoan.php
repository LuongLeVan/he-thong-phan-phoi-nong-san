<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once("ketnoi.php");
        class mtaikhoan{
            function dangkytaikhoan($username,$password,$role){
                $con;
                $p = new clsketnoi();
                if($p->ketnoiDB($con)){
                    $string = "insert into taikhoan(username, password, role) values";
                    $string .= "(N'".$username."',N'".$password."',N'".$role."')";
                    //echo $string;
                    $kq = mysqli_query($con,$string);
                    //var_dump($kq);
                    $p->dongketnoi($con);
                    return $kq;
                }else{
                    return false;
                }
            } 
            function dangkytaikhoan_khachhang($username,$tenkhachhang,$sdt,$email){
                $con;
                $p = new clsketnoi();
                if($p->ketnoiDB($con)){
                    $string = "insert into khachhang(username, tenkhachhang, sdt, email) values";
                    $string .= "(N'".$username."',N'".$tenkhachhang."',N'".$sdt."',N'".$email."')";
                    echo $string;
                    $kq = mysqli_query($con,$string);
                    //var_dump($kq);
                    $p->dongketnoi($con);
                    return $kq;
                }else{
                    return false;
                }
            }         
        }
    ?>
</body>
</html>