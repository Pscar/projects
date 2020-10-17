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
.logo {
  position: absolute;
  left: 50px;
  top: 1px;
}
h1,h2,h3 { 
  right: 15px;
  margin: 0;
  padding:0;
}
</style>
<div clas="report container">
  <div class="row">
    <div class="col-md-12">
        <h1 style="text-align:center;">
        <img src="{{ asset('/storage/1.png')}}" id="logo" width="75" height="75" class="mr-2" alt="">
            ร้านขายยาราชพฤกษ์
        </h1>
        <h2 style="text-align:center">รายงานการสั่งซื้อสินค้า {{ request('month') }} / {{ request('year') }} </h2>
    </div><br><br>
    <div class="col-md-12">
      <div class="table-responsive text-center">
          <table style="width:100%" class="table table-sm" id="product">
              <thead>
                <tr>
                    <th>ผลิตภัณฑ์</th>
                    <th>ต้นทุน</th>
                </tr>
              </thead>
              <tbody> 
                @foreach ($PDFReport as $PDFReports)
                    <tr>
                    <td> <br>
                        <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($PDFReports->drug_id, 'C128') }}"><br>
                        {{ $PDFReports->drug_id }}
                    </td>
                    <td>{{ $PDFReports->cost}}</td>
                    </tr>
                @endforeach
                  <tr>
                      <td>รวมรายจ่าย</td>
                      <td>{{number_format($PDFReports->sum('cost'))}}</td>
                  </tr>
              </tbody>
          </table>
      </div>
    </div>
  </div>
</div>