<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($user->name) ? $user->name : ''}}">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
    <label for="lastname" class="control-label">{{ 'Lastname' }}</label>
    <input class="form-control" name="lastname" type="text" id="lastname" value="{{ isset($user->lastname) ? $user->lastname : ''}}">
    {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
    <label for="role" class="control-label">{{ 'Role' }}</label>
    <input class="form-control"name="role" type="text" id="role" value="{{ isset($user->role) ? $user->role : ''}}">
    {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'Tel' }}</label>
    <input class="form-control"name="tel" type="text" id="tel" value="{{ isset($user->tel) ? $user->tel : ''}}">
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($user->email) ? $user->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
