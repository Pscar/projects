<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'Amount' }}</label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($bill->amount) ? $bill->amount : ''}}" >
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale') ? 'has-error' : ''}}">
    <label for="sale" class="control-label">{{ 'Sale' }}</label>
    <input class="form-control" name="sale" type="number" id="sale" value="{{ isset($bill->sale) ? $bill->sale : ''}}" >
    {!! $errors->first('sale', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale_items') ? 'has-error' : ''}}">
    <label for="sale_items" class="control-label">{{ 'Sale Items' }}</label>
    <input class="form-control" name="sale_items" type="number" id="sale_items" value="{{ isset($bill->sale_items) ? $bill->sale_items : ''}}" >
    {!! $errors->first('sale_items', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('receipt_id') ? 'has-error' : ''}}">
    <label for="receipt_id" class="control-label">{{ 'Receipt Id' }}</label>
    <input class="form-control" name="receipt_id" type="number" id="receipt_id" value="{{ isset($bill->receipt_id) ? $bill->receipt_id : ''}}" >
    {!! $errors->first('receipt_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale_id') ? 'has-error' : ''}}">
    <label for="sale_id" class="control-label">{{ 'Sale Id' }}</label>
    <input class="form-control" name="sale_id" type="number" id="sale_id" value="{{ isset($bill->sale_id) ? $bill->sale_id : ''}}" >
    {!! $errors->first('sale_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
