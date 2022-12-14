<?php

	include_once("../../Model/chung/mthemnongsan.php");

	class cnongsan{
		function themnongsan($manhacungcap, $tennongsan, $maloai, $soluong, $kichthuoc, $file, $tenanh,  $loaianh, $sizeanh){
        if ($loaianh == "image/jpeg" || $loaianh == "image/png") {
            if ($sizeanh <= 2 * 1024 * 1024) {
                if (move_uploaded_file($file,"../../img/".$tenanh)) {
                    $p = new mnongsan();
                    $ins = $p->them_nongsan($manhacungcap, $tennongsan, $maloai, $soluong, $kichthuoc, $tenanh);
                    //var_dump($ins);
                    if ($ins) {
                        return 1;
                    } else{
                        return 0;
                    }
                } else {
                    return -1;
                }
            } else {
                return -2;
            }
        } else {
            return -3;
        }
    }
    }



?>