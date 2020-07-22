@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>วันที่ปัจจุบัน</label>
                            <input class="form-control" size="2" value="<?php echo date ("d-m-Y H:i:s"); ?>"></input>
                        </div>
                        <div class="form-group">
                            <label class="control-label">ผู้ใช้ปัจจุบัน</label>
                            <input class="form-control" value="{{ Auth::user()->name }}"></input>
                        </div>
                        <div class="form-group">
                            <label class="control-label">สถานะผู้ใช้</label>
                            <input class="form-control" value="{{ Auth::user()->role }}"></input>
                        </div>
                    </div>  
                </div>   
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body"style="height:300px;">
                        <label class="control-label">สแกนสินค้า</label>
                        <form method="GET" action="{{ url('/sales/create') }}"role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="drug_id" placeholder="BARCODE" value="{{ request('search') }}"></input>
                            </div>
                        </form>
                        <label class="control-label pt-3">จำนวน</label>
                        <div class="form-group">
                            <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($sale->amount) ? $sale->amount : ''}}" >
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
                </div>   
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('/bills') }}" accept-charset="UTF-8" class="form-horizontal text-center" enctype="multipart/form-data">
                            {{ csrf_field() }} 
                            <div class="form-group">
                                <label class="control-label">ราคารวม</label>
                                <h1 class="style font-size:50px;">{{ number_format($sales->sum('total')) }}</h6>   
                                <button type="submit" class="btn btn-success btn-sm"> สั่งสินค้า</button> 
                            </div>
                            
                        </form>
                    </div>         
                </div>   
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>ยา</th>
                                        <th>ราคาขาย</th>
                                        <th>จำนวน</th>
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
                                                <a href="{{ url('/sales/' . $item->id) }}" title="View Sale"><button class="btn btn-info btn-sm d-none"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/sales/' . $item->id . '/edit') }}" title="Edit Sale"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <form method="POST" action="{{ url('/sales' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Sale" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>
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
        </div>         
    </div>

    
   

@endsection





