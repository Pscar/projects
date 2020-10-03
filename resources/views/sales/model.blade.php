<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" style="max-width:500px;">
      <div class="modal-content">
          <div class="modal-header">จ่ายเงิน</div>
          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form name="frm" method="POST" action="{{ url('/bills') }}" accept-charset="UTF-8" class="form-horizontal text-center" enctype="multipart/form-data">
                                    {{ csrf_field() }} 
                                    <div class="form-group form-inline">
                                        <label class="col-lg-4">ยอดจ่าย</label> 
                                        <div class="col-lg-2">
                                            <input class="form-control" type="text"  id="total" value="{{ number_format($sales->sum('total')) }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label class="col-lg-4">รับเงินมา</label> 
                                        <div class="col-lg-2">
                                            <input class="form-control" type="text"  id="payment" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label class="col-lg-4">เงินทอน</label> 
                                        <div class="col-lg-2">
                                          <span id="result"></span>
                                        </div>                                              
                                        <script>
                                          function divideBy(){
                                              total = document.getElementById("total").value;
                                              payment = document.getElementById("payment").value;
                                              result = document.getElementById("result").innerHTML = payment - total;
                                          }
                                        </script>
                                    </div>
                                        <button type="submit" class="btn btn-success btn-sm" onclick="divideBy()"> สั่งสินค้า </button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>