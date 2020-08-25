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
                                    <tr><th> รายละเอียดการใช้งานยา</th>
                                    <td>
                                        @if($lot->product->category_id == 1 )
                                            <span>
                                            <u>ยานี้ใช้สำหรับ</u>&nbsp;&nbsp;&nbsp;เป็นยาฆ่าเชื้อโรคในลำไส้ ใช้แก้โรคท้องร่วงที่ไม่รุนแรง เคลือบลำไส้ไม่ให้สัมผัสหรือดูดซึมสารพิษ<br>
                                            <u>วิธีใช้ยา</u>&nbsp;&nbsp;&nbsp;ให้เขย่าขวดก่อนรับประทานยานี้ทุกครั้ง<br>
                                            <u>เด็กอายุ 6-12 ปี</u>&nbsp;&nbsp;&nbsp;รับประทานครั้งละ ครึ่ง-1 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง<br>
                                            <u>เด็กอายุ 12 ปีขึ้นไป และผู้ใหญ่</u> &nbsp;&nbsp;&nbsp;รับประทานครั้งละ 1-2 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง
                                            </span>
                                        @elseif($lot->product->category_id == 2)
                                            <span>
                                            <u>ยานี้ใช้สำหรับ</u>&nbsp;&nbsp;&nbsp;เป็นยาฆ่าเชื้อโรคในลำไส้ ใช้แก้โรคท้องร่วงที่ไม่รุนแรง เคลือบลำไส้ไม่ให้สัมผัสหรือดูดซึมสารพิษ<br>
                                            <u>วิธีใช้ยา</u>&nbsp;&nbsp;&nbsp;ให้เขย่าขวดก่อนรับประทานยานี้ทุกครั้ง<br>
                                            <u>เด็กอายุ 6-12 ปี</u>&nbsp;&nbsp;&nbsp;รับประทานครั้งละ ครึ่ง-1 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง<br>
                                            <u>เด็กอายุ 12 ปีขึ้นไป และผู้ใหญ่</u> &nbsp;&nbsp;&nbsp;รับประทานครั้งละ 1-2 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง
                                            </span>
                                        @elseif($lot->product->category_id == 3)
                                            <span>
                                            <u>ยานี้ใช้สำหรับ</u>&nbsp;&nbsp;&nbsp;เป็นยาฆ่าเชื้อโรคในลำไส้ ใช้แก้โรคท้องร่วงที่ไม่รุนแรง เคลือบลำไส้ไม่ให้สัมผัสหรือดูดซึมสารพิษ<br>
                                            <u>วิธีใช้ยา</u>&nbsp;&nbsp;&nbsp;ให้เขย่าขวดก่อนรับประทานยานี้ทุกครั้ง<br>
                                            <u>เด็กอายุ 6-12 ปี</u>&nbsp;&nbsp;&nbsp;รับประทานครั้งละ ครึ่ง-1 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง<br>
                                            <u>เด็กอายุ 12 ปีขึ้นไป และผู้ใหญ่</u> &nbsp;&nbsp;&nbsp;รับประทานครั้งละ 1-2 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง
                                            </span>
                                        @elseif($lot->product->category_id == 4)
                                            <span>
                                            <u>ยานี้ใช้สำหรับ</u>&nbsp;&nbsp;&nbsp;เป็นยาฆ่าเชื้อโรคในลำไส้ ใช้แก้โรคท้องร่วงที่ไม่รุนแรง เคลือบลำไส้ไม่ให้สัมผัสหรือดูดซึมสารพิษ<br>
                                            <u>วิธีใช้ยา</u>&nbsp;&nbsp;&nbsp;ให้เขย่าขวดก่อนรับประทานยานี้ทุกครั้ง<br>
                                            <u>เด็กอายุ 6-12 ปี</u>&nbsp;&nbsp;&nbsp;รับประทานครั้งละ ครึ่ง-1 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง<br>
                                            <u>เด็กอายุ 12 ปีขึ้นไป และผู้ใหญ่</u> &nbsp;&nbsp;&nbsp;รับประทานครั้งละ 1-2 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง
                                            </span>
                                        @elseif($lot->product->category_id == 5)
                                            <span>
                                            <u>ยานี้ใช้สำหรับ</u>&nbsp;&nbsp;&nbsp;เป็นยาฆ่าเชื้อโรคในลำไส้ ใช้แก้โรคท้องร่วงที่ไม่รุนแรง เคลือบลำไส้ไม่ให้สัมผัสหรือดูดซึมสารพิษ<br>
                                            <u>วิธีใช้ยา</u>&nbsp;&nbsp;&nbsp;ให้เขย่าขวดก่อนรับประทานยานี้ทุกครั้ง<br>
                                            <u>เด็กอายุ 6-12 ปี</u>&nbsp;&nbsp;&nbsp;รับประทานครั้งละ ครึ่ง-1 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง<br>
                                            <u>เด็กอายุ 12 ปีขึ้นไป และผู้ใหญ่</u> &nbsp;&nbsp;&nbsp;รับประทานครั้งละ 1-2 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง
                                            </span>
                                        @elseif($lot->product->category_id == 6)
                                            <span>
                                            <u>ยานี้ใช้สำหรับ</u>&nbsp;&nbsp;&nbsp;เป็นยาฆ่าเชื้อโรคในลำไส้ ใช้แก้โรคท้องร่วงที่ไม่รุนแรง เคลือบลำไส้ไม่ให้สัมผัสหรือดูดซึมสารพิษ<br>
                                            <u>วิธีใช้ยา</u>&nbsp;&nbsp;&nbsp;ให้เขย่าขวดก่อนรับประทานยานี้ทุกครั้ง<br>
                                            <u>เด็กอายุ 6-12 ปี</u>&nbsp;&nbsp;&nbsp;รับประทานครั้งละ ครึ่ง-1 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง<br>
                                            <u>เด็กอายุ 12 ปีขึ้นไป และผู้ใหญ่</u> &nbsp;&nbsp;&nbsp;รับประทานครั้งละ 1-2 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง
                                            </span>
                                        @elseif($lot->product->category_id == 7)
                                            <span>
                                            <u>ยานี้ใช้สำหรับ</u>&nbsp;&nbsp;&nbsp;เป็นยาฆ่าเชื้อโรคในลำไส้ ใช้แก้โรคท้องร่วงที่ไม่รุนแรง เคลือบลำไส้ไม่ให้สัมผัสหรือดูดซึมสารพิษ<br>
                                            <u>วิธีใช้ยา</u>&nbsp;&nbsp;&nbsp;ให้เขย่าขวดก่อนรับประทานยานี้ทุกครั้ง<br>
                                            <u>เด็กอายุ 6-12 ปี</u>&nbsp;&nbsp;&nbsp;รับประทานครั้งละ ครึ่ง-1 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง<br>
                                            <u>เด็กอายุ 12 ปีขึ้นไป และผู้ใหญ่</u> &nbsp;&nbsp;&nbsp;รับประทานครั้งละ 1-2 ช้อนโต๊ะ หลังอาหารเช้า กลางวัน และเย็น หรือทุกๆ 4-6 ชั่วโมง
                                            </span>
                                        @else
                                            <span></span>
                                        @endif
                                    </td>
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
