<div class="form-group {{ $errors->has('sale_price') ? 'has-error' : ''}}">
    <label for="sale_price" class="control-label">{{ 'Sale Price' }}</label>
    <input class="form-control" name="sale_price" type="number" id="sale_price" value="{{ isset($sale->sale_price) ? $sale->sale_price : ''}}" >
    {!! $errors->first('sale_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($sale->name) ? $sale->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($sale->category_id) ? $sale->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('staff_id') ? 'has-error' : ''}}">
    <label for="staff_id" class="control-label">{{ 'Staff Id' }}</label>
    <input class="form-control" name="staff_id" type="number" id="staff_id" value="{{ isset($sale->staff_id) ? $sale->staff_id : ''}}" >
    {!! $errors->first('staff_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale_id') ? 'has-error' : ''}}">
    <label for="sale_id" class="control-label">{{ 'Sale Id' }}</label>
    <input class="form-control" name="sale_id" type="number" id="sale_id" value="{{ isset($sale->sale_id) ? $sale->sale_id : ''}}" >
    {!! $errors->first('sale_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
