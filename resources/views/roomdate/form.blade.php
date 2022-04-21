<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('room_id') }}
            <select id="room_id" type="room_id" name="room_id" class="form-control @error('room_id') is-invalid @enderror" required autocomplete="room_id">
                <option value="">--- Select Room ---</option>
                @foreach ($room as $key)
                <option value="{{ $key->id }}">{{ $key->title }}</option>
                @endforeach
            </select>
            {{-- {{ Form::text('hotel_id', $room->hotel_id, ['class' => 'form-control' . ($errors->has('hotel_id') ? ' is-invalid' : ''), 'placeholder' => 'Hotel Id']) }} --}}
            {{-- {!! $errors->first('room_id', '<div class="invalid-feedback">:message</div>') !!}
            {{ Form::label('room_id') }}
            {{ Form::text('room_id', $roomdate->room_id, ['class' => 'form-control' . ($errors->has('room_id') ? ' is-invalid' : ''), 'placeholder' => 'Room Id']) }}
            {!! $errors->first('room_id', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
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
