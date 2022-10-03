<?php

	include("../../Controller/cadmin.php");

	$p = new cadmin();
	$table = $p-> view_admin();
	if($table){
			echo '<div class="content-wrapper">';
				
				echo '<section class="content-header">';
				  echo '<div class="container-fluid">';
					echo '<div class="row mb-2">';
					  echo '<div class="col-sm-6">';
						echo '<h1>Thông tin cá nhân của admin</h1>';
					  echo '</div>';
					  echo '<div class="col-sm-6">';
					  echo '</div>';
					echo '</div>';
				  echo '</div><!-- /.container-fluid -->';
				echo '</section>';
				//<!-- Main content -->
				echo '<section class="content">';
				  echo '<div class="container-fluid">';
					echo '<div class="row">';
					  echo '<div class="col-md-6">';
					  echo '</div>';
					  echo '<div class="col-md-6">';
					  echo '</div>';
					echo '</div>';
					echo '<div class="row">';
					  echo '<div class="col-12">';
						echo '<div class="card">';
						  echo '<div class="card-header">';
							echo '<div class="card-tools">';
							  echo '<div class="input-group input-group-sm" style="width: 150px;">';
								echo '<input type="text" name="table_search" class="form-control float-right" placeholder="Search">';
								echo '<div class="input-group-append">';
								  echo '<button type="submit" class="btn btn-default">';
									echo '<i class="fas fa-search"></i>';
								  echo '</button>';
								echo '</div>';
							  echo '</div>';
							echo '</div>';
						  echo '</div>';
						  echo '<div class="card-body table-responsive p-0">';
							echo '<table class="table table-hover text-nowrap">';
							  echo '<thead>';
								echo '<tr>';
								  echo '<th>Mã bài</th>';
								  echo '<th>Tên bài</th>';
								  echo '<th>Ngàytaọ</th>';
								  echo '<th>Nội dung</th>';
								  echo '<th>Tác vụ</th>';
								echo '</tr>';
							  echo '</thead>';
							  while($row = mysqli_fetch_array($table)){
								//echo "1";
								//echo "<b><a href='trangchuadmin.php?maadmin=".$row['maadmin']."'>".$row['tenadmin']."</a></b>";
								
								$_SESSION['maadmin'] = $row['maadmin'];  
								$_SESSION['tenadmin'] = $row["tenadmin"];
							  echo '<tbody>';
								echo '<tr>';
								  echo '<td>'.$row["maadmin"].'</td>';
								  echo '<td>Phiếu 001</td>';
								  echo '<td>15/9/2022</td>';
								  echo '<td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>';
							   
								  echo '<td>';
									echo '<a href="#"><i class="fa fa-check" aria-hidden="true"></i></a>  |
									<a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>';
								  echo '</td>';
								echo '</tr>';
							  echo '</tbody>';
							echo '</table>';
						  echo '</div>';
			
						echo '</div>';
						//<!-- /.card -->
					  echo '</div>';
					echo '</div>';
					echo '</div>';
					//<!-- /.row -->
				  echo '</div>';//<!-- /.container-fluid -->
				echo '</section>';
				//<!-- /.content -->
			  echo '</div>';
			
		}
	}


	
?>