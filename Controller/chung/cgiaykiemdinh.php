<?php
<<<<<<< HEAD
include_once("Model/chung/mgiaykiemdinh.php");
=======
include_once("../Model/chung/mgiaykiemdinh.php");
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291

	class cgiaykiemdinh{
        function hienthi_giaykiemdinh($manongsan){
            $p = new mgiaykiemdinh();
            $tblProduct = $p->xemgiaykiemdinh($manongsan);
            return $tblProduct;
        }
    }
?>