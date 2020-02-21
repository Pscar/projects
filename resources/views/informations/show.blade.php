@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">information {{ $information->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/informations') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/informations/' . $information->id . '/edit') }}" title="Edit information"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('informations' . '/' . $information->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete information" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $information->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $information->name }} </td></tr><tr><th> Lastname </th><td> {{ $information->lastname }} </td></tr><tr><th> Address </th><td> {{ $information->address }} </td></tr><tr><th> Tel </th><td> {{ $information->tel }} </td></tr><tr><th> Staff Id </th><td> {{ $information->staff_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
