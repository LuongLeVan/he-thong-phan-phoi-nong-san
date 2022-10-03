
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
            <h1>Quản lý thông tin nhân viên</h1>
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
                <h3 class="card-title">Danh sách nhân viên | 
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        Thêm nhân viên 
                    </button>
                </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <?php
                  $connection = mysqli_connect("localhost","root","");
                  $db = mysqli_select_db($connection, 'nongsanviet');
                        mysqli_set_charset($connection, 'utf8');


                  $query = "SELECT * FROM nhanvien";
                  $query_run = mysqli_query($connection, $query);

                ?>
              <table id="datatableid" class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Mã nhân viên</th>
                                <th scope="col">Tên nhân viên</th>
                                <th scope="col">Chức vụ</th>
                                <th scope="col">Ảnh đại diện</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Email</th>
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
                                <td> <?php echo $row['manhanvien']; ?> </td>
                                <td> <?php echo $row['tennhanvien']; ?> </td>
                                <td> <?php echo $row['chucvu']; ?> </td>
                                <td> <?php echo "<img style='border-radius: 50%;' width=90px height=90px src='../../img/".$row['hinh']."'/>"; ?> </td>
                <!-- echo "<br>"."<img width=150px height=150px src='image/".$row['ProdImage']."'/>"; -->
                <!-- <td> <img width=50px height=50px src='../../img/soai.jpg'/></td> -->
                                <td> <?php echo $row['sdt']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <!-- <td> <?php //echo $row['id']; ?> </td>
                                <td> <?php //echo $row['fname']; ?> </td>
                                <td> <?php// echo $row['lname']; ?> </td>
                                <td> <?php// echo $row['course']; ?> </td>
                                <td> <?php// echo $row['contact']; ?> </td> -->
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


   <!-- Modal them nong san-->
   <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 600px">
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
                        <div class="form-group">
                            <label> Danh mục nông sản </label>
                            <!-- <input type="text" name="lname" class="form-control" placeholder="Nhập loại nông sản"> -->
                            <select class="form-control" name="" aria-label="Default select example">
                                <option value="1">Trái cây</option>
                                <option value="2">Rau</option>
                                <option value="3">Củ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Loại nông sản </label>
                            <!-- <input type="text" name="lname" class="form-control" placeholder="Nhập loại nông sản"> -->
                            <select class="form-control" name="lname" aria-label="Default select example">
                                <option selected>Xoài</option>
                                <option value="1">Táo</option>
                                <option value="2">Cam</option>
                                <option value="3">Chanh</option>
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

                        <div class="form-group">
                            <label> Nhà cung cấp </label>
                            <input type="number" name="nhacungcap" class="form-control" placeholder="nhập tên nhà cung cấp">
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
                            <label> Loại nông sản </label>
                            <input type="text" name="lname" id="lname" class="form-control"
                                placeholder="Enter Last Name">
                                
                        </div>

                        <div class="form-group">
                            <label> Số lượng </label>
                            <input type="text" name="course" id="course" class="form-control"
                                placeholder="Enter Course">
                        </div>

                        <div class="form-group">
                            <label> Kích thước </label>
                            <input type="text" name="contact" id="contact" class="form-control"
                                placeholder="Enter Phone Number">
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
                    <h5 class="modal-title" id="exampleModalLabel"> View Student Data </h5>
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
                $('#course').val(data[3]);
                $('#contact').val(data[4]);
            });
        });
    </script>

 
                  </body>
                  </html>
