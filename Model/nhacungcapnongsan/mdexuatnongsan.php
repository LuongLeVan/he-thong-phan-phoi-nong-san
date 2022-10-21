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
        class modelphieudexuat{
            function SelectAllphieudexuat(){
                $con;
                $p = new clsketnoi();
                if($p->ketnoiDB($con)){
                    $string = "select * from phieudexuat";
                    $table = mysqli_query($con,$string);
                    $p->dongketnoi($con);
                    return $table;
                }else{
                    return false;
                }
            }
        }
    ?>
</body>
</html>