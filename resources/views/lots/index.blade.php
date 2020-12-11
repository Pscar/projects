@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-5 px-lg-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-white bg-primary text-center mb-3" style="font-size:3rem;">รายการสต็อกสินค้า</div>
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('/lots/create') }}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" title="Add New Lot">
                        <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มจำนวนสินค้า
                    </a>

                    <form method="GET" action="{{ url('/lots') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <body>
                        @include('lots/model')
                    </body>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th>บาร์โค้ด</th>
                                    <th>เวลาเข้า</th>
                                    <th>ต้นทุน</th>
                                    <th>สต็อคเก่า</th>
                                    <th>สต็อคปัจจุบัน</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($lot as $item)
                                <tr>
                                    <td><a href="{{ url('/lots/' . $item->id) }}">{{ $item->drug_id }}</td>
                                    <td> {{($item->created_at)->format('d-m-Y')}} </a></td>
                                    <td>{{ $item->cost }}</td>
                                    <td>{{ $item->stock_im }}</td>
                                    <td>{{ $item->stock_amount }}</td>
                                    <td>
                                        <a href="{{ url('/lots/' . $item->id) }}" title="View Lot"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $lot->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection