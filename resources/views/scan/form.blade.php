<div class="form-group {{ $errors->has('drug_id') ? 'has-error' : ''}}">
    <label for="drug_id" class="control-label">{{ 'Product Id' }}</label>
    <input class="form-control" name="drug_id" type="text" id="drug_id" value="{{ isset($scan->drug_id) ? $scan->drug_id : ''}}" >
    {!! $errors->first('drug_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale_id') ? 'has-error' : ''}}">
    <label for="sale_id" class="control-label">{{ 'Sale Id' }}</label>
    <input class="form-control" name="sale_id" type="number" id="sale_id" value="{{ isset($scan->sale_id) ? $scan->sale_id : ''}}" >
    {!! $errors->first('sale_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
