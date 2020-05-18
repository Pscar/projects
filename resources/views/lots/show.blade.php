@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">lot {{ $lot->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/lots') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/lots/' . $lot->id . '/edit') }}" title="Edit lot"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('lots' . '/' . $lot->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete lot" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ลำดับ</th><td>{{ $lot->id }}</td></tr>
                                    <tr><th> วันหมดอายุ </th><td> {{ $lot->dete_exp }} </td></tr>
                                    <tr><th> รหัสยา </th><td> {{$lot->product->barcode}}</td></tr>
                                    <tr><th> Drug Id </th><td> {{ $lot->drug_id }} </td></tr>
                                    <tr><th> Cost </th><td> {{ $lot->cost }} </td></tr><tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
