<div class="form-group d-none {{ $errors->has('deteexp_at') ? 'has-error' : ''}}">
    <label for="deteexp_at" class="control-label">{{ 'วันหมดอายุ' }}</label>
    <input class="form-control" name="deteexp_at" type="datetime-local" id="deteexp_at" value="{{ isset($lot->deteexp_at) ? $lot->deteexp_at : ''}}" >
    {!! $errors->first('deteexp_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="control-label">{{ 'ต้นทุน' }}</label>
    <input class="form-control" name="cost" type="number" id="cost" value="{{ isset($lot->cost) ? $lot->cost : ''}}" >
    {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
    <label for="product_id" class="control-label">{{ 'product_id' }}</label>
    <input class="form-control" name="product_id" type="number" id="product_id" value="{{ isset($lot->product_id) ? $lot->product_id : $product->id}}" readonly >
    {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stock_im') ? 'has-error' : ''}}">
    <label for="stock_im" class="control-label">{{ 'สต็อคเข้าใหม่' }}</label>
    <input class="form-control" name="stock_im" type="number" id="stock_im" value="{{ isset($lot->stock_im) ? $lot->stock_im : ''}}" >
    {!! $errors->first('stock_im', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'ผู้ใช้งาน' }}</label>
    <input class="form-control" name="user_id" type="text" id="user_id" value="{{ isset($lot->user_id) ? $lot->user_id : Auth::user()->id}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
