@extends('layouts.admin')
@section('content')

<div class="container-fluid pt-5 px-lg-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card text-center"style="font-size:50px;">รายการสินค้า</div>
                    <div class="card-body">
                        <form method="GET" action="{{ url('/products') }}" accept-charset="UTF-8" role="search">
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
                        <table class="table table-sm" id="product">
                            <thead>
                                <tr>
                                    <th>รหัสสินค้า</th>
                                    <th>ผลิตภัณฑ์</th>                                      
                                    <th>บรรจุ</th>
                                    <th>คงเหลือ</th>
                                    @if(Auth::user()->role == "staff")
                                    <th>สถานะ</th>
                                    <th>Actions</th>
                                    @endif
                                    @if(Auth::user()->role == "admin")
                                    <th colspan="2">สถานะ</th>
                                    <th colspan="2">Actions</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td> <a href="{{ url('/products/' . $item->id) }}"> {{$item->drug_id}} </a></td>
                                        <td>{{ $item->pro_name }}</td>
                                        <td>{{ $item->contain }}</td>
                                        <td>{{ $item->stock_ps }}</td>
                                        <td> 
                                            @switch($item->status_sale)
                                                @case("redysale")
                                                    <div><span class="badge badge-success">ขายสินค้า</span></div>
                                                    <div>{{ $item->redysale_at}}</div>
                                                @break  
                                                @case("souout")
                                                    <div><span class="badge badge-danger">ยกเลิกขายสินค้า</span></div>
                                                    <div>{{ $item->souout_at}}</div>
                                                @break
                                            @endswitch  
                                        </td>
                                        <td>
                                            @if($item->stock_ps >= 100)
                                            <span class="badge badge-success">สินค้าพร้อมขาย</span>
                                            @elseif($item->stock_ps == 0)
                                            <span class="badge badge-danger">สินค้าหมดแล้ว</span>  
                                            @else
                                                <span class="badge badge-warning">สินค้าจะหมดแล้ว</span>
                                            @endif
                                        
                                        </td>
                                        <td>
                                        @if(Auth::user()->role == "admin") 
                                            <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}
                                                @switch($item->status_sale)
                                                    @case("redysale")  
                                                        <select name="status_sale" onchange="status_sale">
                                                            <option value="redysale">ขายสินค้า</option>                                                           
                                                            <option value="souout">ยกเลิกขายสินค้า</option>  
                                                        </select> 
                                                    <button type="submit" class="btn btn-warning btn-sm"onclick="return confirm(&quot;ยืนยันการยกเลิกขายสินค้า?&quot;)">submit</button>
                                                    @break
                                                    @case("souout")  
                                                        <select name="status_sale" onchange="status_sale">                                                          
                                                            <option value="redysale">ขายสินค้า</option>
                                                            <option value="souout">ยกเลิกขายสินค้า</option>  
                                                        </select> 
                                                    <button type="submit" class="btn btn-warning btn-sm"onclick="return confirm(&quot;ยืนยันการขายสินค้า?&quot;)">submit</button>
                                                    @break  
                                                @endswitch  
                                            </form>
                                        @endif
                                        </td>                                   
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มสินค้า
                        </a>
                        
                        <div class="pagination-wrapper"> {!! $products->appends([
                        'search' => Request::get('search'),
                        'pro_name' => Request::get('pro_name'),
                        'drug_id'=>Request::get('drug_id','asc'),
                        'stock_ps'=> Request::get('stock_ps','asc'),
                        'category_id'=>Request::get('category_id','asc')
                        ])->render() !!} 
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</div>
@endsection
