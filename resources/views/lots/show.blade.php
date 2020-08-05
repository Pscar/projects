@extends('layouts.admin')

@section('content')
    <div class="container-fluid pt-5 px-lg-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header text-center"> 
                    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($lot->product->drug_id, 'C128') }}" alt="barcode"/><br>
                    {{$lot->product->drug_id}}
                    </div>
                    <div class="card-body">

                        <a href="{{ url('/lots') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/lots/' . $lot->id . '/edit') }}" title="Edit Lot"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('lots' . '/' . $lot->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Lot" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $lot->id }}</td></tr>
                                    <tr><th> รหัสยา </th><td> {{ $lot->drug_id }} </td></tr>
                                    <tr><th> ต้นทุน </th><td> {{ $lot->cost }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
