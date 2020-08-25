@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-3 px-lg-5">
    <div class="row">
        <div class="card text-center">
            <div class="card-header">ยอดขายประจำปี 2020</div>
            <div class="card-body">
                <div class="form-group form-inline">
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['เดือน', 'ยอดขาย', 'ต้นทุน', 'กำไร'],
                            @foreach($sales as $item)
                                ["{{ $item->m }}", {{ $item->t }}, {{$item->cost}},{{$item->p}}],
                            @endforeach
                            ]);

                            var options = {
                            chart: {
                                
                            },
                                bars: 'vertical',
                                vAxis: {format: 'decimal'},
                                width: 1000,
                                height: 500,
                            };
                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>
                    <body>
                
                        <div id="columnchart_material"></div>
                    </body>
                </div>
            </div>
        </div>   
        <div class="card text-center">
            <div class="card-header">ยอดขายประจำเดือน สิงหาคม</div>
            <div class="card-body">
                <div class="form-group form-inline">
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['เดือน', 'ยอดขาย', 'ต้นทุน', 'กำไร'],
                            @foreach($sale as $item)
                                ["{{ $item->d }}", {{ $item->t }}, {{$item->cost}},{{$item->p}}],
                            @endforeach
                            ]);

                            var options = {
                            chart: {
                                
                            },
                                bars: 'vertical',
                                vAxis: {format: 'decimal'},
                                width: 1000,
                                height: 500,
                            };
                            var chart = new google.charts.Bar(document.getElementById('columnchart'));
                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>
                    <body>
                        <div id="columnchart"></div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
