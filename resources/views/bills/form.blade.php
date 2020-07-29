<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'ราคา' }} </label>
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($bill->total) ? $bill->total : request('bill_id')}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group  {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'ผู้ใช้งาน' }}</label>
    <input class="form-control d-none" name="user_id" type="number" id="user_id" value="{{ isset($bill->user_id) ? $bill->user_id : Auth::user()->id}}" >
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($bill->user_id) ? $bill->user->name : Auth::user()->name}}" readonly> 
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไขรายการ' : 'ยืนยันการขาย' }}">
</div>
