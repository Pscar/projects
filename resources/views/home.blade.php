@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-5 px-lg-5">
    <div class="row">
        <table class="table table-hover">
            <thead class="text-center">
                <tr>
                    <th>เดือน</th>
                    <th>รวม</th>
                    <th>ต้นทุน</th>
                    <th>กำไร</th>
                    
                </tr>
            <tr>
            @foreach($sales as $item)
                <td>{{ $item->y }} / {{ $item->m }} / {{ $item->d }}   </td> 
                <td>{{ $item->t}}</td>
                <td>{{ $item->cost}}</td>
                <td>{{ $item->p }}</td>
            </tr>
            @endforeach
        </table>
        <div class="col-6">
           <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ["date", "total", { role: "style" } ],
                    @foreach($sales as $item)   
                        ["{{ $item->m }}", {{ $item->t }}, "#b87333"],
                    @endforeach    
                    ]);    
                    var view = new google.visualization.DataView(data);
                    view.setColumns([0, 1,
                                    { calc: "stringify",
                                        sourceColumn: 1,
                                        type: "string",
                                        role: "annotation" },
                                    2]);

                    var options = {
                        title: "ยอดขายประจำปี <?php echo date ("Y"); ?>",
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
                        @foreach($sales as $item)
                        ["{{ $item->d }}",{{$item->t}}, "#b87333"],
                        @endforeach
                    ]);

                    var view = new google.visualization.DataView(data);
                    view.setColumns([0, 1,
                                    { calc: "stringify",
                                        sourceColumn: 1,
                                        type: "string",
                                        role: "annotation" },
                                    2]);

                    var options = {
                        title: "ยอดขายประจำเดือน <?php echo date ("m-Y"); ?>",
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
</div>
@endsection
