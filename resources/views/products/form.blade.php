<div class="form-group {{ $errors->has('pro_name') ? 'has-error' : ''}}">
    <label for="pro_name" class="control-label">{{ 'ชื่อยา' }}</label>
    <input class="form-control" name="pro_name" type="text" id="pro_name" value="{{ isset($product->pro_name) ? $product->pro_name : ''}}">
    {!! $errors->first('pro_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('drug_id') ? 'has-error' : ''}}">
    <label for="drug_id" class="control-label">{{ 'รหัสยา' }}</label>
    <input class="form-control" name="drug_id" type="text" id="drug_id" value="{{ isset($product->drug_id) ? $product->drug_id : ''}}">
    {!! $errors->first('drug_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contain') ? 'has-error' : ''}}">
    <label for="contain" class="control-label">{{ 'บรรจุ' }}</label>
    <input class="form-control" name="contain" type="text" id="contain" value="{{ isset($product->contain) ? $product->contain : ''}}">
    {!! $errors->first('contain', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('saleprice') ? 'has-error' : ''}}">
    <label for="saleprice" class="control-label">{{ 'ราคาขาย' }}</label>
    <input class="form-control" name="saleprice" type="number" id="saleprice" value="{{ isset($product->saleprice) ? $product->saleprice : ''}}">
    {!! $errors->first('saleprice', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stock_ps') ? 'has-error' : ''}}">
    <label for="stock_ps" class="control-label">{{ 'สต็อคปัจจุบัน' }}</label>
    <input class="form-control" name="stock_ps" type="number" id="stock_ps" value="{{ isset($product->stock_ps) ? $product->stock_ps : ''}}">
    {!! $errors->first('stock_ps', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'ประเภท' }}</label>
    <select name="category_id" class="form-control form-control-sm" id="category_id" onchange="var category_id = document.querySelector('#category_id');">
    @foreach ($category as $optionValue)
        <option value="{{ $optionValue->id }}"> {{ $optionValue->name_category}}<!--เป็นตัวที่จะแสดงผล--></option>
    @endforeach<!--เป็นการดึง PK จาก category มาแสดงผล-->
    </select>
    <script>
        document.querySelector("#category_id").value = "{{ isset($product->category_id) ? $product->category_id : ''}}";
    </script>
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
