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
    <table style="border-collapse: collapse; width: 100%; height: 106px;" border="1">
        <tbody>
            <tr style="height: 106px;">
                <td style="width: 100%; height: 106px;">
                    <h1 style="text-align: center; margin-top: 1rem">ร้านหมอยาราชพฤกษ์</h1>
                    <h2 style="text-align: center; margin-top: 0.2rem">รายงานการสั่งซื้อสินค้า {{ request('month') }} / {{ request('year') }}</h2>
                    <p style="margin-top: 0.85rem; text-align: center;">ที่อยู่ 9/350 หมู่14 คลองหนึ่ง คลองหลวง ปทุมธานี 12120 &nbsp;</p>
                    <p style="margin-top: -1.5rem;">เวลา : <?php echo date ("d-m-Y H:i:s"); ?> &nbsp;&nbsp; ผู้ใช้งาน {{ Auth::user()->name }}  {{ Auth::user()->lastname }}</p>
                    <table style="border-collapse: collapse; width: 100%; padding:1rem" border="1">
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
                </td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
