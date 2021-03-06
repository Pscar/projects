@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
            <div class="card text-white bg-info text-center mb-3"style="font-size:3rem;">สร้างรายการสต็อกใหม่</div>
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/lots') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/lots') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('lots.form', ['formMode' => 'create'])

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
