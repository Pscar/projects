<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($information->name) ? $information->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
    <label for="lastname" class="control-label">{{ 'Lastname' }}</label>
    <input class="form-control" name="lastname" type="text" id="lastname" value="{{ isset($information->lastname) ? $information->lastname : ''}}" >
    {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'ที่อยู่' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($information->address) ? $information->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'เบอร์โทร' }}</label>
    <input class="form-control" name="tel" type="number" id="tel" value="{{ isset($information->tel) ? $information->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
    <label for="role" class="control-label">{{ 'สถานะ' }}</label>
    <input class="form-control" name="role" type="text" id="role" value="{{ isset($information->role) ? $information->role : Auth::user()->information->role}}" >
    {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'ชื่อผู้ใช้งาน' }}</label>
    <input class="form-control d-none" name="user_id" type="number" id="user_id" value="{{ isset($information->user_id) ? $information->user_id : ''}}" >
    <input class="form-control" name="user_name" type="text" id="user_name" value="{{ isset($information->user_id) ? $information->name : Auth::user()->information->name}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
