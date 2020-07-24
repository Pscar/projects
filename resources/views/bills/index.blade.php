@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card text-center"style="font-size:80px;">รายการขาย</div>
                    <div class="card-body">
                        <a href="{{ url('/bills/create') }}" class="btn btn-success btn-sm d-none" title="Add New Bill">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/bills') }}" accept-charset="UTF-8"  role="search">
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
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>รายการขาย</th>
                                        <th>ผู้ใช้งาน</th>
                                        <th>ราคารวม</th>
                                        <th>เวลาขาย</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bills as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <!-- controller bills store-->
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->total }}</td>
                                        <!--------------------------->
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="{{ url('/bills/' . $item->id) }}" title="View Bill"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/bills/' . $item->id . '/edit') }}" title="Edit Bill"><button class="btn btn-primary btn-sm d-none"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/bills' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm d-none" title="Delete Bill" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $bills->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
