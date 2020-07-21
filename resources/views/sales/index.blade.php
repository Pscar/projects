@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Sales</div>
                        <div class="card-body">
                            <a href="{{ url('/sales/create') }}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"title="Add New Sale"> 
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <body>
                                @include('sales/model')
                            </body>
                            <form method="GET" action="{{ url('/sales') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                    <span class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <br/>
                            <br/>
                        </div>
                        <div class="table-responsive "style="height:500px;">
                            <table class="table table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>ยา</th>
                                        <th>ราคาขาย</th>
                                        <th>จำนวน</th>
                                        <th>ราคารวม</th>
                                        <th>คนให้บริการ</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sales as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $item->pro_name }}</td>
                                            <td class="text-center">{{ $item->saleprice }}</td>
                                            <td class="d-none"> {{ $item->category_id }}</td>
                                            <td class="text-center">{{ $item->amount }}</td>
                                            <td class="text-center">{{ $item->total }}</td>
                                            <td class="text-center">{{ $item->user->name }}</td>
                                            
                                            <td>
                                                <a href="{{ url('/sales/' . $item->id) }}" title="View Sale"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/sales/' . $item->id . '/edit') }}" title="Edit Sale"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('/sales' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Sale" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>                                          
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>                                
                            </table>
                            <div class="pagination-wrapper"> {!! $sales->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">      
                                <div class="card-header text-center">ยอดรวมสินค้า</div>
                                    <table class="table table-hover">             
                                        <tr> 
                                            <td>
                                            <form method="GET" action="{{ url('/sales/create') }}" accept-charset="UTF-8" class="form-inline" role="search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="drug_id" placeholder="BARCODE" value="{{ request('search') }}">
                                                    <span class="input-group-append">
                                                        <button class="btn btn-secondary"type="submit">
                                                        <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                                <form method="POST" action="{{ url('/bills') }}" accept-charset="UTF-8" class="form-horizontal text-center" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input class="form-control" name="total" type="string" id="total" value="{{ number_format($sales->sum('total')) }}" readonly>   
                                                    <button type="submit" class="btn btn-danger btn-sm"> สั่งสินค้า</button>           
                                                </form>
                                            </td>                   
                                        </tr>
                                    </table>      
                            </div>
                        </div>     
                </div>
            </div>            
        </div>
    </div>
   

@endsection





