@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>
                        <div class="card-body">
                            <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
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
                                        <!--<th>สถานะการขาย</th> -->
                                        <th>ราคา</th>
                                        <th>สต็อคขั้นต่ำ</th>
                                        <th colspan="2">ประเภท</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                        <div> <!--<img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($item->barcode, "C128") }} " alt="barcode"   /> !--></div>
                                        {{ $item->barcode }}
                                        </td>
                                        <td>{{ $item->pro_name }}</td>
                                        <td>{{ $item->contain }}</td>
                                        <!--<td>{{ $item->status_sale }}</td> -->
                                        <td>{{ $item->saleprice }}</td>
                                        <td>{{ $item->stock_ps }}</td>
                                        <td  class="d-none">{{$item->category_id}}</td>
                                        <td colspan="2">{{ $item->category->name_category }}</td>
                                        <td >
                                            <a href="{{ url('/products/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
