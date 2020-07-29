@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">รายการขายที่ {{ $bill->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/bills') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/bills/' . $bill->id . '/edit') }}" title="Edit Bill"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('bills' . '/' . $bill->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Bill" onclick="return confirm(&quot;ยืนยันการลบรายการ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>รายการขายที่ {{ $bill->id }}</th>
                                        <th>รายการยา</th>
                                        <th>ราคาขาย</th>
                                        <th class="d-none">ประเภทยา</th>
                                        <th>จำนวน</th> 
                                        <th>ราคารวม</th> 
                                    </tr>
                                @php
                                    $sales = $bill->sales;
                                @endphp
                                    <tbody>
                                        @foreach($sales as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->pro_name }}</td>
                                                <td>{{ $item->saleprice }}</td>
                                                <td class="d-none">{{ $item->category_id }}</td>
                                                <td>{{ $item->amount }}</td>       
                                                <td>{{ $item->total }}</td>
                                            </tr>
                                        @endforeach                                    
                                    </tbody>                   
                                        <tr><td colspan="6">ราคารวม {{ number_format($sales->sum('total')) }}</td></tr>
                                        <tr><td colspan="6">ผู้ให้บริการ {{ $item->user->name }}</td></tr>        
                                    </tr> 
                                </thead>        
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
