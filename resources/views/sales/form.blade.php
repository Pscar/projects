<div class="form-group {{ $errors->has('pro_name') ? 'has-error' : ''}}">
    <label for="pro_name" class="control-label">{{ 'สินค้า' }}</label>
    <input class="form-control" name="pro_name" type="text" id="pro_name" value="{{ isset($sale->pro_name) ? $sale->pro_name : '' }}" > 
    {!! $errors->first('pro_name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('saleprice') ? 'has-error' : ''}}">
    <label for="saleprice" class="control-label">{{ 'ราคาขาย' }}</label>
    <input class="form-control" name="saleprice" type="number" id="saleprice" value="{{ isset($sale->saleprice) ? $sale->saleprice : ''}}" >
    {!! $errors->first('saleprice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'ประเภท' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($sale->category_id) ? $sale->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'จำนวน' }}</label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($sale->amount) ? $sale->amount : ''}}" >
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none{{ $errors->has('total_sale') ? 'has-error' : ''}}">
    <label for="total_sale" class="control-label">{{ 'ราคาทั้งหมด' }}</label>
    <input class="form-control" name="total_sale" type="number" id="total_sale" value="{{ isset($sale->total_sale) ? $sale->total_sale : ''}}" >
    {!! $errors->first('total_sale', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'คนให้บริการ' }}</label>
    <input class="form-control " name="user_id " type="number" id="user_id" value="{{ isset($sale->user_id) ? $sale->user_id : Auth::user()->id}}" > 
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
