@extends('layouts.admin')
@section('content')
<div class="container-fluid pt-5 px-lg-5">
@if(Auth::user()->role == "admin")
    <div class="card text-white bg-dark text-center mb-5"style="font-size:3rem;">ยินดีต้อนรับคุณ ( {{ Auth::user()->name }} / Admin )</div>
@elseif(Auth::user()->role == "staff")
    <div class="card text-white bg-light text-center mb-5"style="font-size:3rem;">ยินดีต้อนรับคุณ ( {{ Auth::user()->name }} / เภสัชกร )</div>
@endif
</div>

@endsection
