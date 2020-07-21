@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid pt-5 px-lg-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">หน้าจอหลัก
                    </div>

                    <div class="container-fluid pt-5 px-lg-5">
                        <div class="row mx-lg-n5 text-center">
                            <div class="col py-3 px-lg-5 border bg-light"><a href="{{ url('/sales') }}"> หน้าจอขาย </div></a>
                            <div class="col py-3 px-lg-5 border bg-light"><a href="{{ url('/products')}}"> ข้อมูลสินค้า </div></a>
                            <div class="w-100"></div>
                            <div class="col py-3 px-lg-5 border bg-light"><a href="{{ url('/lots')}}"> สต็อคสินค้า </div></a>
                            <div class="col py-3 px-lg-5 border bg-light"><a href="{{url('/bills')}}"> พิมพ์ใบเสร็จ </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
