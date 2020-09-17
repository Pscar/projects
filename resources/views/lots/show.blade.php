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
                        
                        <a href="{{ url('/lots') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ url('/lots/' . $lot->id . '/edit') }}" title="Edit Lot"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขรายการ</button></a>

                        <form method="POST" action="{{ url('lots' . '/' . $lot->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Lot" onclick="return confirm(&quot;ยืนยันลบรายการ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบรายการ</button>
                        </form>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th> รหัสยา </th><td> {{ $lot->drug_id }} </td></tr>
                                    <tr><th> ชื่อยา </th><td> {{ $lot->product->pro_name }} </td></tr>
                                    <tr><th> ประเภท </th><td> {{ $lot->product->category->name_category }} </td></tr>
                                    <tr><th> ต้นทุน </th><td> {{ $lot->cost }} </td></tr>
                                    <tr><th> ต้นทุนต่อชิ้น </th><td> {{ number_format ($lot->cost / $lot->stock_im )}}</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
