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
  table,th,td{
  border: 1px solid black;
  text-align: center;
} 
</style>


<h1 style="text-align:center">ร้านขายยาราชพฤกษ์</h1>
<h2 style="text-align:center">รายงานสั่งซื้อยา</h2>
<h3 style="text-align:center"><b>พิมพ์ ณ วันที่ <?php echo date ("d-m-Y H:i:s"); ?><br></h3>

<div class="table-responsive text-center">
    <table style="width:100%" class="table table-sm" id="product">
        <thead>
          <tr>
              <th>รหัสสินค้า</th>
              <th>ต้นทุน</th>
          </tr>
        </thead>
        <tbody> 
          @foreach($lots as $p)
            <tr>                  
                <td>{{ $p->drug_id }}</td>
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
  