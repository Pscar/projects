<div class="form-group {{ $errors->has('pro_name') ? 'has-error' : ''}}">
    <label for="pro_name" class="control-label">{{ 'Pro Name' }}</label>
    <input class="form-control" name="pro_name" type="text" id="pro_name" value="{{ isset($product->pro_name) ? $product->pro_name : ''}}" >
    {!! $errors->first('pro_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('barcode') ? 'has-error' : ''}}">
    <label for="barcode" class="control-label">{{ 'Barcode' }}</label>
    <input class="form-control" name="barcode" type="text" id="barcode" value="{{ isset($product->barcode) ? $product->barcode : ''}}" >
    {!! $errors->first('barcode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contain') ? 'has-error' : ''}}">
    <label for="contain" class="control-label">{{ 'Contain' }}</label>
    <input class="form-control" name="contain" type="text" id="contain" value="{{ isset($product->contain) ? $product->contain : ''}}" >
    {!! $errors->first('contain', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status_sale') ? 'has-error' : ''}}">
    <label for="status_sale" class="control-label">{{ 'Status Sale' }}</label>
    <input class="form-control" name="status_sale" type="text" id="status_sale" value="{{ isset($product->status_sale) ? $product->status_sale : ''}}" >
    {!! $errors->first('status_sale', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('saleprice') ? 'has-error' : ''}}">
    <label for="saleprice" class="control-label">{{ 'Saleprice' }}</label>
    <input class="form-control" name="saleprice" type="number" id="saleprice" value="{{ isset($product->saleprice) ? $product->saleprice : ''}}" >
    {!! $errors->first('saleprice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stock_ps') ? 'has-error' : ''}}">
    <label for="stock_ps" class="control-label">{{ 'Stock Ps' }}</label>
    <input class="form-control" name="stock_ps" type="number" id="stock_ps" value="{{ isset($product->stock_ps) ? $product->stock_ps : ''}}" >
    {!! $errors->first('stock_ps', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($product->category_id) ? $product->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
