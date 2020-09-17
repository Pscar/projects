@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <label class="control-label">สแกนสินค้า</label>
                        <form method="POST" action="{{ url('/sales') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="drug_id" placeholder="BARCODE" value="{{ request('search') }}" autofocus>
                                <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($sale->amount) ? $sale->amount : '1'}}">
                                    <button type="submit" onclick="myFunction" class="btn btn-success d-none" >Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>ยา</th>
                                        <th>ราคาขาย (บาท)</th>
                                        <th>จำนวน (ชิ้น)</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sales as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $item->product->pro_name }}</td>
                                            <td class="text-center">{{ $item->total }}</td>
                                            <td class="text-center">{{ $item->amount }}</td>
                                            @if($item->stock_ps == 0)
                                                <script>
                                                    alert("สินค้าของคุณหมดแล้ว"); 
                                                </script>
                                            @endif
                                            <td class="text-center">
                                                <form method="POST" action="{{ url('/sales' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Sale" onclick="return confirm(&quot;ยืนยันลบรายการยา&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </form>                                          
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>                                
                            </table>
                            <div class="pagination-wrapper"> {!! $sales->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>  
                    </div>        
                </div>  
            </div> 
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>วันที่ปัจจุบัน</label>
                            <input class="form-control" size="2" value="<?php echo date ("d-m-Y H:i:s"); ?>" readonly></input>
                        </div>
                        <div class="form-group">
                            <label class="control-label">ผู้ใช้ปัจจุบัน </label>
                            <input class="form-control" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label">สถานะผู้ใช้</label>
                            <input class="form-control" value="{{ Auth::user()->role }}" readonly>
                        </div>
                    </div>  
                    <div class="form-group text-center">
                        <a href="{{ url('/bills') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> รายการขาย
                        </a>
                    </div>  
                </div> 
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('/bills') }}" accept-charset="UTF-8" class="form-horizontal text-center" enctype="multipart/form-data">
                            {{ csrf_field() }} 
                            <div class="form-group form-inline">
                                <label class="col-lg-4">รวม (ชิ้น)</label> 
                                <div class="col-lg-3">
                                    <input class="form-control" style="width:170px;" value="{{ number_format($sales->sum('amount'))}}" readonly>
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="col-lg-4">ราคารวม</label> 
                                <div class="col-lg-2">
                                    <input class="form-control" style="width:170px;" value="{{ number_format($sales->sum('total')) }}" readonly>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <a href="{{ url('/sales') }}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" title="Add New Lot">
                                    <i class="fa fa-plus" aria-hidden="true"></i> คิดเงิน
                                </a>
                                <body>
                                    @include('sales/model')
                                </body>
                            </div>  
                        </form>
                    </div>
                </div>
            </div> 
        </div>         
    </div>
@endsection





