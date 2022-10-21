
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminL| Simple Tables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../dist/js/ajax.js"></script>
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
            <h1>Quản lý thông tin nhà cung cấp</h1>
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
                <h3 class="card-title">Danh sách nhà cung cấp | 
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        Thêm nhà cung cấp 
                    </button>
                </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <?php
                  $connection = mysqli_connect("localhost","root","");
                  $db = mysqli_select_db($connection, 'nongsanviet');
                        mysqli_set_charset($connection, 'utf8');


                  $query = "SELECT * FROM nhacungcap";
                  $query_run = mysqli_query($connection, $query);

                ?>
              <table id="datatableid" class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Mã nhà cung cấp</th>
                                <th scope="col">Tên người đại diện</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Email</th>
                                <th scope="col">username</th>
                                <th scope="col">Tác vụ</th>
                                
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
                                <td> <?php echo $row['mancc']; ?> </td>
                                <td> <?php echo $row['tennguoidaidien']; ?> </td>
                                <td> <?php echo "<img style='border-radius: 50%;' width=90px height=90px src='../../img/".$row['hinh']."'/>"; ?> </td>
                                <td> <?php echo $row['sdt']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['username']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-info viewbtn"> Chi tiết </button> | 
                                    <button type="button" class="btn btn-success editbtn"> Cập nhật </button> | 
                                    <button type="button" class="btn btn-danger deletebtn"> Xóa </button>
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


   <!-- Modal them nha cung cap-->
   <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 150%">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm nhà cung câp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../ajax/admin/themnhacungcap.php" method="POST">

                    <div class="modal-body">
                        <div class="row mt-6">
                            <div class="col-md-6">
                                <label> Username </label>
                                <input type="text" name="fname" class="form-control" placeholder="Nhập username">
                            </div>
                            
                            <div class="col-md-6">
                                <label> Password </label>
                                <input type="text" name="lname" class="form-control" placeholder="Nhập pass">
                            </div>
                        </div>
                        <div class="row mt-12">
                            <div class="col-md-12">
                                <label> Tên người đại diện </label>
                                <input type="text" name="nguoidaidien" class="form-control" placeholder="Nhập tên người đại diện">
                            </div>
                        
                        </div>
                        <div class="row mt-6">
                            <div class="col-md-6">
                                <label> Số điện thoại </label>
                                <input type="text" name="sdt" class="form-control" placeholder="Nhập số điện thoại">
                            </div>
                            
                            <div class="col-md-6">
                                <label> Email </label>
                                <input type="text" name="email" class="form-control" placeholder="Nhập email">
                            </div>
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

    <!-- Cập nhật thông tin nhà cung cấp -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 150%">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Cập nhật thông tin </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../Model/capnhatnhanvien.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">
                        <div class="row mt-12">
                            <div class="col-md-12">
                                <label> Tên người đại diện </label>
                                <input type="text" name="nguoidaidien" id="nguoidaidien" class="form-control" placeholder="Nhập tên người đại diện">
                            </div>
                        </div>
                        <div class="row mt-6">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="">
                            </div>

                            <div class="col-md-6">
                                <label> Số điện thoại </label>
                                <input type="text" name="sdt" id="sdt" class="form-control"
                                    placeholder="Enter Last Name">
                            </div>
                        </div> 
                        <div class="row mt-12">
                            <div class="col-md-12">
                                <label> Số nhà - tên đường </label>
                                <input type="text" name="diachi" class="form-control" placeholder="Nhập tên người đại diện">
                            </div>
                        </div>
                        <div class="row mt-12">
                            <div class="col-md-6"><label class="labels">Chọn tỉnh / thành phố</label>
                                <select name="tinh" class="form-control tinh" id="select">
                                    <option value="">Tỉnh/Thành phố</option>
                                    <?php
                                        $conn = mysqli_connect("localhost","root","");
                                        $db = mysqli_select_db($conn, 'nongsanviet');
                                            mysqli_set_charset($conn, 'utf8');
                                        $sql = "select * from tinh";
                                        $query = mysqli_query($conn, $sql);
                                        $num = mysqli_num_rows($query);          
                                        if($num >0){
                                            while($row = mysqli_fetch_array($query)){

                                        ?>
                                            <option value="<?php echo $row['matinh'];?>"><?php echo $row['tentinh'];?></option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>
                                </div>
                                <div class="col-md-6"><label class="labels">Chọn quận / thành huyện</label>
                                <select name="quan" class="form-control quan" id="select">
                                    <option value="">Quận/Huyện</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6"><label class="labels">Chọn phường / xã</label>
                            <select name="phuong" class="form-control phuong" id="select">
                                <option value="phuong">Phường/Xã</option>
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

    <!-- Xóa nhà cung cấp-->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Xóa nhân viên </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../../ajax/admin/xoanhacungcap.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">
                        <input type="hidden" name="delete_vaitro" id="delete_vaitro">


                        <h4> Bạn có thực sự muốn xóa nhà cung cấp này không</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Quay lại </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Xóa </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Hiển thị chi tiết -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Chi tiết nhân viên </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="text" name="contact" id="contact">
                        <div class="form-group">
                            <label> First Name </label>
                            <input type="text" name="fname" id="fname" class="form-control"
                                placeholder="Enter First Name">
                        </div>

                        <p id="fname"> </p>
                        <h4 id="fname"> 
                            <?php 
                            echo ''; 
                            ?> 
                        </h4>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
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
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
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
                var str = $.trim(data[5]); // xóa khoản cách 2 bên`;
                $('#delete_vaitro').val(str);
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
                $('#nguoidaidien').val(data[3]);
                $('#sdt').val(data[3]);                
            });
        });
    </script>

 
                  </body>
                  </html>
