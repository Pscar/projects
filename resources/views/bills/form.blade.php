<div class="form-group d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($bill->user_id) ? $bill->user_id : Auth::user()->id}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'Total' }} </label>
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($bill->total) ? $bill->total : request('bill_id')}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none{{ $errors->has('checking_at :') ? 'has-error' : ''}}">
    <label for="checking_at" class="control-label">{{ 'Checking At' }}</label>
    <input class="form-control" name="checking_at" type="datetime-local" id="checking_at :" value="{{ isset($bill->checking_at) ? $bill->checking_at : ''}}" >
    {!! $errors->first('checking_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none{{ $errors->has('paid_at :') ? 'has-error' : ''}}">
    <label for="paid_at" class="control-label">{{ 'Paid At' }}</label>
    <input class="form-control" name="paid_at" type="datetime-local" id="paid_at :" value="{{ isset($bill->paid_at) ? $bill->paid_at : ''}}" >
    {!! $errors->first('paid_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none{{ $errors->has('cancelled_at') ? 'has-error' : ''}}">
    <label for="cancelled_at" class="control-label">{{ 'Cancelled At' }}</label>
    <input class="form-control" name="cancelled_at" type="datetime-local" id="cancelled_at" value="{{ isset($bill->cancelled_at) ? $bill->cancelled_at : ''}}" >
    {!! $errors->first('cancelled_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none{{ $errors->has('completed_at') ? 'has-error' : ''}}">
    <label for="completed_at" class="control-label">{{ 'Completed At' }}</label>
    <input class="form-control" name="completed_at" type="datetime-local" id="completed_at" value="{{ isset($bill->completed_at) ? $bill->completed_at : ''}}" >
    {!! $errors->first('completed_at', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
