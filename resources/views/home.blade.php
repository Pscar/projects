@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-5 px-lg-5">
    <div class="row">
        <div class="col-6">
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ["date", "total", { role: "style" } ],
                        ["ยอดขายปีที่ 1", 15000, "#b87333"],
                        ["ยอดขายปีที่ 2", 12000, "silver"],
                        ["ยอดขายปีที่ 3", 10000, "gold"]
                    ]);

                    var view = new google.visualization.DataView(data);
                    view.setColumns([0, 1,
                                    { calc: "stringify",
                                        sourceColumn: 1,
                                        type: "string",
                                        role: "annotation" },
                                    2]);

                    var options = {
                        title: "ยอดขายรายปี",
                        width: 500,
                        height: 300,
                        bar: {groupWidth: "50%"},
                        legend: { position: "none" },
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                    chart.draw(view, options);
                }
            </script>
            <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
        </div>
        <div class="col-6">
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ["date", "total", { role: "style" } ],
                        ["ยอดขายเดือน 1", 35000, "silver"],
                        ["ยอดขายเดือน 2", 45000, "gold"],
                        ["ยอดขายเดือน 3", 25000, "silver"],
                        ["ยอดขายเดือน 4", 20000, "gold"],
                        ["ยอดขายเดือน 5", 30000, "silver"],
                        ["ยอดขายเดือน 6", 50000, "gold"],
                        ["ยอดขายเดือน 7", 40000, "silver"],
                        ["ยอดขายเดือน 8", 55000, "gold"],
                        ["ยอดขายเดือน 9", 45500, "silver"],
                        ["ยอดขายเดือน 10", 35500, "gold"],
                        ["ยอดขายเดือน 11", 15000, "silver"],
                        ["ยอดขายเดือน 12", 17500, "gold"]
                    ]);

                    var view = new google.visualization.DataView(data);
                    view.setColumns([0, 1,
                                    { calc: "stringify",
                                        sourceColumn: 1,
                                        type: "string",
                                        role: "annotation" },
                                    2]);

                    var options = {
                        title: "ยอดขายแต่ละเดือน",
                        width: 500,
                        height: 300,
                        bar: {groupWidth: "50%"},
                        legend: { position: "none" },
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
                    chart.draw(view, options);
                }
            </script>
            <div id="columnchart" style="width: 900px; height: 300px;"></div>
        </div>
    </div>  
</div>
@endsection
