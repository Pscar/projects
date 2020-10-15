@extends('layouts.admin')

@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
            <div class="card text-white bg-info text-center mb-3" style="font-size:2.5rem;">สต็อคปัจจุบัน <br>{{$product->pro_name}}</div>
                <div class="card">
                    <div class="card-header text-center"> 
                        <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($product->drug_id, 'C128') }}" alt="barcode" style="width:20rem;"><br>
                        </div>
                    <div class="card-body">

                        <a href="{{ url('/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>  กลับ  </button></a>
                        <a href="{{ url('/products/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขรายการสินค้า</button></a>
                        <!-- <form method="POST" action="{{ url('products' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm " title="Delete Product" onclick="return confirm(&quot;ยืนยันการลบสินค้า?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบรายการ</button>
                        </form> -->
                        <a href="{{ url('/lots') }}" class="btn btn-success btn-sm" title="Add New Lot">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มจำนวนสินค้า
                        </a>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> ชื่อสินค้า</th>
                                        <th> ประเภท </th>
                                        <th> ราคาขาย </th>
                                        <th> สต็อคปัจจุบัน </th>
                                    </tr>                          
                                </thead>
                                <tbody>
                                    <td> {{ $product->id }}</td>
                                    <td> {{ $product->pro_name }} </td>
                                    <td> {{ $product->category->name_category}}</td>
                                    <td> {{ $product->saleprice }} </td>
                                    <td> {{ $product->stock_ps }} </td>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>รอบเข้า</th>
                                        <th>สต็อคเข้าใหม่</th>
                                        <th>สต็อคเก่า (แต่ละรอบ)</th>
                                        <th>ต้นทุน</th>
                                        <th>วันเข้าใหม่</th>
                                        <th>วันหมดอายุ</th>

                                </thead>
                            @php
                                $lots = $product->lots;
                            @endphp
                                <tbody>
                                    @foreach($lots as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->stock_im }}</td>
                                            <td>{{ $item->stock_amount}}</td>
                                            <td>{{ $item->percost}}</td>        
                                            <td>{{($item->created_at)->format('d-m-Y H:i:s')}}</td>
                                            <td>
                                            @if($product->category_id == 1 )
                                                <span class="badge badge-primary">
                                                    {{($item->created_at->modify('+3 month'))->format('d-m-Y H:i')}}
                                                </span>        
                                                @elseif($product->category_id == 2)
                                                <span class="badge badge-primary">
                                                    {{($item->created_at->modify('+3 month'))->format('d-m-Y H:i')}}
                                                </span>
                                            @elseif($product->category_id == 3)
                                                <span class="badge badge-success">
                                                    {{($item->created_at->modify('+2 year'))->format('d-m-Y H:i')}}
                                                </span>
                                            @elseif($product->category_id == 4)
                                                <span class="badge badge-secondary">
                                                    {{($item->created_at->modify('+1 year'))->format('d-m-Y H:i')}}
                                                </span>  
                                            @elseif($product->category_id == 5)
                                                <span class="badge badge-primary">
                                                    {{($item->created_at->modify('+3 month'))->format('d-m-Y H:i')}}
                                                </span>  
                                            @elseif($product->category_id == 6)
                                                <span class="badge badge-success"> 
                                                    {{($item->created_at->modify('+2 year'))->format('d-m-Y H:i')}}
                                                </span>    
                                            @else
                                                <span></span>
                                            @endif       
                                            </td>       
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>  

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
