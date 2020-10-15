@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
            <div class="card text-center"style="font-size:50px;">แก้ไขข้อมูลผู้ใช้งาน</div>
                <div class="card">
                    <div class="card-header">แก้ไขข้อมูลคนที่ {{ $user->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/user/' . $user->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('user.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
