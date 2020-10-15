<div class="form-group {{ $errors->has('name_category') ? 'has-error' : ''}}">
    <label for="name_category" class="control-label">{{ 'ประเภท' }}</label>
    <input class="form-control" name="name_category" type="text" id="name_category" value="{{ isset($category->name_category) ? $category->name_category : ''}}" >
    {!! $errors->first('name_category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('decription') ? 'has-error' : ''}}">
    <label for="decription" class="control-label">{{ 'รายละเอียดประเภทยา' }}</label>
    <textarea class="form-control" name="decription" type="text" id="decription" value="{{ isset($category->decription) ? $category->decription : ''}}" ></textarea>
    {!! $errors->first('decription', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขรายการประเภทยา' : 'ยืนยันเพิ่มรายการประเภทยา' }}">
</div>
