
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

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
    <style>
        input[type="file"] {
        /* display: none;  */
        }
    .custom-file-upload {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom:50px;
        color: blue;

    }
    .update_img {
        position: relative;
        
    }
    </style>
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
            <h1>Quản lý thông tin nông sản</h1>
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
    <form action="#" method="post" enctype="multipart/form-data">

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
                <h3 class="card-title">Danh sách nông sản | 
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        Thêm nông sản 
                    </button>
                </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <?php
                  $connection = mysqli_connect("localhost","root","");
                  $db = mysqli_select_db($connection, 'nongsanviet');
                        mysqli_set_charset($connection, 'utf8');


                  $query = "SELECT * FROM (nongsan join nhacungcap on nongsan.manhacungcap = nhacungcap.mancc) join loainongsan on nongsan.maloai = loainongsan.maloai where mancc = '".$_SESSION['mancc']."'";
                  $query_run = mysqli_query($connection, $query);

                ?>
              <table id="datatableid" class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Mã nông sản</th>
                                <th scope="col">Tên nông sản</th>
                                <th scope="col">Loại nông sản</th>
                                <th scope="col">Hình</th>
                                <th scope="col" style="display: none;">Trọng lượng</th>
                                <th scope="col" style="display: none;">Kích thước</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">mô tả</th>
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

                             <?php //echo '<td><input style="border: none;" type="text" name="manongsan" value="'.$row['manongsan'].'"></td>'; ?>
                                <td> <?php echo $row['tennongsan']; ?> </td>
                                <td> <?php echo $row['tenloai']; ?> </td>
                                <form action="#" method="post" enctype="multipart/form-data">
                                <td class='update_img'> <?php echo "<img width=100px height=100px src='../../img/".$row['hinhanh']."'/>"; ?>    
                                    <div>
                                        <?php //echo "<input class='custom-file-upload' type='file' name='fflie'>"; 
                                            echo '<input style="display: none;" type="text" name="maloai" id="" value="'.$row["maloai"].'">';
                                            echo '<input style="display: none;" type="text" name="manongsan" id="" value="'.$row["manongsan"].'">';

                                        ?>
                                        <?php //echo "<a href='trangquanly.php?capnhathinhanhnongsan=".$row['manongsan']."'>Cập nhật</a>";?>
                                        <!-- <input type="submit"  name="btnsubmit" class="btn btn-success" value="chọn" id="add"> -->
                                    </div>
                                </td>
                                
                                </form>
            
                                <td style="display: none;"> <?php echo $row['trongluong']; ?> </td>
                                <td style="display: none;"> <?php echo $row['kichthuoc']; ?> </td>
                                <td> <?php echo $row['soluong']; ?> </td>
                                <td> 
                                    <?php 
                                       //echo '<input type="text" name="" id="" value="'.$row['mota'].'">';
                                       echo '<textarea name="mota" id="" cols="30" rows="5" value="'.$row['mota'].'">'.$row["mota"].'</textarea>';
                                    ?> 
                                </td>


                                <!-- <td> <?php //echo $row['id']; ?> </td>
                                <td> <?php //echo $row['fname']; ?> </td>
                                <td> <?php// echo $row['lname']; ?> </td>
                                <td> <?php// echo $row['course']; ?> </td>
                                <td> <?php// echo $row['contact']; ?> </td> -->
                                <td>
                                    <!-- <button type="button" class="btn btn-info chitietbtn"> Chi tiết </button> |  -->
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
       
      </div><!-- /.container-fluid -->
    </section>
    </form>
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

                <form action="../../ajax/nhacungcapnongsan/themnongsan.php" method="POST">

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

                <form action="../../ajax/nhacungcapnongsan/capnhatnongsan.php" method="POST">

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


<!-- Chi tiết nông sản nông sản -->
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

                <form action="../../ajax/nhacungcapnongsan/capnhatnongsan.php" method="POST">

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

                <form action="../../ajax/nhacungcapnongsan/xoanongsan.php" method="POST">

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


    <script>
        $(document).ready(function () {

            $('.chitietbtn').on('click', function () {

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
                /* var str = $.trim(data[7]);
                $('#mota').val(str);
                */

            });
        });
    </script>

<?php
if(isset($_REQUEST["btnsubmit"])){
    $file=$_FILES["fflie"]["tmp_name"];
    $type=$_FILES["fflie"]["type"];
    $name=$_FILES["fflie"]["name"];
    $size=$_FILES["fflie"]["size"];
    $_SESSION['name']=$name;    
    $_SESSION['type']=$type;    
    $_SESSION['file']=$file;    
    $_SESSION['size']=$size;    
    $_SESSION['maloai']=$_REQUEST["maloai"];
    $_SESSION['manongsan']=$_REQUEST["manongsan"];


    //echo $_SESSION['name'];
}
?>
 
                  </body>
                  </html>
