@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">bill {{ $bill->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/bills') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/bills/' . $bill->id . '/edit') }}" title="Edit bill"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('bills' . '/' . $bill->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete bill" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $bill->id }}</td>
                                    </tr>
                                    <tr><th> Amount </th><td> {{ $bill->amount }} </td></tr><tr><th> Sale </th><td> {{ $bill->sale }} </td></tr><tr><th> Sale Items </th><td> {{ $bill->sale_items }} </td></tr><tr><th> Receipt Id </th><td> {{ $bill->receipt_id }} </td></tr><tr><th> Sale Id </th><td> {{ $bill->sale_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
