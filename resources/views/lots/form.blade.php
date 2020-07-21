<div class="form-group {{ $errors->has('drug_id') ? 'has-error' : ''}}">
    <label for="drug_id" class="control-label">{{ 'รหัสสินค้า' }}</label>
    <input class="form-control" name="drug_id" type="text" id="drug_id" value="{{ isset($lot->drug_id) ? $lot->product->drug_id : $product->drug_id}}" readonly>
    {!! $errors->first('drug_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="control-label">{{ 'ต้นทุน' }}</label>
    <input class="form-control" name="cost" type="number" id="cost" value="{{ isset($lot->cost) ? $lot->cost : ''}}" >
    {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group d-none {{ $errors->has('product_id') ? 'has-error' : ''}}">
    <label for="product_id" class="control-label">{{ 'product_id' }}</label>
    <input class="form-control" name="product_id" type="number" id="product_id" value="{{ isset($lot->product_id) ? $lot->product_id : $product->id}}" readonly >
    {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stock_im') ? 'has-error' : ''}}">
    <label for="stock_im" class="control-label">{{ 'สต็อคเข้าใหม่' }}</label>
    <input class="form-control" name="stock_im" type="number" id="stock_im" value="{{ isset($lot->stock_im) ? $lot->stock_im : ''}}" >
    {!! $errors->first('stock_im', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none{{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'ผู้ใช้งาน' }}</label>
    <input class="form-control" name="user_id" type="text" id="user_id" value="{{ isset($lot->user_id) ? $lot->user_id : Auth::user()->id}}" readonly>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
