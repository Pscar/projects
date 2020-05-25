@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center"> 
                        
                        <br>{{$product->barcode}} 
                    </div>
                    <div class="card-body">

                        <a href="{{ url('/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/products/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('products' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>#</th><td>{{ $product->id }}</td>
                                    </tr>
                                    <tr><th> ชื่อสินค้่า </th><td> {{ $product->pro_name }} </td></tr>
                                    <tr><th> รหัสสินค้า </th><td> {{ $product->barcode }} </td></tr>
                                    <tr><th> บรรจุ </th><td> {{ $product->contain }} </td></tr>
                                    <tr><th> สถานะ </th><td> {{ $product->status_sale }} </td></tr>
                                    <tr><th> ราคาขาย </th><td> {{ $product->saleprice }} </td></tr>
                                    <tr><th> สต็อคขั้นต่ำ </th><td> {{ $product->stock_ps }} </td></tr>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
