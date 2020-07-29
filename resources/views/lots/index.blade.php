@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card text-center"style="font-size:80px;">สต็อคเข้าใหม่</div>
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
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>รหัสยา</th>
                                            <th>ต้นทุน</th>
                                            <th>สต็อคเข้าใหม่</th>
                                            <th>วันแรกเข้า</th>
                                            <th>วันหมดอายุ</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lot as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a href="{{ url('/lots/' . $item->id) }}"> {{$item->drug_id}} </a></td>  
                                            <td>{{ $item->cost }}</td>
                                            <td>{{ $item->stock_im }}</td>
                                            <td>{{ $item->created_at}}</td>
                                            <td><!--วันหมดอายุ-->
                                            <?php
                                                echo date("d-m-Y H:i:s",strtotime("+6 mounth"))."<br>";
                                            ?> 
                                            </td>
                                            <td>
                                            
                                                <a href="{{ url('/lots/' . $item->id) }}" title="View Lot"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/lots/' . $item->id . '/edit') }}" title="Edit Lot"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('/lots' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Lot" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
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
