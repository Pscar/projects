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
} 
</style>
<style>
  table,th,td{
      style: border: 1px solid black;
      text-align: center;
    }   
</style>

<h1 style="text-align:center">ร้านขายยาราชพฤกษ์</h1>
<h2 style="text-align:center">ยอดขายในช่วงเดือน</h2>
<h3 style="text-align:center"><b>พิมพ์ ณ วันที่ <?php echo date ("d-m-Y H:i:s"); ?><br></h3>

<div class="table-responsive">
    <table style="width:100%" class="table text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>เวลาขาย</th>
                <th>ชื่อยา</th>
                <th>จำนวน</th> 
                <th>ราคาขาย</th> 
            </tr>
        </thead>
        <tbody>
        @foreach($bills as $item)
            @foreach($item->sales as $sale)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $sale->pro_name }}</td>
                <td>{{ $sale->amount }}</td>
                <td>{{ $item->total}}</td>
            </tr>
            @endforeach
        @endforeach
            <tr>
                <td colspan="3">จำนวนของที่ขายได้</td>
                <td rowspan="2">{{number_format($sale->sum('amount'))}}</td>
                <td rowspan="2">{{number_format($bills->sum('total'))}}</td>
            </tr>
            <tr> 
                <td colspan="3">ราคาที่ขายได้ทั้งหมด</td>
            </tr>
        </tbody>
    </table>
</div>
  