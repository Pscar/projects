<style>
@font-face{
 font-family:  'THSarabunNew';
 font-style: normal;
 font-weight: normal;
 src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
}
@font-face{
 font-family:  'THSarabunNew';
 font-style: normal;
 font-weight: bold;
 src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
}
@font-face{
 font-family:  'THSarabunNew';
 font-style: italic;
 font-weight: normal;
 src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
}
@font-face{
 font-family:  'THSarabunNew';
 font-style: italic;
 font-weight: bold;
 src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
}
body{
 font-family: "THSarabunNew";
 font-size: 16px;
}
@page {
      size: A4;
      padding: 15px;
    }
    @media print {
      html, body {
        width: 210mm;
        height: 297mm;
        /*font-size : 16px;*/
      }
    }
table,th,td {
border: solid black;
text-align: center;
border-collapse: collapse;
} 
img {
  position: absolute;
  left: 10px;
  top: 1px;
}
h1 ,h2,h3 { 
  right: 15px;
  margin: 0;
  padding:0;
}

</style>

<div clas="report container">
    <div class="row">
        <div class="col-md-12">
        <div class="table-responsive">
                <table style="border-collapse: collapse; width: 100%; height: 106px;" border="1">
                    <tbody>
                        <tr style="height: 106px;">
                            <td style="width: 100%; height: 106px;">
                                <img src="{{ asset('/storage/1.png')}}"width="75" height="75" class="mr-2" alt="" style="padding:1rem; margin-top:0.5rem">
                                <h1 style="text-align: center; margin-top: 1rem">ร้านหมอยาราชพฤกษ์</h1>
                                <h2 style="text-align: center; margin-top: 0.2rem">ยอดขายประจำปี</h2>
                                <p style="margin-top: 0.85rem; text-align: center;">ที่อยู่ 9/350 หมู่14 คลองหนึ่ง คลองหลวง ปทุมธานี 12120 &nbsp;</p>
                                <p style="margin-top: -1.5rem;">เวลา : <?php echo date ("d-m-Y H:i:s"); ?> &nbsp;&nbsp; ผู้ใช้งาน {{ Auth::user()->name }}  {{ Auth::user()->lastname }}</p>
                                <table style="border-collapse: collapse; width: 100%; padding:1rem" border="1">
                                    <thead>
                                    <tr><td colspan="6">รายการที่ขายได้ทั้งหมด</td></tr>
                                        <tr>
                                            <th>ชื่อยา</th> 
                                            <th>จำนวนที่ขาย (ชิ้น)</th>
                                            <th>ราคาที่ขาย (บาท)</th>
                                            <th>ยอดรวม (บาท)</th>
                                            <th>ต้นทุน (บาท)</th>
                                            <th>กำไร (บาท) </th>
                                        </tr>
                                    </thead>
                                    @foreach ($PDFReport as $PDFReports)
                                        <tr>
                                            <td>{{ $PDFReports->pro_name }}</td>
                                            <td>{{ $PDFReports->amount }}</td>
                                            <td>{{ $PDFReports->saleprice }}</td>
                                            <td>{{ $PDFReports->total }}</td>
                                            <td>{{ $PDFReports->percost}}</td>
                                            <td>{{ $PDFReports->profit }}</td>
                                        </tr>
                                    @endforeach
                                        <tr>
                                            <td>ทั้งหมด</td>
                                            <td>{{ number_format($PDFReports->sum('amount')),2 }} (ชิ้น)</td>
                                            <td>{{ number_format($PDFReports->sum('saleprice')),2 }} (บาท)</td>
                                            <td>{{ number_format($PDFReports->sum('total')),2 }} (บาท)</td>
                                            <td>{{ number_format($PDFReports->sum('percost')),2 }} (บาท)</td>
                                            <td>{{ number_format($PDFReports->sum('profit')),2 }} (บาท)</td>
                                        </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <h1 style="text-align:center;">
                <img src="{{ asset('/storage/1.png')}}"width="75" height="75" class="mr-2" alt="">
                ร้านขายยาราชพฤกษ์
            </h1>
            <h2 style="text-align:center;"> ยอดขายประจำปี {{ request('year') }} </h2>
        </div>
        <br/>
        <br/>

        <div class="col-md-12">
            <div class="table-responsive">
                <table style="width:100%" class="table text-center">
                    <thead>
                    <tr><td colspan="6">รายการที่ขายได้ทั้งหมด</td></tr>
                        <tr>
                            <th>ชื่อยา</th> 
                            <th>จำนวนที่ขาย (ชิ้น)</th>
                            <th>ราคาที่ขาย (บาท)</th>
                            <th>ยอดรวม (บาท)</th>
                            <th>ต้นทุน (บาท)</th>
                            <th>กำไร (บาท) </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($PDFReport as $PDFReports)
                            <tr>
                                <td>{{ $PDFReports->pro_name }}</td>
                                <td>{{ $PDFReports->amount }}</td>
                                <td>{{ $PDFReports->saleprice }}</td>
                                <td>{{ $PDFReports->total }}</td>
                                <td>{{ $PDFReports->percost}}</td>
                                <td>{{ $PDFReports->profit }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>ทั้งหมด</td>
                            <td>{{ number_format($PDFReports->sum('amount')),2 }} (ชิ้น)</td>
                            <td>{{ number_format($PDFReports->sum('saleprice')),2 }} (บาท)</td>
                            <td>{{ number_format($PDFReports->sum('total')),2 }} (บาท)</td>
                            <td>{{ number_format($PDFReports->sum('percost')),2 }} (บาท)</td>
                            <td>{{ number_format($PDFReports->sum('profit')),2 }} (บาท)</td>
                        </tr>
                    </tbody>
                </table> 
            </div> -->
        </div>
    </div>
</div>
