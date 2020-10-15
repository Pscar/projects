@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
            <div class="card text-white bg-primary text-center mb-3"style="font-size:3rem;">รายการประเภทยา</div>
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/categorys/create') }}" class="btn btn-success btn-sm" title="Add New category">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพื่มข้อมูลประเภท
                        </a>

                        <form method="GET" action="{{ url('/categorys') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ประเภท</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categorys as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name_category }}</td>
                                        <td>
                                            <a href="{{ url('/categorys/' . $item->id) }}" title="View category"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/categorys/' . $item->id . '/edit') }}" title="Edit category"><button class="btn btn-primary btn-sm d-none"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/categorys' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm d-none" title="Delete category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $categorys->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
