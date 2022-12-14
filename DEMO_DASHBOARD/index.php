<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title></title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
<script type="text/javascript" src="js/chart.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graph"></canvas>
    </div>
    <script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<div class="card card-primary">
    <div class="card-header">
        <h3>Nguyễn Tấn Hùng</h3>
        <div class="card-tools">

        </div>
    </div>

</div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph(){
                $.post("data.php",
                function (data){
                    var labels = [];
                    var result = [];
                    for (var i in data) {
                        labels.push(data[i].status);
                        result.push(data[i].size_status);
                    }
                    var pie = $("#graph");
                    var myChart = new Chart(pie, {
                        type: 'pie',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    data: result,
                                    label: 'Digital Goods',
                                    borderColor: ["rgba(217, 83, 79,1)","rgba(240, 173, 78, 1)","rgba(92, 184, 92, 1)","rgba(72, 104, 92, 0.2)","rgba(97, 180, 95, 0.2)"],
                                    backgroundColor: ["rgba(217, 83, 79,0.2)","rgba(240, 173, 78, 0.2)","rgba(92, 184, 92, 0.2)","rgba(72, 104, 92, 0.2)","rgba(97, 180, 95, 0.2)"],
                                    pointColor          : '#3b8bba',
                                    pointStrokeColor    : 'rgba(60,141,188,1)',
                                    pointHighlightFill  : '#fff',
                                    pointHighlightStroke: 'rgba(60,141,188,1)',
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Người dùng"
                            }
                        }
                    });
                });
        }
        </script>
        
</body>
</html>