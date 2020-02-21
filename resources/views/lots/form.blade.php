<div class="form-group {{ $errors->has('dete_exp') ? 'has-error' : ''}}">
    <label for="dete_exp" class="control-label">{{ 'Dete Exp' }}</label>
    <input class="form-control" name="dete_exp" type="number" id="dete_exp" value="{{ isset($lot->dete_exp) ? $lot->dete_exp : ''}}" >
    {!! $errors->first('dete_exp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dete_enday') ? 'has-error' : ''}}">
    <label for="dete_enday" class="control-label">{{ 'Dete Enday' }}</label>
    <input class="form-control" name="dete_enday" type="datetime-local" id="dete_enday" value="{{ isset($lot->dete_enday) ? $lot->dete_enday : ''}}" >
    {!! $errors->first('dete_enday', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('drug_id') ? 'has-error' : ''}}">
    <label for="drug_id" class="control-label">{{ 'Drug Id' }}</label>
    <input class="form-control" name="drug_id" type="number" id="drug_id" value="{{ isset($lot->drug_id) ? $lot->drug_id : ''}}" >
    {!! $errors->first('drug_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="control-label">{{ 'Cost' }}</label>
    <input class="form-control" name="cost" type="number" id="cost" value="{{ isset($lot->cost) ? $lot->cost : ''}}" >
    {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lot_id') ? 'has-error' : ''}}">
    <label for="lot_id" class="control-label">{{ 'Lot Id' }}</label>
    <input class="form-control" name="lot_id" type="number" id="lot_id" value="{{ isset($lot->lot_id) ? $lot->lot_id : ''}}" >
    {!! $errors->first('lot_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
