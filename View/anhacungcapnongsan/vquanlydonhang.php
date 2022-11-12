
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nông sản Việt</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
    

         
         
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý đơn hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý đơn hàng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách các đơn hàng</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <form action="#" method="post" enctype="multipart/form-data">
                  <?php
                    include("../../Controller/chung/cnongsan.php");
                    $p = new cnongsan();
                    $table = $p-> hienthi_donhang();
                    //var_dump($table);
                    //var_dump(mysqli_fetch_assoc($table));
                    if($table){
                      $dem = 0;
                      echo '<table class="table table-hover text-nowrap">';
                      echo '<thead>';
                        echo '<tr>';
                          echo '<th>Mã đơn hàng</th>';
                          echo '<th>Tên nông sản</th>';
                          echo '<th>Tên khách hàng</th>';
                          echo '<th>Trạng thái đơn hàng</th>';
                          echo '<th>Chi tiết</th>';
                          echo '<th></th>';
                          echo '<th>Tác vụ</th>';
                      echo '</tr>';
                     echo '</thead>';
                        while($row = mysqli_fetch_assoc($table)){
                          if ($dem == 0){
                            echo '<tbody>';
                            echo "<tr>";
                           }
                           if($row['trangthai'] == 'chotiepnhan'){
                            echo '<tr style="background-color: #ef98a7">';
                            echo '<td style="border: non;">'.'<input style="border: none; background-color: #ef98a7" type="text" name="manongsan" value="'.$row["madonhang"].'">'.'</td>';
                            echo '<td>'.'<input style="border: none; background-color: #ef98a7" type="text" name="tennongsan" value="'.$row["tennongsan"].'">'.'</td>';
                            echo '<td>'.$row["tenkhachhang"].'</td>';
                            echo '<td>'.'<input style="border: none; background-color: #ef98a7" type="text" name="trangthai" value="'.$row["trangthai"].'">'.'</td>';
                            echo '<td>';
                            echo '<button class="btn btn-primary" >'."<a  style='color:white; text-decoration: none' href='../../trangsanpham.php?chitietnongsan=".$row["manongsan"]."'>"."Xem chi tiết"."</a>"."</button>".'&nbsp';
                            echo '</td>';
                            echo '<td>';
                            echo "</td><td><a href='trangchuadmin.php?doitrangthai=".$row['manongsan']."'>Duyệt | </a><a style='color: red' href='trangchuadmin.php?tuchoi=".$row['manongsan']."'>Từ chối</a>";
                            echo '</td>';
                            $dem++;
                            if ($dem %1 ==0) {
                              echo '</tr>';
                              echo '</tbody>';
                                echo "</tr>";
                                $dem = 0;
                            }
                           }
                           if($row['trangthai'] == 'datiepnhan'){
                            echo '<tr style="background-color: #a1c7ed;">';
                            echo '<td style="border: non;">'.'<input style="border: none; background-color: #a1c7ed" type="text" name="manongsan" value="'.$row["madonhang"].'">'.'</td>';
                            echo '<td>'.'<input style="border: none; background-color: #a1c7ed" type="text" name="tennongsan" value="'.$row["tennongsan"].'">'.'</td>';
                            echo '<td>'.$row["tenkhachhang"].'</td>';
                            echo '<td>'.'<input style="border: none; background-color: #a1c7ed" type="text" name="trangthai" value="'.$row["trangthai"].'">'.'</td>';
                            echo '<td>';
                            echo '<button class="btn btn-primary" >'."<a  style='color:white; text-decoration: none' href='../../trangsanpham.php?chitietnongsan=".$row["manongsan"]."'>"."Xem chi tiết"."</a>"."</button>".'&nbsp';
                            echo '</td>';
                            echo '<td>';
                            echo "</td><td><a href='trangchuadmin.php?doitrangthai=".$row['manongsan']."'>Duyệt | </a><a style='color: red' href='trangchuadmin.php?tuchoi=".$row['manongsan']."'>Từ chối</a>";
                            echo '</td>';
                            $dem++;
                            if ($dem %1 ==0) {
                              echo '</tr>';
                              echo '</tbody>';
                                echo "</tr>";
                                $dem = 0;
                            }
                           }
                           if($row['trangthai'] == 'dadonggoi'){
                            echo '<tr style="background-color: #c7de99">';
                            echo '<td style="border: non;">'.'<input style="border: none; background-color: #c7de99" type="text" name="manongsan" value="'.$row["madonhang"].'">'.'</td>';
                            echo '<td>'.'<input style="border: none; background-color: #c7de99" type="text" name="tennongsan" value="'.$row["tennongsan"].'">'.'</td>';
                            echo '<td>'.$row["tenkhachhang"].'</td>';
                            echo '<td>'.'<input style="border: none; background-color: #c7de99" type="text" name="trangthai" value="'.$row["trangthai"].'">'.'</td>';
                            echo '<td>';
                            echo '<button class="btn btn-primary" >'."<a  style='color:white; text-decoration: none' href='../../trangsanpham.php?chitietnongsan=".$row["manongsan"]."'>"."Xem chi tiết"."</a>"."</button>".'&nbsp';
                            echo '</td>';
                            echo '<td>';
                            echo "</td><td><a href='trangchuadmin.php?doitrangthai=".$row['manongsan']."'>Duyệt | </a><a style='color: red' href='trangchuadmin.php?tuchoi=".$row['manongsan']."'>Từ chối</a>";
                            echo '</td>';
                            $dem++;
                            if ($dem %1 ==0) {
                              echo '</tr>';
                              echo '</tbody>';
                                echo "</tr>";
                                $dem = 0;
                            }
                           }
                           if($row['trangthai'] == 'dathanhtoan'){
                            echo '<tr style="background-color: #f9e3a1">';
                            echo '<td style="border: non;">'.'<input style="border: none; background-color:  #f9e3a1" type="text" name="manongsan" value="'.$row["madonhang"].'">'.'</td>';
                            echo '<td>'.'<input style="border: none; background-color:  #f9e3a1" type="text" name="tennongsan" value="'.$row["tennongsan"].'">'.'</td>';
                            echo '<td>'.$row["tenkhachhang"].'</td>';
                            echo '<td>'.'<input style="border: none; background-color:  #f9e3a1" type="text" name="trangthai" value="'.$row["trangthai"].'">'.'</td>';
                            echo '<td>';
                            echo '<button class="btn btn-primary" >'."<a  style='color:white; text-decoration: none' href='../../trangsanpham.php?chitietnongsan=".$row["manongsan"]."'>"."Xem chi tiết"."</a>"."</button>".'&nbsp';
                            echo '</td>';
                            echo '<td>';
                            echo "</td><td><a href='trangchuadmin.php?doitrangthai=".$row['manongsan']."'>Duyệt | </a><a style='color: red' href='trangchuadmin.php?tuchoi=".$row['manongsan']."'>Từ chối</a>";
                            echo '</td>';
                            $dem++;
                            if ($dem %1 ==0) {
                              echo '</tr>';
                              echo '</tbody>';
                                echo "</tr>";
                                $dem = 0;
                            }
                           }
                            
                      }
                      echo '</table>';
                    }
                  ?>
                  </form>
              </div>
              
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
                  </body>
                  </html>
