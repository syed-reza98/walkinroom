<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('city') }}
            {{ Form::text('city', $location->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>