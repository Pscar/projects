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
<div class="form-group {{ $errors->has('stock_im') ? 'has-error' : ''}}">
    <label for="stock_im" class="control-label">{{ 'สต็อคเข้าใหม่' }}</label>
    <input class="form-control" name="stock_im" type="number" id="stock_im" value="{{ isset($lot->stock_im) ? $lot->stock_im : ''}}" >
    {!! $errors->first('stock_im', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('drug_id') ? 'has-error' : ''}}">
    <label for="drug_id" class="control-label">{{ 'รหัสยา' }}</label>
    <select name="drug_id" class="form-control form-control-sm" id=drug_id" onchange="var drug_id = document.querySelector('#drug_id');">
    @foreach ($product as $optionValue)
        <option value="{{ $optionValue->drug_id }}"> {{ $optionValue->pro_name}}<!--เป็นตัวที่จะแสดงผลใน select form--></option>
    @endforeach<!--เป็นการดึง drug_id จาก product มาแสดงผล-->
    </select>
    <script>
        document.querySelector("#drug_id").value = "{{ isset($lot->drug_id) ? $lot->drug_id : ''}}";
    </script>
    <input class="form-control d-none" name="drug_id" type="text" id="drug_id" value="{{ isset($lot->drug_id) ? $lot->drug_id : ''}}" >
    {!! $errors->first('drug_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
