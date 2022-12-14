
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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../dist/js/ajaxdanhmuc.js"></script>

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
            <h1>Quản lý QR code</h1>
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
                <h3 class="card-title">Danh sách nông sản chưa có QR code
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        Thêm nông sản 
                    </button> -->
                </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <?php
                  $connection = mysqli_connect("localhost","root","");
                  $db = mysqli_select_db($connection, 'nongsanviet');
                        mysqli_set_charset($connection, 'utf8');


                  $query = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where maqr = 0 and mancc = '".$_SESSION['mancc']."'";
                  $query_run = mysqli_query($connection, $query);

                ?>
              <table id="datatableid" class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Mã nông sản</th>
                                <th scope="col">Tên nông sản</th>
                                <th scope="col">Loại nông sản</th>
                                <th scope="col">Hình</th>
<<<<<<< HEAD
                                <!-- <th scope="col">Trọng lượng</th> -->
                                <!-- <th scope="col">Kích thước</th> -->
                                <th scope="col" >Số lượng</th>
=======
                                <th scope="col">Trọng lượng</th>
                                <th scope="col">Kích thước</th>
                                <th scope="col" style="display: none;">Số lượng</th>
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
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
                                <td> <?php echo $row['tenloai']; ?> </td>
<<<<<<< HEAD
                                <td> <?php echo "<img width=80px height=80px src='img/".$row['hinhanh']."'/>"; ?> </td>
=======
                                <td> <?php echo "<img width=80px height=80px src='../../img/".$row['hinhanh']."'/>"; ?> </td>
<<<<<<< HEAD
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
                                <!-- <td> <?php //echo $row['trongluong']; ?> </td> -->
                                <!-- <td> <?php //echo $row['kichthuoc']; ?> </td> -->
                                <td> <?php echo $row['soluong']; ?> </td>
=======
                                <td> <?php echo $row['trongluong']; ?> </td>
                                <td> <?php echo $row['kichthuoc']; ?> </td>
                                <td style="display: none;"> <?php echo $row['soluong']; ?> </td>
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
                                <td style="display: none;"> <?php echo $row['mota']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-info editbtn">Tạo mã QR</button>
                                    <!-- <button type="button" class="btn btn-success editbtn"> Cập nhật </button> | 
                                    <button type="button" class="btn btn-danger deletebtn"> Xóa </button> -->
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
            <!--bảng nông sản đã nông sản đã có mã qr -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách nông sản đã có QR code</h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <?php
                  $connection = mysqli_connect("localhost","root","");
                  $db = mysqli_select_db($connection, 'nongsanviet');
                        mysqli_set_charset($connection, 'utf8');


                  $query = "SELECT * FROM ((nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai) join qrcode on nongsan.manongsan = qrcode.manongsan where mancc = '".$_SESSION['mancc']."'";
                  $query_run = mysqli_query($connection, $query);

                ?>
              <table id="datatableid" class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Mã nông sản</th>
                                <th scope="col">Tên nông sản</th>
                                <th scope="col">Loại nông sản</th>
                                <th scope="col">Hình</th>
<<<<<<< HEAD
                                <th style="display: none;" scope="col">Trọng lượng</th>
                                <th scope="col">Mã QR</th>
                                <th scope="col">Số lượng</th>
=======
                                <th scope="col">Trọng lượng</th>
                                <th scope="col">Mã QR</th>
                                <th scope="col" style="display: none;">Số lượng</th>
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
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
                                <td> <?php echo $row['tenloai']; ?> </td>
                                <td> <?php echo "<img width=80px height=80px src='img/".$row['hinhanh']."'/>"; ?> </td>
                <!-- echo "<br>"."<img width=150px height=150px src='image/".$row['ProdImage']."'/>"; -->
                <!-- <td> <img width=50px height=50px src='../../img/soai.jpg'/></td> -->
<<<<<<< HEAD
                                <td style="display: none;"> <?php echo $row['trongluong']; ?> </td>
                                <td> <?php echo "<img width=80px height=80px src='Model/nhacungcapnongsan/qr_assets/".$row['hinh']."'/>"; ?> </td>
                                <td > <?php echo $row['soluong']; ?> </td>
=======
                                <td> <?php echo $row['trongluong']; ?> </td>
                                <td> <?php echo "<img width=80px height=80px src='../../Model/qr_assets/".$row['hinh']."'/>"; ?> </td>
                                <td style="display: none;"> <?php echo $row['soluong']; ?> </td>
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
                                <td style="display: none;"> <?php echo $row['mota']; ?> </td>


                                <!-- <td> <?php //echo $row['id']; ?> </td>
                                <td> <?php //echo $row['fname']; ?> </td>
                                <td> <?php// echo $row['lname']; ?> </td>
                                <td> <?php// echo $row['course']; ?> </td>
                                <td> <?php// echo $row['contact']; ?> </td> -->
                                <td>
<<<<<<< HEAD
                                    <!-- <button type="button" class="btn btn-success editbtn"> Cập nhật mã </button> |  -->
                                    <button type="button" class="btn btn-success deletebtn"> Cập nhật lại mã </button> | 
<<<<<<< HEAD
                                    <a href="download.php?file=<?php echo $row['hinh'];?>" value="">Tải xuống</a>
=======
=======
                                    <button type="button" class="btn btn-success editbtn"> Cập nhật mã </button> | 
                                    <button type="button" class="btn btn-danger deletebtn"> Xóa mã </button> | 
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
                                    <a href="../../download.php?file=<?php echo $row['hinh'];?>" value="">Tải xuống</a>
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291
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
          </div>
        </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>

<<<<<<< HEAD
<!-- Xóa mã -->
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

                <form action="ajax/nhacungcapnongsan/xoamaqr.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4>Việc cập nhật sẽ làm mất mã QR cho nông sản của bạn - Bạn cần tạo lại mã QR nếu muốn cập nhật lại mã</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Quay lại </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Cập nhật </button>
                    </div>
                </form>

            </div>
        </div>
    </div>   
=======

   
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
    <!-- Cập nhật nông sản -->
    <div class="modal fade " id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content row">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Tạo mã QR </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

<<<<<<< HEAD
                <form action="Model/nhacungcapnongsan/mtaomaqrcode.php" method="POST">
=======
<<<<<<< HEAD
                <form action="../../Model/nhacungcapnongsan/mtaomaqrcode.php" method="POST">
=======
                <form action="../../Model/mtaomaqrcode.php" method="POST">
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
>>>>>>> ad47394ee8c720a4c929a8e0de0a263386582291

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">
<<<<<<< HEAD
                        <div class="row mt-6">
                            <div class="form-group col-md-6">
                                <label> Tên nông sản </label>
                                <input type="text" name="tennongsan" id="tennongsan" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label> Loại nông sản </label>
                                <input type="text" name="loai" id="loai" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label> Mô tả </label>
                            <input type="text" name="mota" id="mota" class="form-control">
                        </div>
                        <div class="form-group mt-12">
                            <label> Nguồn gôc xuất xứ </label>
                        </div>
                        <div class="row mt-6">
                            <div class="form-group col-md-4">
                                <label> Tên nhà cung cấp </label>
                                <input type="text" name="tenncc" id="tenncc" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label> số điện thoại </label>
                                <input type="text" name="sdt" id="sdt" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label> Email </label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Địa chỉ </label>
                            <input type="text" name="diachi" id="diachi" class="form-control">
                        </div> -->

                       
                        <div class="form-group">
						<label>Chọn cấp độ mã</label>
						<select name="level" class="form-control">
							<option value="L">Nhỏ</option>
							<option value="M" selected>Trung bình</option>
							<option value="Q">Lớn</option>
							<option value="H">Lớn nhất</option>
						</select>
					</div>
                    <div class="form-group">
						<label>Chọn kích cỡ mã</label>
=======

                        <div class="form-group col-md-6">
                            <label> Tên nông sản </label>
                            <input type="text" name="fname" id="fname" class="form-control"
                                placeholder="Enter First Name">
                        </div>
                        <div class="row mt-6">
                            <div class="form-group col-md-6">
                                <label> Số lượng </label>
                                <input type="text" name="soluong" id="soluong" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Kích thước </label>
                                <input type="text" name="contact" id="contact" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label> Mô tả </label>
                            <input type="text" name="mota" id="mota" class="form-control">
                        </div>
                        <div class="form-group">
						<label>QR Code Level</label>
						<select name="level" class="form-control">
							<option value="L">L - smallest</option>
							<option value="M" selected>M</option>
							<option value="Q">Q</option>
							<option value="H">H - best</option>
						</select>
					</div>
                    <div class="form-group">
						<label>QR Code Size</label>
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
						<select name="size" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
<<<<<<< HEAD
							<option value="4">4</option>
=======
							<option value="4" selected>4</option>
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>

                        

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <!-- <button type="submit" name="updatedata" class="btn btn-primary">Tạo mã</button> -->
					    <input type="submit" name="updatedata" value="Tạo mã" class="btn btn-primary">

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
<<<<<<< HEAD
                $('#tennongsan').val(data[1]);
                $('#loai').val(data[2]);
=======
                $('#fname').val(data[1]);
                $('#lname').val(data[2]);
>>>>>>> cb40d2010451878e806801f4fd735638402ecabe
                $('#soluong').val(data[6]);
                $('#contact').val(data[5]);
                $('#mota').val(data[7]);

            });
        });
    </script>

 
                  </body>
                  </html>
