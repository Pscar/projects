<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="max-width:1200px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มรายการสินค้า</h5>
                <form method="GET" action="{{ url('/lots/create') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="BARCODE" value="{{ request('search') }}">
                        <span class="input-group-append">
                            <button class="btn btn-secondary"type="submit">
                            <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="modal-body">
                <div class="table-responsive text-center">
                    <table id="example" class="table table-sm">
                        <thead>
                            <tr>
                                <th>รหัสยา</th>
                                <th>ยา</th>                                      
                                <th>ราคา</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $item)
                                <tr>
                                    <td>{{ $item->drug_id}}</td>
                                    <td>{{ $item->pro_name }}</td>                                                           
                                    <td>{{ $item->saleprice }}</td>
                                    <td><a href="{{ url('/lots/create') }}?drug_id={{ $item->drug_id }}" title="scan"><button class="btn btn-success">เพิ่มสินค้า</button></td>
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