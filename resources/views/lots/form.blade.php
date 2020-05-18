<div class="form-group {{ $errors->has('drug_id') ? 'has-error' : ''}}">
    <label for="drug_id" class="control-label">{{ 'drug_id' }}</label>
    <input class="form-control" name="drug_id" type="number" id="drug_id" value="{{ isset($lot->drug_id) ? $lot->drug_id : $product->id }}" >
    {!! $errors->first('drug_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('deteexp_at') ? 'has-error' : ''}}">
    <label for="deteexp_at" class="control-label">{{ 'deteexp_at' }}</label>
    <input class="form-control" name="deteexp_at" type="datetime-local" id="deteexp_at" value="{{ isset($lot->deteexp_at) ? $lot->deteexp_at : ''}}" >
    {!! $errors->first('deteexp_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="control-label">{{ 'Cost' }}</label>
    <input class="form-control" name="cost" type="number" id="cost" value="{{ isset($lot->cost) ? $lot->cost : ''}}" >
    {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stock_im') ? 'has-error' : ''}}">
    <label for="stock_im" class="control-label">{{ 'stock_im' }}</label>
    <input class="form-control" name="stock_im" type="text" id="stock_im" value="{{ isset($lot->stock_im) ? $lot->stock_im : ''}}" >
    {!! $errors->first('stock_im', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
