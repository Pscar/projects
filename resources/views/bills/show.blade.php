@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                                    <tr><th>หมายเลขที่</th><td>{{ $bill->id }}</td></tr>
                                    <tr><th>ผู้ใช้งาน</th><td> {{ $bill->user->name }} </td></tr>
                                    <tr><th>ราคารวม</th><td> {{ $bill->total }} </td></tr>
                                </tbody>
                            </table>
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ยา</th>
                                        <th>ราคาขาย</th>
                                        <th class="d-none">ประเภทยา</th>
                                        <th>จำนวน</th>
                                        <th>ราคารวม</th>
                                        <th>คนให้บริการ</th>
                                    </tr>
                                </thead>
                                @php
                                    $sales = $bill->sales;
                                @endphp

                                <tbody>
                                @foreach($sales as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->pro_name }}</td>
                                        <td>{{ $item->saleprice }}</td>
                                        <td class="d-none">{{ $item->category_id }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->total }}</td>
                                        <td>{{ $item->user->name }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
