
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
  <title>Nông sản Việt</title>
=======
  <title>AdminLTE 3 | Simple Tables</title>
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<<<<<<< HEAD
  <link rel="stylesheet" href="style.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
=======
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../dist/js/ajaxdanhmuc.js"></script>

>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
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
            <h1>Kiểm định nông sản</h1>
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
<<<<<<< HEAD
                <h3 class="card-title">Danh sách các bài nông sản chờ Kiểm định</h3> 

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
                    $table = $p-> hienthi_nongsan_chokiemdinh();
                    if($table){
                      $dem = 0;
                      echo '<table class="table table-hover text-nowrap">';
                      echo '<thead>';
                        echo '<tr>';
                          echo '<th>Mã nông sản</th>';
                          echo '<th>Tên nông sản</th>';
                          echo '<th>Người tạo</th>';
                          echo '<th>Trạng thái kiểm định</th>';
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
                              echo '<td>'.'<input type="text" name="trangthai" value="'.$row["trangthai"].'">'.'</td>';
                             // echo '<td>'.'<input type="text" name="tt" value="3">'.'</td>';

                              //echo '<td>'.$row["trangthai"].'</td>';
                              echo '<td>';
                              echo '<button class="btn btn-primary" >'."<a  style='color:white; text-decoration: none' href='trangquanly.php?chitietkiemdinh=".$row["manongsan"]."'>"."Kiểm định"."</a>"."</button>".'&nbsp';
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
              
=======
                <h3 class="card-title">Danh sách nông sản
                </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <?php
                  $connection = mysqli_connect("localhost","root","");
                  $db = mysqli_select_db($connection, 'nongsanviet');
                        mysqli_set_charset($connection, 'utf8');

                  $query = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai";
                  $query_run = mysqli_query($connection, $query);

                ?>
              <table id="datatableid" class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Mã nông sản</th>
                                <th scope="col">Tên nông sản</th>
                                <th scope="col">Loại nông sản</th>
                                <th scope="col">Hình</th>
                                <th scope="col">Trọng lượng</th>
                                <th scope="col">Kích thước</th>
                                <th scope="col" style="display: none;">Số lượng</th>
                                <th scope="col" style="display: none;">Số lượng</th>
                                <th scope="col"> Tác vụ </th>
                                
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['manongsan']; ?> </td>
                                <td> <?php echo $row['tennongsan']; ?> </td>
                                <td> <?php echo $row['tennhacungcap']; ?> </td>
                                <td> <?php echo $row['tenloai']; ?> </td>
                                <td> <?php echo "<img width=80px height=80px src='../../img/".$row['hinhanh']."'/>"; ?> </td>
                                <td> <?php echo $row['trongluong']; ?> </td>
                                <td> <?php echo $row['kichthuoc']; ?> </td>
                                <td style="display: none;"> <?php echo $row['soluong']; ?> </td>
                                <td style="display: none;"> <?php echo $row['mota']; ?> </td>
                                <td>
                                    <!-- <button type="button" class="btn btn-info viewbtn"> Chi tiết </button> |  -->
                                    <button type="button" class="btn btn-success editbtn"> Kiểm định </button> | 
                                    <button type="button" class="btn btn-danger deletebtn"> Từ chối </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
              </div>
               
              <!-- /.card-body -->
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
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
<<<<<<< HEAD
=======


   <!-- Modal them nong san-->
   <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 120%">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm nông sản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../Model/themnongsan.php" method="POST">

                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label> Tên nông sản </label>
                            <input type="text" name="fname" class="form-control" placeholder="Nhập tên nông sản">
                        </div>
                        <div class="col-md-6"><label class="labels">Chọn danh mục nông sản</label>
                    <select name="danhmuc2" class="form-control danhmuc2" id="select">
                        <option value="">Danh mục nông sản</option>
                        <?php
                            $conn = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($conn, 'nongsanviet');
                                mysqli_set_charset($conn, 'utf8');
                            $sql = "select * from danhmucnongsan";
                            $query = mysqli_query($conn, $sql);
                            $num = mysqli_num_rows($query);          
                            if($num >0){
                                while($row = mysqli_fetch_array($query)){

                            ?>
                                <option value="<?php echo $row['madanhmuc'];?>"><?php echo $row['tendanhmuc'];?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                    </div>

                    <div class="col-md-6"><label class="labels">Chọn loại nông sản</label>
                    <select name="loai2" class="form-control loai2" id="select">
                        <option value="">loại nông sản</option>
                    </select>
                    </div>

                        <div class="form-group">
                            <label> Số lượng </label>
                            <input type="text" name="course" class="form-control" placeholder="Nhập số lượng">
                        </div>

                        <div class="form-group">
                            <label> Kích thước </label>
                            <input type="number" name="contact" class="form-control" placeholder="nhập kích thước">
                        </div>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Lưu</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Cập nhật nông sản -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Cập nhật nông sản </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../Model/capnhatnongsan.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> Tên nông sản </label>
                            <input type="text" name="fname" id="fname" class="form-control"
                                placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label> Số lượng </label>
                            <input type="text" name="soluong" id="soluong" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> Kích thước </label>
                            <input type="text" name="contact" id="contact" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> Mô tả </label>
                            <input type="text" name="mota" id="mota" class="form-control">
                        </div>

                        <div class="col-md-6"><label class="labels">Chọn danh mục nông sản</label>
                    <select name="danhmuc" class="form-control danhmuc" id="select">
                        <option value="">Danh mục nông sản</option>
                        <?php
                            
                            $sql = "select * from danhmucnongsan";
                            $query = mysqli_query($conn, $sql);
                            $num = mysqli_num_rows($query);          
                            if($num >0){
                                while($row = mysqli_fetch_array($query)){

                            ?>
                                <option value="<?php echo $row['madanhmuc'];?>"><?php echo $row['tendanhmuc'];?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                    </div>
                    <div class="col-md-6"><label class="labels">Chọn loại nông sản</label>
                    <select name="loai" class="form-control loai" id="select">
                        <option value="">loại nông sản</option>
                    </select>
                    </div>

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Xóa nông sản-->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Xóa nông sản </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../Model/xoanongsan.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Bạn có thực sự muốn xóa nông sản này không</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Quay lại </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Xóa </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Thông tin chi tiết nông sản </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../Model/cxemchitietnongsan.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Tên nông sản </label>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>

                        <p id="fname"> </p>
                        <h4 id="fname"> 
                            <?php
                                //echo $row['tenncc'];
                            ?>
                        </h4>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Đóng </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>


    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: ".php",
                    dataType: "", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });
        });
    </script>


    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#fname').val(data[1]);
                $('#lname').val(data[2]);
                $('#soluong').val(data[6]);
                $('#contact').val(data[5]);
                $('#mota').val(data[7]);

            });
        });
    </script>

>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
 
                  </body>
                  </html>
