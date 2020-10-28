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
                                            <input class="form-control" name="total" type="text"  id="total" value="{{ $sales->sum('total') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label class="col-lg-4">รับเงินมา</label>
                                        <div class="col-lg-2">
                                            <input class="form-control" name="payment" type="text"  id="payment" onChange="onChangePayment(value)" value="" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label class="col-lg-4">เงินทอน</label>
                                        <div class="col-lg-2">
                                          <input class="form-control" name="result" type="text" id="result" value="0" readonly>
                                        </div>
                                        <script>
                                          function onChangePayment(value) {
                                              var total = document.getElementById("total").value;
                                              var payment = document.getElementById("payment").value;
                                                let result = payment - total;
                                                let res = Intl.NumberFormat().format(result);
                                            document.getElementById("result").value = res;
                                                    //total.REPLACE(',' , ''); // 1,745 ==> 1745 str ==> 1745 parse int/float
                                          }
                                        </script>
                                    </div>
                                        <button type="submit" class="btn btn-success btn-sm" onclick="return confirm(&quot;ยืนยันการขายสินค้า?&quot;)"> สั่งสินค้า </button> 
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