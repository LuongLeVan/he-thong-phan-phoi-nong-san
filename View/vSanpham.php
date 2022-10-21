<?php

	include("Controller/cSanpham.php");

	$p = new cSanpham();
	if(isset($_REQUEST['hang'])){
		$mahs = $_REQUEST['hang'];
		$table_sanpham = $p -> view_sanpham_by_hangsua($mahs); 
	}else{
		$count = $p -> count_sanpham();
		$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		$limit = 10;
		$total_page = $p -> get_total_page($count,$limit);
		if ($page > $total_page){
			
            	$page = $total_page;
        	}
        else if ($page < 1){
            	$page = 1;
       	}
		
		$table_sanpham = $p-> get_all_sanpham_page($page,$limit);
	}
	/////
	if($table_sanpham){
		if(mysql_num_rows($table_sanpham)>0){
			$dem = 0;
			echo "<table style='width:100%;text-align:center'>";
			//echo "<h3 style='text-align: center'>THÔNG TIN SẢN PHẨM</h3>";
			//echo "<tr style='text-align:center'><td colspan='5'><H3>THÔNG TIN CÁC SẢN PHẨM</H3></td></tr>";
			while($row = mysql_fetch_assoc($table_sanpham)){
				if($dem == 0){
					echo "<tr>";
				}
				echo "<td style='width:20%;height:100px;border: 3px solid aqua'>";
				echo "<b><a href='index.php?masua=".$row['masua']."'>".$row['tensua']."</a></b><br>";
				echo $row['trongluong']."gr - ".$row['dongia']."VNĐ<br>";
				echo "<img width='150px' height='165px' src='IMAGE/".$row['hinhanh']."'></img>";
				echo "</td>";
				$dem++;
				if($dem%5==0){
					echo "</tr>";
					$dem = 0;
				}
			}
			echo "</table>";
		}else{
			echo "0 có sản phẩm";
		}
		
	}else{
		echo "Lỗi";
	}

	///CHỌN TRANG HIỂN THỊ
	echo "<div style='text-align:right;'>";
	if ($page > 1 && $total_page > 1){
                echo '<a href="index.php?page='.($page-1).'">Prev</a> | ';
    }
	// Lặp khoảng giữa
   	for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
        if ($i == $page){
            echo '<span style="font-size:28px">'.$i.'</span> | ';
        }
        else{
				echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
            }
     }
     // nếu page < $total_page và total_page > 1 mới hiển thị nút prev
     if ($page < $total_page && $total_page > 1){
		 echo '<a href="index.php?page='.($page+1).'">Next</a> | ';
     }
	echo "</div>";



?>