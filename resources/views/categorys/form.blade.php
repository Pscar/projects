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

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
