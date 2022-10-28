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
        class clsketnoi{
            function ketnoiDB(& $conn){
                $conn = mysqli_connect("localhost","root","");
                //mysqli_select_db($conn,'altislife-dev');
                mysqli_set_charset($conn, 'utf8');
                if($conn){
                    return mysqli_select_db($conn,"nongsanviet");
                }else{
                    return false;
                }
            }

            function dongketnoi($conn){
                mysqli_close($conn);
            }
        }
    ?>
</body>
</html>