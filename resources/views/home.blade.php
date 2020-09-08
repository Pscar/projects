@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid pt-3 px-lg-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ยอดขายประจำปี <?php echo date ("Y"); ?></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
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
                                    bars: 'horizontal',
                                    hAxis: {format: 'decimal'},
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
        </div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">ยอดขายประจำปี <?php echo date ("Y"); ?></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ยอดขายประจำเดือน <?php echo date ("M"); ?></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <script type="text/javascript">
                            google.charts.load('current', {'packages':['bar']});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                                var
                                startDate = new Date("2017-10-01"),
                                endDate = new Date("2017-10-07");
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
    </div>
</section>

@endsection
