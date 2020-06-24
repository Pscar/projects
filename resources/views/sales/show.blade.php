@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Sale {{ $sale->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/sales') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/sales/' . $sale->id . '/edit') }}" title="Edit Sale"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('sales' . '/' . $sale->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Sale" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $sale->id }}</td></tr>
                                    <tr><th> ยา </th><td> {{ $sale->pro_name }} </td></tr>
                                    <tr><th> ราคาขาย </th><td> {{ $sale->saleprice }} </td></tr>
                                    <tr><th> ประเภท </th><td> {{ $sale->category_id }} </td></tr>
                                    <tr><th> ผู้ใช้งาน </th><td> {{ $sale->user_id }} </td></tr>
                                    <tr><th> จำนวน </th><td> {{ $sale->amount }} </td></tr>
                                    <tr><th> ราคาไม่รวมภาษี </th><td> {{ number_format ($sale->saleprice * $sale->amount,2) }} </td></tr>
                                    <tr><th> ราคารวมภาษี 7% </th><td> {{ number_format ($sale->saleprice * $sale->amount * $sale->vatpercent / 100,2) }} </td></tr>
                                    <tr><th> ราคาทั้งหมด </th><td> {{ number_format ($sale->saleprice * $sale->amount +  $sale->saleprice * $sale->amount * $sale->vatpercent / 100,2) }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
