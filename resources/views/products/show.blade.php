@extends('layouts.admin')

@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center"> 
                    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($product->drug_id, 'C128') }}" alt="barcode"/><br>
                    {{$product->drug_id}}
                    </div>
                    <div class="card-body">

                        <a href="{{ url('/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>  ย้อนกลับ  </button></a>
                        <a href="{{ url('/products/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขรายการสินค้า</button></a>
                        <form method="POST" action="{{ url('products' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm " title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table     text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> ชื่อสินค้า</th>
                                        <th> บรรจุ </th>
                                        <th> ประเภท </th>
                                        <th> ราคาขาย </th>
                                        <th> สต็อคปัจจุบัน </th>
                                    </tr>                          
                                </thead>
                                <tbody>
                                    <td> {{ $product->id }}</td>
                                    <td> {{ $product->pro_name }} </td>
                                    <td> {{ $product->contain }} </td>
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
                                            <td>{{ $item->created_at}}</td>
                                            <td><!--วันหมดอายุ-->
                                            <?php
                                               echo date("d-m-Y",strtotime("+6 month"));
                                            ?> 
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
