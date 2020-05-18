<div class="form-group {{ $errors->has('staff_id') ? 'has-error' : ''}}">
    <label for="staff_id" class="control-label">{{ 'staff_id' }}</label>
    <input class="form-control" name="staff_id" type="text" id="staff_id" value="{{ isset($bill->staff_id) ? $bill->staff_id : ''}}" >
    {!! $errors->first('staff_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale_id') ? 'has-error' : ''}}">
    <label for="sale_id" class="control-label">{{ 'Sale Id' }}</label>
    <input class="form-control" name="sale_id" type="text" id="sale_id" value="{{ isset($bill->sale_id) ? $bill->sale_id : ''}}" >
    {!! $errors->first('sale_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total_bill') ? 'has-error' : ''}}">
    <label for="total_bill" class="control-label">{{ 'Sale' }}</label>
    <input class="form-control" name="total_bill" type="text" id="total_bill" value="{{ isset($bill->total_bill) ? $bill->total_bill : ''}}" >
    {!! $errors->first('total_bill', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
