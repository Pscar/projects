<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="max-width:1200px;">
        <div class="modal-content">
            <div class="modal-header">
                <form method="GET" action="{{ url('/sales/create') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="drug_id" placeholder="BARCODE" class="form-inline my-2 my-lg-0 float-right" value="{{ request('search') }}">
                        <span class="input-group-append">
                            <button class="btn btn-secondary"type="submit">
                            <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <script language="javascript">
                    function fncAlert(){
                        if($item->stock_ps >= 0){
                            alert('สินค้าคุณหมดแล้วไม่สามารถขายได้');
                        }
                        else(){
                        }
                    }
                </script>               
            </div>
            <div class="modal-body">
                <div class="table-responsive text-center">
                    <table id="example" class="table-hover">
                        <thead>
                            <tr>
                                <th>รหัสยา</th>
                                <th>ยา</th>                                      
                                <th>ราคา</th>
                                <th>สถานะ</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $item)
                                <tr>
                                    <td>{{ $item->drug_id}}</td>
                                    <td>{{ $item->pro_name }}</td>                                                           
                                    <td>{{ $item->saleprice }}</td>
                                    <td>
                                        @if($item->stock_ps >= 100)
                                            <span class="badge badge-success">สินค้าพร้อมขาย</span>
                                        @elseif($item->stock_ps == 0)
                                            <span class="badge badge-danger">สินค้าหมดแล้ว</span>  
                                        @else
                                            <span class="badge badge-warning">สินค้าจะหมดแล้ว</span>
                                        @endif
                                    </td>
                                    <!--เช็คสถานะ ถ้าสต็อคหมดจะไม่สามารถสแกนสินค้าได้-->
                                    @if($item->stock_ps == 0)
                                        <td>{{$item->stock_ps}}</td>
                                    @else
                                        <td></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

