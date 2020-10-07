@extends('layouts.admin')
@section('content')
<div clas="report container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">
            <img src="{{ asset('/storage/1.png')}}"width="75" height="75" class="mr-2" alt="">
                ร้านขายยาราชพฤกษ์
            </h1>
            <h2 style="text-align:center">ต้นทุน กำไร รายการขาย</h2>
            <h3 style="text-align:center"><b>พิมพ์ ณ วันที่ <?php echo date ("d-m-Y H:i:s"); ?><br></h3> 
        </div><br><br>
        <div class="col-md-12">
        <form method="GET" action="{{ url('/report') }}" accept-charset="UTF-8" class="form-horizontal text-center" enctype="multipart/form-data">
            <div class="form-group {{ $errors->has('yearselect') ? 'has-error' : ''}}">
                <label for="yearselect" class="control-label">{{ 'เลือกปี' }}</label>
                <select name="yearselect" class="form-control form-control-sm" id="yearselect">
                    <option value="2020">2020</option>
                <input class="btn btn-primary" type="submit">
                </select>
            </div>
        </form>
        </div>  
    </div>
</div>
  
@endsection





