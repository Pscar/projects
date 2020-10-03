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
        <h2 style="text-align:center">รายงานการสั่งซื้อสินค้า เดือน ตุลาคม</h2>
        <h3 style="text-align:center"><b>พิมพ์ ณ วันที่ <?php echo date ("d H:i:s"); ?><br></h3> 
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
                @foreach($lots as $p)
                  <tr>                  
                      <td><br>                        
                        <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($p->drug_id, 'C128') }}"><br>
                        {{ $p->drug_id }}
                      </td>
                      <td>{{ $p->cost}}</td>
                  </tr>
                @endforeach
                  <tr>
                      <td>รวมรายจ่าย</td>
                      <td>{{number_format($lots->sum('cost'))}}</td>
                  </tr>
              </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
  