@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Bill {{ $bill->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/bills') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/bills/' . $bill->id . '/edit') }}" title="Edit Bill"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('bills' . '/' . $bill->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Bill" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $bill->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $bill->user_id }} </td></tr><tr><th> Total </th><td> {{ $bill->total }} </td></tr><tr><th> Checking At : </th><td> {{ $bill->checking_at : }} </td></tr><tr><th> Paid At : </th><td> {{ $bill->paid_at : }} </td></tr><tr><th> Cancelled At </th><td> {{ $bill->cancelled_at }} </td></tr><tr><th> Completed At </th><td> {{ $bill->completed_at }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
