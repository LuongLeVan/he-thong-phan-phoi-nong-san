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
<script type="text/javascript" src="js/chart.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graph"></canvas>
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
                    var bar = $("#graph");
                    var myChart = new Chart(bar, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    data: result,
                                    borderColor: ["rgba(217, 83, 79,1)","rgba(240, 173, 78, 1)","rgba(92, 184, 92, 1)"],
                                    backgroundColor: ["rgba(217, 83, 79,0.2)","rgba(240, 173, 78, 0.2)","rgba(92, 184, 92, 0.2)"],
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Chuyên ngành"
                            }
                        }
                    });
                });
        }
        </script>
        
</body>
</html>