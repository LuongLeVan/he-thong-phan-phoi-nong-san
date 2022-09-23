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
                $conn = mysql_connect("localhost","admin","123456");
                mysql_set_charset("utf8");
                if($conn){
                    return mysql_select_db("nonsanviet");
                }else{
                    return false;
                }
            }

            function dongketnoi($conn){
                mysql_close($conn);
            }
        }
    ?>
</body>
</html>