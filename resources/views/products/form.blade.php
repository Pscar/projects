<div class="form-group {{ $errors->has('pro_name') ? 'has-error' : ''}}">
    <label for="pro_name" class="control-label">{{ 'Pro Name' }}</label>
    <input class="form-control" name="pro_name" type="text" id="pro_name" value="{{ isset($product->pro_name) ? $product->pro_name : ''}}" >
    {!! $errors->first('pro_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="control-label">{{ 'Detail' }}</label>
    <textarea class="form-control" rows="5" name="detail" type="textarea" id="detail" >{{ isset($product->detail) ? $product->detail : ''}}</textarea>
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale_price') ? 'has-error' : ''}}">
    <label for="sale_price" class="control-label">{{ 'Sale Price' }}</label>
    <input class="form-control" name="sale_price" type="number" id="sale_price" value="{{ isset($product->sale_price) ? $product->sale_price : ''}}" >
    {!! $errors->first('sale_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('drug_id') ? 'has-error' : ''}}">
    <label for="drug_id" class="control-label">{{ 'Drug Id' }}</label>
    <input class="form-control" name="drug_id" type="number" id="drug_id" value="{{ isset($product->drug_id) ? $product->drug_id : ''}}" >
    {!! $errors->first('drug_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($product->category_id) ? $product->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
