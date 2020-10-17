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
                        <button type="submit" class="btn btn-secondary" name="exportPDF"> <i class="fa fa-file"></i> รายงานประจำวัน PDF </button>
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
                            <tr><td colspan="4">รายการที่ขายได้ทั้งหมด</td></tr>
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
                                    <td>{{ $ViewsPages->saleprice }}</td>
                                    <td>{{ $ViewsPages->total }}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
