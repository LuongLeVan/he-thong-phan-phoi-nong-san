<?php
include_once("Model/chung/mgiaykiemdinh.php");

	class cgiaykiemdinh{
        function hienthi_giaykiemdinh($manongsan){
            $p = new mgiaykiemdinh();
            $tblProduct = $p->xemgiaykiemdinh($manongsan);
            return $tblProduct;
        }
    }
?>