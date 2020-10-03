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
        <h1 style="text-align:center;">
        <img src="{{ asset('/storage/1.png')}}"width="75" height="75" class="mr-2" alt="">
            ร้านขายยาราชพฤกษ์
        </h1>
        <h2 style="text-align:center">ยอดขายในช่วงเดือน</h2>
        <h3 style="text-align:center"><b>พิมพ์ ณ วันที่ <?php echo date ("d-m-Y H:i:s"); ?><br></h3> 
    </div><br><br>
    <div class="col-md-12">
       <div class="table-responsive text-center">
          <table style="width:100%" class="table table-sm" id="product">
              <thead>
                <tr>
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
                  @if($p->stock_ps <= 20)
                    <td>{{ $p->pro_name }}</td>
                    <td>{{ $p->contain }}</td>
                    <td>{{ $p->saleprice }}</td>
                    <td> 
                      @if($p->stock_ps == 0)
                        <span class="badge badge-danger">สินค้าหมดแล้ว</span>
                      @else 
                        <span class="badge badge-danger">สินค้าจะหมดแล้ว</span>
                      @endif
                    </td> 
                    <td>{{ $p->stock_ps}}</td>
                  @else
                    <td class="d-none"></td>
                  @endif
                </tr>
                @endforeach
          </table>
      </div> 
    </div>  
  </div>
</div>


  