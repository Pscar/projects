<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($category->category_id) ? $category->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_category') ? 'has-error' : ''}}">
    <label for="name_category" class="control-label">{{ 'Name Category' }}</label>
    <input class="form-control" name="name_category" type="text" id="name_category" value="{{ isset($category->name_category) ? $category->name_category : ''}}" >
    {!! $errors->first('name_category', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('name_subprkun') ? 'has-error' : ''}}">
    <label for="name_warning" class="control-label">{{ 'name_subprkun' }}</label>
    <input class="form-control" name="name_subprkun" type="text" id="name_subprkun" value="{{ isset($category->name_subprkun) ? $category->name_subprkun : ''}}" >
    {!! $errors->first('name_subprkun', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_howto') ? 'has-error' : ''}}">
    <label for="name_howto" class="control-label">{{ 'name_howto' }}</label>
    <input class="form-control" name="name_howto" type="text" id="name_howto" value="{{ isset($category->name_howto) ? $category->name_howto : ''}}" >
    {!! $errors->first('name_howto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_warning') ? 'has-error' : ''}}">
    <label for="name_warning" class="control-label">{{ 'name_warning' }}</label>
    <input class="form-control" name="name_warning" type="text" id="name_warning" value="{{ isset($category->name_warning) ? $category->name_warning : ''}}" >
    {!! $errors->first('name_warning', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('name_storage') ? 'has-error' : ''}}">
    <label for="name_storage" class="control-label">{{ 'name_storage' }}</label>
    <input class="form-control" name="name_storage" type="text" id="name_storage" value="{{ isset($category->name_storage) ? $category->name_storage : ''}}" >
    {!! $errors->first('name_storage', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
