
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
            <h1>Xem phiếu kiểm định nông sản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Duyệt bài nông sản</li>
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
                <h3 class="card-title">Danh sách các phiếu kiểm định</h3> 

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

                    include("Controller/chung/cnongsan.php");

                    $p = new cnongsan();
                    $table = $p-> hienthi_giaykiemdinh_all();
                    if($table){
                      $dem = 0;
                      echo '<table class="table table-hover text-nowrap">';
                      echo '<thead>';
                        echo '<tr>';
                          echo '<th>Mã nông sản</th>';
                          echo '<th>Tên nông sản</th>';
                          echo '<th>Người tạo</th>';
                          //echo '<th>Chi tiết</th>';
                         // echo '<th></th>';
                          echo '<th>Tác vụ</th>';
                      echo '</tr>';
                     echo '</thead>';
                        while($row = mysqli_fetch_assoc($table)){
                          if ($dem == 0){
                            echo '<tbody>';
                            echo "<tr>";
                           }
          
                              echo '<td style="border: non;">'.'<input type="text" name="manongsan" value="'.$row["manongsan"].'">'.'</td>';
                              echo '<td>'.'<input type="text" name="tennongsan" value="'.$row["tennongsan"].'">'.'</td>';
                              //<input type="text" name="tenbn" value="'.$row["tenbn"].'">
                              echo '<td>'.$row["tenncc"].'</td>';
                             // echo '<td>'.'<input type="text" name="tt" value="3">'.'</td>';

                              //echo '<td>'.$row["trangthai"].'</td>';
                              echo '<td>';
                              echo '<button class="btn btn-primary" >'."<a  style='color:white; text-decoration: none' href='trangquanly.php?chitietphieukiemdinh=".$row["manongsan"]."'>"."Xem chi tiết"."</a>"."</button>".'&nbsp';
                              echo '</td>';
                              //echo '<td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>';
                              //echo '<td>';
                              //echo '<input type="submit"  name="btnsubmit" class="btn btn-success" value="Xác nhận" id="add">';
                              //echo "</td><td><a href='trangchuadmin.php?doitrangthai=".$row['manongsan']."'>Duyệt | </a><a style='color: red' href='trangchuadmin.php?tuchoi=".$row['manongsan']."'>Từ chối</a>";
                              //echo "</td><td><a href='admin.php?upProd&&compID=".$row['CompID']."&&ProdID=".$row['ProdID']."'>Sửa|</a><a href='admin.php?delProd&&ProdID=".$row['ProdID']."'>Xóa</a>";



                                //echo '<a href="#"><i class="fa fa-check" aria-hidden="true"></i></a>  |
                                //<a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>';
                              //echo '</td>';
                              $dem++;
                              if ($dem %1 ==0) {
                                echo '</tr>';
                                echo '</tbody>';
                                  echo "</tr>";
                                  $dem = 0;
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
