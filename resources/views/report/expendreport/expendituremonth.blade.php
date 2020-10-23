@extends('layouts.admin')
@section('content')
<div class="reportsales-date container-fluid pt-5 px-lg-5">
    <div class="card text-white bg-primary text-center mb-3"style="font-size:3rem;">รายการสั่งซื้อประจำเดือน</div>
    <div class="card mb-4">
    <div class="card-header">เลือกเดือน / ปี ที่ต้องการ</div>
        <div class="card-body">
            <form action="reportexpendituremonth" method="POST" enctype="multipart/form-data">
                @csrf
                @csrf
                <div class="form-row">
                    <div class="col-4">
                        @php
                            $months = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฏาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
                        @endphp
                        <select class="form-control" name="month" id="month">
                            <option value="">เลือกเดือน</option>
                            @foreach($months as $item)
                            <option value="{{ $loop->iteration }}">{{ $item }}</option>
                            @endforeach
                        </select>                                    
                        <script>
                            document.querySelector("#month").value = "{{ request('month') }}"
                        </script>
                    </div>
                    <div class="col-4">
                        @php
                            $start_at = date('Y');
                        @endphp
                        <select class="form-control" name="year" id="year">
                            <option value="">เลือกปี</option>
                            @for($year = $start_at; $year < $start_at +20 ; $year++)
                            <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>                                      
                        <script>
                            document.querySelector("#year").value = "{{ request('year') }}"
                        </script>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-success" name="search" ><i class="fa fa-search"></i> Search</button>
                        <button type="submit" class="btn btn-secondary" name="exportPDF"> <i class="fa fa-file"></i> รายงานสั่งซื้อ PDF </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">รายงานการสั่งซื้อประจำเดือน: {{ request('month') }} / {{ request('year') }}</div>
            <div class="card-body">                        
                <div class="table-responsive">        
                    <table style="width:100%" class="table text-center">
                        <thead>
                            <tr><td colspan="4">รายการทั้งหมด</td></tr>
                            <tr>
                                <th>บาร์โค้ด</th> 
                                <th>ต้นทุน (บาท)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ViewsPage as $ViewsPages)
                                <tr>
                                    <td> <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($ViewsPages->drug_id, 'C128') }}"><br>
                                        {{ $ViewsPages->drug_id }}
                                    </td>
                                    <td>{{ $ViewsPages->cost}}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">กราฟรายงานสั่งซื้อสินค้า : {{ request('month') }}</h3>
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
                            ['สินค้า','สต็อคเข้า', 'สต็อคปัจจุบัน'],
                            @foreach ($ViewsPage as $ViewsPages)
                                [ "{{$ViewsPages->drug_id }}",{{ $ViewsPages->stock_im }},{{ $ViewsPages->stock_amount }} ],
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
