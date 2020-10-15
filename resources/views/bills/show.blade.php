@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
            <div class="card text-white bg-success text-center mb-3"style="font-size:3rem;">รายการขายที่ {{ $bill->id }}</div>
                <div class="card ">
                    <div class="card-body"> 
                        <a href="{{ url('/bills') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ url('/bills/' . $bill->id . '/edit') }}" title="Edit Bill"><button class="btn btn-primary btn-sm d-none"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขรายการ</button></a>

                        <form method="POST" action="{{ url('bills' . '/' . $bill->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Bill" onclick="return confirm(&quot;ยืนยันลบรายการขาย?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบรายการ</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>รายการยา</th>
                                        <th>ราคาขาย</th>
                                        <th class="d-none">ประเภทยา</th>
                                        <th>จำนวน</th> 
                                        <th>ราคารวม</th> 
                                    </tr>
                                @php
                                    $sales = $bill->sales;
                                @endphp
                                    <tbody class="text-center">
                                        @foreach($sales as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->product->pro_name }}</td>
                                                <td>{{ $item->saleprice }}</td>
                                                <td>{{ $item->amount }}</td>       
                                                <td>{{ $item->total }}</td>
                                            </tr>
                                        @endforeach                                    
                                    </tbody>                   
                                        <tr><td colspan="5">ผู้ให้บริการ &emsp;&emsp;&emsp;&emsp;&emsp;{{$item->user->name}}</td></tr>    
                                </thead>        
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="col-md-2">
            </div>
        </div>
    </div>
@endsection
