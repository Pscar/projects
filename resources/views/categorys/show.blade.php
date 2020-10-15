@extends('layouts.admin')
@section('content')
    <div class="container-fluid pt-5 px-lg-5">  
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $category->name_category }}</div>
                    <div class="card-body">

                        <a href="{{ url('/categorys') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ url('/categorys/' . $category->id . '/edit') }}" title="Edit category"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                        <form method="POST" action="{{ url('categorys' . '/' . $category->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th style="width:11.5rem;">รายละเอียดการใช้งานยา</th>
                                    <td>
                                        <p>{{$category->decription}}</p>
                                    </td> 
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
