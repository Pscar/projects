@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">สินค้า</div>
                    <div class="card-body">
                        <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มสินค้า
                        </a>

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

                    <br/>
                    <br/>
                    <div class="table-responsive text-center">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>รหัสสินค้า</th>
                                    <th>ผลิตภัณฑ์</th>                                      
                                    <th>บรรจุ</th>
                                    <th>ราคา</th>
                                    <th>สต็อคขั้นต่ำ</th>
                                    <th class="d-none">สถานะ</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> <a href="{{ url('/products/' . $item->id) }}"> {{$item->drug_id}} </a></td>
                                        <td>{{ $item->pro_name }}</td>
                                        <td>{{ $item->contain }}</td>
                                        <td>{{ $item->saleprice }}</td>
                                        <td>{{ $item->stock_ps }}</td>
                                        <td class="d-none">{{ $item->category_id }}</td>
                                        <td class="d-none">{{$item->status_sale}}</td>
                                        
                                        <td >
                                            <a href="{{ url('/sales/create') }}?drug_id={{ $item->drug_id }}" title="scan"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> สแกนสินค้า</button></a>
                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm d-none"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm d-none" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบรายการขาย</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $products->appends([
                        'search' => Request::get('search'),
                        'pro_name' => Request::get('pro_name'),
                        'drug_id'=>Request::get('drug_id','asc'),
                        'saleprice'=> Request::get('saleprice','asc'),
                        'category_id'=>Request::get('category_id','asc')
                        ])->render() !!} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
