@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Sales</div>
                    <div class="card-body">
                        <a href="{{ url('/sales/create') }}" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" title="Add New Sale">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <body>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog" style="max-width:1200px;">
                                <div class="modal-content style="max-width:1200px;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel ">เพิ่มรายการสินค้า</h5>
                                        <form method="GET" action="{{ url('/products') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                                <span class="input-group-append">
                                                    <button class="btn btn-secondary" type="submit">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-body">
                                        <div class="table-responsive text-center">
                                            <table class="table table-sm">
                                               
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>รหัสยา</th>
                                                        <th>ยา</th>                                      
                                                        <th>ราคา</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                @php
                                                    $sales = $products->sales
                                                @endphp
                                                <tbody>
                                               
                                                    @foreach($products as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td> <a href="{{ url('/products/' . $item->id) }}"> {{$item->drug_id}} </a></td>
                                                            <td>{{ $item->pro_name }}</td>
                                                            <td>{{ $item->contain }}</td>
                                                            <td>{{ $item->saleprice }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ยา</th>
                                        <th>ราคาขาย</th>
                                        <th>ประเภทยา</th>
                                        <th>จำนวน</th>
                                        <th>ราคารวม</th>
                                        <th>คนให้บริการ</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sales as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->pro_name }}</td>
                                        <td>{{ $item->saleprice }}</td>
                                        <td>{{ $item->category_id }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->total }}</td>
                                        <td>{{ $item->user->name }}</td>
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
                    </div>
                </div>
                <h1>รวมราคาสินค้า {{ number_format($sales->sum('total')) }} บาท</h1>
            </div>
        </div>
    </div>
@endsection
