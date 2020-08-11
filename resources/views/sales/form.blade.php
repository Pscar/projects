<div class="form-group {{ $errors->has('pro_name') ? 'has-error' : ''}}">
    <label for="pro_name" class="control-label">{{ 'สินค้า' }}</label>
    <input class="form-control" name="pro_name" type="text" id="pro_name" value="{{ isset($sale->pro_name) ? $sale->pro_name : $product->pro_name }}" readonly > 
    {!! $errors->first('pro_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('saleprice') ? 'has-error' : ''}}">
    <label for="saleprice" class="control-label">{{ 'ราคาขาย' }}</label>
    <input class="form-control" name="saleprice" type="number" id="saleprice" value="{{ isset($sale->saleprice) ? $sale->saleprice : $product->saleprice}}" readonly>
    {!! $errors->first('saleprice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'จำนวน' }}</label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($sale->amount) ? $sale->amount : ''}}" >
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stock_ps') ? 'has-error' : ''}}">
    <label for="pro_name" class="control-label">{{ 'คงเหลือ' }}</label>
    <input class="form-control" name="stock_ps" type="text" id="stock_ps" alert value="{{ isset($sale->stock_ps) ? $sale->stock_ps : $product->stock_ps }}" readonly> 
    {!! $errors->first('stock_ps', '<p class="help-block">:message</p>') !!}
</div>
<!-- class d-none -->
<div class="form-group d-none {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'ประเภท' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($sale->category_id) ? $sale->category_id : $product->category_id}}" readonly>
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'คนให้บริการ' }}</label>
    <input class="form-control d-none" name="user_id" type="number" id="user_id" value="{{ isset($sale->user_id) ? $sale->user_id : Auth::user()->id}}" readonly> 
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($sale->user_id) ? $sale->user->name : Auth::user()->name}}" readonly> 
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<!--แสดงให้รับรู้ว่าข้อมูลจาก product_id มาแล้ว และ ทำการโชว์เพื่อให้สามารถตัดสต็อคได้-->
<div class="form-group d-none {{ $errors->has('product_id') ? 'has-error' : ''}}">
    <label for="product_id" class="control-label">{{ 'product_id' }}</label>
    <input class="form-control" name="product_id" type="number" id="product_id" value="{{ isset($sale->product_id) ? $sale->product_id: $product->id }}" readonly > 
    {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'ยืนยันการแก้ไข' ? 'อัพเดทรายการ' : 'ยืนยันการขาย' }}">
</div>
@if($product->stock_ps == 0)
<script>
   alert("สินค้าของคุณหมดแล้ว"); 
</script>
@endif