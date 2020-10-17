@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
            <div class="card text-white bg-primary text-center mb-3"style="font-size:3rem;">รายการขาย</div>
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/sales') }}" class="btn-warning btn-sm " title="Add New Sales">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> กลับหน้าขาย
                        </a>
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
                                        <!-- <th>Actions</th> -->
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
                                        <td>{{($item->created_at)->format('d-m-Y H:i:s')}}
                                        </td>
                                        <!-- <td>
                                            <a href="{{ url('/bills/' . $item->id) }}" title="View Bill"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/bills/' . $item->id . '/edit') }}" title="Edit Bill"><button class="btn btn-primary btn-sm d-none"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/bills' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm d-none" title="Delete Bill" onclick="return confirm(&quot;ลบ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td> -->
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