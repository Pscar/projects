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
<h2 style="text-align:center">รายการสต็อคสินค้า</h2>
<h3 style="text-align:center"><b>พิมพ์ ณ วันที่ <?php echo date ("d-m-Y H:i:s"); ?><br></h3>

<div class="table-responsive text-center">
    <table style="width:100%" class="table table-sm" id="product">
        <thead>
          <tr>
              <th>รหัสสินค้า</th>
              <th>ผลิตภัณฑ์</th>                                      
              <th>บรรจุ</th>
              <th>ราคา</th>
              <th>สถานะ</th>
              <th>คงเหลือ</th>
          </tr>
        </thead>
        <tbody> 
          @foreach($products as $p)
            <tr>    
                <td>{{ $p->pro_name }}</td>
                <td>{{ $p->drug_id }}</td>
                <td>{{ $p->contain }}</td>
                <td>{{ $p->saleprice }}</td>
                <td>
                  @if($p->stock_ps >= 100)
                    <span class="badge badge-success">สินค้าพร้อมขาย</span>
                  @elseif($p->stock_ps == 0)
                    <span class="badge badge-danger">สินค้าหมดแล้ว</span>  
                  @else
                    <span class="badge badge-warning">สินค้าจะหมดแล้ว <br></span>
                  @endif
                </td>
                <td>{{ $p->stock_ps}}</td>
            </tr>
        @endforeach
    </table>
</div>
  