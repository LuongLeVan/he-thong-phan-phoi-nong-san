<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách tin nhu cầu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
  rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
<link rel="stylesheet" href="./dist/css/post.css">
<link rel="stylesheet" href="./css/flaticon.css">
<link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="./dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


  <!--  -->
</head>

<body class="goto-here">
  <div class="container">
        <div class="wrapper_section">
            <div class="section_left">
            <?php
        
        include("Controller/chung/ctinnhucau.php");
        $p = new ctinnhucau();
        if(isset($_REQUEST["chitiettinnhucau"])){
            $ns = $_REQUEST["chitiettinnhucau"];
            $tblnongsan = $p->hienthibaitinnhucau_mabaitin($ns);
            var_dump($tblnongsan);
        }else{
            //$tblnongsan = $p->();
        }
        if($tblnongsan){
          if(mysqli_num_rows($tblnongsan)>0){
              $dem = 0; 
              //echo'<table class="table">';
              while($row = mysqli_fetch_assoc($tblnongsan)){
                  if($dem==0){      
                  }
                 
      ?>
                <div class="section__left_wrapper">
                    <div class="section_left_info">
                        <div class="wrapper_header">
                            <h3 class="section_left_title">
                                Giám Đốc Sàn Kinh Doanh (Thu Nhập 30 - 50 Triệu)
                                <i class="fa fa-circle-check"></i>
                            </h3>
                            <div class="section_left_description">
                                Đăng 4 giờ trước
                                <span class="section_left_date">
                                    <i class="fa fa-circle circle-icon"></i>
                                    Còn 27 ngày để ứng tuyển
                                </span>
                            </div>
                        </div>
                        <div class="wrapper_content">
                            <a href="#" type="submit" class="btn btn-primary btn-submit btn-submit-form">Ứng tuyển ngay</a>
                        </div>
                    </div>
                                <div class="section_left_required">
                        <h4 class="section_left_required_title">
                            Chi tiết việc làm
                        </h4>

                        <!--  -->
                        <div class="section_left_info_des">
                            <h3 class="section-left-title-des">Thông tin chung</h3>
                            <div class="section_left_merge">
                                <div class="section_left_info_item">
                                    <div class="icon-des">
                                        <img src="https://www.topcv.vn/v4/image/premium-company/1.png" alt="">
                                    </div>
                                    <div class="section_left__content">
                                        <span class="section_left__content-salary">Mức lương</span>
                                        <div class="section_left__number">
                                            30-50 triệu
                                        </div>
                                    </div>
                                </div>
                                <div class="section_left_info_item">
                                    <div class="icon-des">
                                        <img src="https://www.topcv.vn/v4/image/premium-company/2.png" alt="">
                                    </div>
                                    <div class="section_left__content">
                                        <span class="section_left__content-salary">Số lượng tuyển</span>
                                        <div class="section_left__number">
                                            2 người
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section_left_merge">
                                <div class="section_left_info_item">
                                    <div class="icon-des">
                                        <img src="https://www.topcv.vn/v4/image/premium-company/3.png" alt="">
                                    </div>
                                    <div class="section_left__content">
                                        <span class="section_left__content-salary">Hình thức làm việc</span>
                                        <div class="section_left__number">
                                            Toàn thời gian
                                        </div>
                                    </div>
                                </div>
                                <div class="section_left_info_item">
                                    <div class="icon-des">
                                        <img src="https://www.topcv.vn/v4/image/premium-company/4.png" alt="">
                                    </div>
                                    <div class="section_left__content">
                                        <span class="section_left__content-salary">Cấp bậc</span>
                                        <div class="section_left__number">
                                            Giám đốc
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section_left_merge">
                                <div class="section_left_info_item">
                                    <div class="icon-des">
                                        <img src="https://www.topcv.vn/v4/image/premium-company/5.png" alt="">
                                    </div>
                                    <div class="section_left__content">
                                        <span class="section_left__content-salary">Giới tính</span>
                                        <div class="section_left__number">
                                           Không yêu cầu
                                        </div>
                                    </div>
                                </div>
                                <div class="section_left_info_item">
                                    <div class="icon-des">
                                        <img src="https://www.topcv.vn/v4/image/premium-company/6.png" alt="">
                                    </div>
                                    <div class="section_left__content">
                                        <span class="section_left__content-salary">Kinh nghiệm</span>
                                        <div class="section_left__number">
                                            3 năm
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                    
                        </div>
                    </div> 

                    <!--  -->
                    <div class="section_left_location">
                       <p class="location__title">Địa điểm làm việc</p>
                       <div class="location__number">
                            <div class="location__name">- Hồ Chí Minh: 105 Xuân Hồng, Phường 12, Tân Bình</div>
                            <div class="location__name">- Hồ Chí Minh: 345 Vành Đai Trong, Phường Bình Trị Đông B, Bình Tân</div>
                       </div>
                    </div>
                    <div class="section_left_job-data">
                        <h3 class="section_left_job-title">Mô tả công việc</h3>
                        <div class="section__left-job-content">
                            <p>- Tìm hiểu và nắm bắt tất cả các dự án, các phân khúc về sản phẩm của Công ty.</p>
                            <p>- Quản lý toàn bộ hoạt động kinh doanh Sàn giao dịch BĐS của Công ty.</p>
                            <p>- Xây dựng, tổ chức và triển khai kế hoạch, chiến lược kinh doanh cho các dự án của Sàn giao dịch, chịu trách nhiệm trước Ban Tổng Giám đốc về các chỉ tiêu, kế hoạch được giao.</p>
                            <p>- Xây dựng và mở rộng các mối quan hệ với các đối tác, khách hàng.  </p>
                            <p>- Nắm bắt chính xác thông tin về giá cả BĐS, tình hình giao dịch của các dự án lân cận trên thị trường để xây dựng chiến lược kinh doanh của Công ty. Thu thập, tổng hợp, nắm bắt tình hình biến động thị trường, đối thủ cạnh tranh, kịp thời đưa ra các đề xuất và giải pháp.</p>
                            <p>- Hỗ trợ nhân viên kinh doanh trong việc đàm phán, chốt giao dịch với khách hàng. Tổ chức bộ máy làm việc, quản lý, đào tạo và phát triển phòng kinh doanh.</p>
                        </div>

                        <h3 class="section_left_job-title">Yêu cầu ứng viên</h3>
                        <div class="section__left-job-required">
                            <p>- Giới tính: Nam/Nữ, tuổi từ 25 - 40 tuổi</p>
                            <p>- Số năm kinh nghiệm: 2 – 3 năm kinh nghiệm vị trí tương đương trong ngành bất động sản.</p>
                            <p>- Ưu tiên Tốt nghiệp Đại học chuyên ngành: Quản trị kinh doanh, Thương mại, Marketing, Tài chính, Ngân hàng, Luật, Nông Lâm (khoa QLĐĐ & Bất động sản)</p>
                
                        </div>

                        <h3 class="section_left_job-title">Quyền lợi được hưởng</h3>
                        <div class="section__left-job-required">
                            <p>- Lương cơ bản: 30 – 50tr  ( lương + phụ cấp + hoa hồng kinh doanh + doanh số )

                            </p>
                            <p>- Thưởng nóng theo từng dự án + lương tháng 13 + thưởng tết theo kết quả kinh doanh Sàn </p>
                            <p>- Môi trường làm việc chuyên nghiệp, thân thiện, đoàn kết cùng phát triển vì mục tiêu chung</p>
                
                        </div>
                    </div>

                    <div class="section_left-button">
                        <a href="#" type="submit" class="btn btn-primary btn-submit btn-submit-form">Ứng tuyển ngay</a>
                    </div>
                </div>
                <?php
                $dem++;
                  if($dem%4==0){
                   $dem = 0;
                  }
                }
                //echo "</table>";
              }else{
                echo "0 redult";
              }
            }else{
              echo "Khong co gia tri";
            }
          ?>

<!--  -->




            </div>
            <div class="section_right">
                <div class="section_right_artical">
                    <h3 class="section_right_title">Việc làm cùng công ty</h3>
                    <input type="text" class="section_right_input" placeholder="tên công ty, vị trí bạn muốn ứng tuyển"/>
                    <button type="button" class="btn btn-primary btn-search">
                        <i class="fa fa-search"></i>
                        Tìm kiếm
                    </button>
                </div>
                <div class="section_right_more-search">
                    <div class="section_right_item">
                        <div class="section_right_item-wrapper">
                            <a href="#">
                                <h3 class="section_right_item_title">Trưởng Phòng Kinh Doanh (Thu Nhập 25 - 30 Triệu)
                                    <i class="fa fa-circle-check"></i>
                                </h3>
                            </a>
                            <div class="section_right_item_price">
                                <span>18-30 triệu</span>
                                <span>Hồ Chí Minh</span>
                                <span>4 ngày trước</span>
                            </div>
                            <div class="section_right_item_day">
                                Còn <strong>25</strong> ngày để ứng tuyển
                            </div>
                        </div>
                    </div>

                    <div class="section_right_item">
                        <div class="section_right_item-wrapper">
                            <a href="#">
                                <h3 class="section_right_item_title">Trưởng Phòng Kinh Doanh (Thu Nhập 25 - 30 Triệu)
                                    <i class="fa fa-circle-check"></i>
                                </h3>
                            </a>
                            <div class="section_right_item_price">
                                <span>18-30 triệu</span>
                                <span>Hồ Chí Minh</span>
                                <span>4 ngày trước</span>
                            </div>
                            <div class="section_right_item_day">
                                Còn <strong>25</strong> ngày để ứng tuyển
                            </div>
                        </div>
                    </div>
                    <div class="section_right_item">
                        <div class="section_right_item-wrapper">
                            <a href="#">
                                <h3 class="section_right_item_title">Trưởng Phòng Kinh Doanh (Thu Nhập 25 - 30 Triệu)
                                    <i class="fa fa-circle-check"></i>
                                </h3>
                            </a>
                            <div class="section_right_item_price">
                                <span>18-30 triệu</span>
                                <span>Hồ Chí Minh</span>
                                <span>4 ngày trước</span>
                            </div>
                            <div class="section_right_item_day">
                                Còn <strong>25</strong> ngày để ứng tuyển
                            </div>
                        </div>
                    </div>
                    <div class="section_right_item">
                        <div class="section_right_item-wrapper">
                            <a href="#">
                                <h3 class="section_right_item_title">Trưởng Phòng Kinh Doanh (Thu Nhập 25 - 30 Triệu)
                                    <i class="fa fa-circle-check"></i>
                                </h3>
                            </a>
                            <div class="section_right_item_price">
                                <span>18-30 triệu</span>
                                <span>Hồ Chí Minh</span>
                                <span>4 ngày trước</span>
                            </div>
                            <div class="section_right_item_day">
                                Còn <strong>25</strong> ngày để ứng tuyển
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</body>

</html>