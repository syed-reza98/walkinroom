<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('room_id') }}
            {{ Form::text('room_id', $roomdate->room_id, ['class' => 'form-control' . ($errors->has('room_id') ? ' is-invalid' : ''), 'placeholder' => 'Room Id']) }}
            {!! $errors->first('room_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('check_in') }}
            {{ Form::date('check_in', $roomdate->check_in, ['class' => 'form-control' . ($errors->has('check_in') ? ' is-invalid' : ''), 'placeholder' => 'Check In']) }}
            {!! $errors->first('check_in', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('check_out') }}
            {{ Form::date('check_out', $roomdate->check_out, ['class' => 'form-control' . ($errors->has('check_out') ? ' is-invalid' : ''), 'placeholder' => 'Check Out']) }}
            {!! $errors->first('check_out', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
