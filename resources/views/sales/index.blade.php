@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <label class="control-label">สแกนสินค้า</label>
                        <form method="GET" action="{{ url('/sales/create') }}"role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="drug_id" placeholder="BARCODE" value="{{ request('search') }}">
                            </div>
                        </form>
                    </div>
                    <div class="card-body" style="height:428px;">
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
                                            <td class="text-center">{{ $item->pro_name }}</td>
                                            <td class="text-center">{{ $item->total }}</td>
                                            <td class="text-center">{{ $item->amount }}</td>
                                            <td class="text-center">
                                                <form method="POST" action="{{ url('/sales' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Sale" onclick="return confirm(&quot;ยืนยันลบรายการยา delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>
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
                        <a href="{{ url('/sales/create') }}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" title="Showproduct">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> เพิ่มจำนวนสินค้า
                        </a>
                        <a href="{{ url('/bills') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> รายการขาย
                        </a>
                    </div>  
                <body>
                    @include('sales/model')
                </body>  
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
                            <button type="submit" class="btn btn-success btn-sm">สั่งสินค้า</button> 
                        </form>
                    </div>
                </div>
            </div> 
        </div>         
    </div>

    
   

@endsection





