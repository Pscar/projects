@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-5 px-lg-5">
    <div class="alert alert alert-secondary" role="alert">
        <h1 class="alert-heading">สินค้าของถูกยกเลิกการขาย ! </h1>
        <p>คุณควรปลดสถานะยกเลิกการขาย</p>
        <hr>
        <p class="mb-0"><a href="{{ url('/sales') }}" title="Back"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับไปหน้าขาย </button></a></p>
    </div>
</div>
@endsection