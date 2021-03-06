@extends('layouts.admin')
@section('content')
<div class="reportsales-date container-fluid pt-5 px-lg-5">
    <div class="card text-white bg-primary text-center mb-3"style="font-size:3rem;">รายการยอดขายประจำวัน</div>
    <div class="card mb-4">
    <div class="card-header">เลือกวันที่ต้องการ</div>
        <div class="card-body">
            <form action="reportdate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-4">
                        <input type="date" class="form-control" name="date" placeholder="Search..." value="{{ request('date') }}" >
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-success" name="search" ><i class="fa fa-search"></i> Search</button>
                        <button type="submit" class="btn btn-secondary" name="exportPDF"> <i class="fa fa-file"></i> ยอดขายประจำวัน PDF </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">รายงานประจำวัน : {{ request('date') }}</div>
            <div class="card-body">                        
                <div class="table-responsive">        
                    <table style="width:100%" class="table text-center">
                        <thead>
                            <tr><td colspan="6">รายการที่ขายได้ทั้งหมด</td></tr>
                            <tr>
                                <th>ชื่อยา</th> 
                                <th>จำนวนที่ขาย (ชิ้น)</th>
                                <th>ราคาที่ขาย (บาท)</th>
                                <th>ยอดรวม (บาท)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ViewsPage as $ViewsPages)
                                <tr>
                                    <td>{{ $ViewsPages->pro_name }}</td>
                                    <td>{{ $ViewsPages->amount }}</td>
                                    <td>{{ $ViewsPages->sale }}</td>
                                    <td>{{ $ViewsPages->t }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">กราฟยอดขายประจำวัน : {{ request('date') }}</h3>
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
                        function drawChart(){
                            var data = google.visualization.arrayToDataTable([
                            ['สินค้า','ยอดขาย', 'ต้นทุน', 'กำไร'],
                            @foreach ($ViewsPage as $ViewsPages)
                                [ "{{$ViewsPages->pro_name}}",{{ $ViewsPages->t }}, {{ $ViewsPages->c }},{{ $ViewsPages->p }} ],
                            @endforeach
                            ]);

                            var options = {
                            chart: {
                                
                            },
                                bars: 'vertical',
                                vAxis: {format: 'decimal'},
                                width: 950,
                                height: 650,
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
