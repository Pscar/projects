@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">sale {{ $sale->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/sale') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/sale/' . $sale->id . '/edit') }}" title="Edit sale"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('sale' . '/' . $sale->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete sale" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $sale->id }}</td>
                                    </tr>
                                    <tr><th> Sale Price </th><td> {{ $sale->sale_price }} </td></tr><tr><th> Name </th><td> {{ $sale->name }} </td></tr><tr><th> Category Id </th><td> {{ $sale->category_id }} </td></tr><tr><th> Staff Id </th><td> {{ $sale->staff_id }} </td></tr><tr><th> Sale Id </th><td> {{ $sale->sale_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
