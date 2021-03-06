@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
            <div class="card bg-warning text-center mb-3"style="font-size:3rem;">แก้ไขรายการสินค้า {{$product->id}}</div>
                <div class="card">
                    <div class="card-header">
                    <div class="card-body text-center">
                    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($product->drug_id, 'C128') }}" alt="barcode" style="width:20rem;"><br>
                    {{$product->drug_id}}

                    </div>
                    
                    <div class="card-body">
                        <a href="{{ url('/products') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
               
                        <form method="POST" action="{{ url('/products/' . $product->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('products.form', ['formMode' => 'edit'])
                
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
