@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid pt-5 px-lg-5">
            <div class="col-md-12">
                <div class="card">
                    <div id="container" style="width: 100%;">
                        <canvas id="canvas"></canvas>
                    </div>
                    <script>
                        var color = Chart.helpers.color;
                        var barChartData = { //labels คือ ข้อมูลในแกน X
                            labels: ["01/08/2562 ","02/08/2562 ","03/08/2562 ","04/08/2562 ","05/08/2562 "],
                            datasets: [{
                            label:"",
                            //กำหนดให้ กราฟแท่งเป็นสีแดง
                            backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                            borderColor: window.chartColors.red,
                            borderWidth: 1,
                            data: [1523,1840,1745,1489,1689]
                            //data คือ  ข้อมูลในแกน Y
                        }]
                    };
                        var ctx = document.getElementById('canvas').getContext('2d');
                     //กำหนดให้แสดงกราฟที่ <canvas id="canvas"></canvas>
                        window.myBar = new Chart(ctx, {
                            type: 'bar',
                            data: barChartData,
                            options: {
                                responsive: true,
                                legend: {
                                    display: false,
                                },
                                title: {
                                    display: true,
                                    text: 'กราฟแสดงยอดขาย'
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
