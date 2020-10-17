@extends('layouts.admin')
@section('content')
<div class="reportsales-date container-fluid pt-5 px-lg-5">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">Daily Report</div>
            <div class="card-body">
                <form method="GET" action="{{ url('/report/salesreport/reportsales_date') }}" accept-charset="UTF-8" >
                    <div class="form-row">
                        <div class="col-4">
                            <input type="date" class="form-control" name="date" placeholder="Search..." value="{{ request('date') }}" >
                        </div>
                        <div class="col-4">
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-search"></i> Search
                            </button>
                            <button class="btn btn-success" type="submit" name="exportPDF">
                                <i class="fa fa-search"></i> exportPDF
                            </button>
                        </div>
                    </div>               
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Report daily : {{ request('date') }}</div>
            <div class="card-body">                        
                <div class="table-responsive">
                    <table style="width:100%" class="table text-center">
                        <thead>
                            <tr><td colspan="4">รายการที่ขายได้ทั้งหมด</td></tr>
                            <tr>
                                <th>ชื่อยา</th> 
                                <th>จำนวนที่ขาย (ชิ้น)</th>
                                <th>ราคาที่ขาย (บาท)</th>
                                <th>ยอดรวม (บาท)</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($sales as $item)
                                <tr>
                                    <td>{{ $item->pro_name }} </td>
                                    <td>{{ $item->amount }} </td>
                                    <td>{{ $item->saleprice }} </td>
                                    <td>{{ $item->total }} </td>
                                </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td>{{ number_format($sales->sum('amount')),2 }} (ชิ้น)</td>
                            <td>{{ number_format($sales->sum('saleprice')),2 }} (บาท) </td>
                            <td>{{ number_format($sales->sum('total')),2 }} (บาท) </td>
                        </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection