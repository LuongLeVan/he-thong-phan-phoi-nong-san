
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thông tin người dùng</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <td> <?php echo "<img class='rounded-circle mt-5'
            width='150px' src='../../img/".$_SESSION['hinh']."'/>"; ?> </td>

            <span class="font-weight-bold">
            <?php
                echo $_SESSION['tenncc'];
              ?>
            </span><span class="text-black-50">
            <?php
                echo $_SESSION['email'];
              ?>
            </span><span> </span>
        </div>
      </div>
      <div class="col-md-8 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Cập nhật thông tin</h4>
          </div>
          <div class="row mt-6">
            <div class="col-md-12"><label class="labels">Họ và Tên</label>
              <p class="user-infor form-control">
              <?php
                echo $_SESSION['tenncc'];
              ?>
              </p>
            </div>

          <div class="row mt-6">
            <div class="col-md-6"><label class="labels">Số điện thoại</label>
              <p class="user-infor form-control">
              <?php
                echo $_SESSION['sdt'];
              ?>
              </p>
            </div>
            <div class="col-md-6"><label class="labels">Email ID</label>
              <p class="user-infor form-control">
              <?php
                echo $_SESSION['email'];
              ?>
              </p>
            </div>
            <div class="col-md-6"><label class="labels">Chọn tỉnh / thành phố</label>
            <select name="" class="form-control tinh" id="select">
                <option value="">Thành phố</option>
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
            <select name="" class="form-control quan" id="select">
                <option value="">Quận/Huyện</option>
            </select>
            </div>
            <div class="col-md-6"><label class="labels">Chọn phường / xã</label>
            <select name="" class="form-control phuong" id="select">
                <option value="">Phường/Xã</option>
            </select>
            </div>
            <div class="col-md-6"><label class="labels">Nhập số nhà - đường</label>
              <p class="user-infor form-control">12/12</p>
            </div>
            <div class="col-md-12"><label class="labels">Mô tả</label>
              <p class="user-infor form-control">12/12</p>
            </div>
          </div>
          <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Lưu thông tin</button></div>
        </div>
      </div>
      
    </div>
  </div>
  </div>
  </div>
</body>

</html>
