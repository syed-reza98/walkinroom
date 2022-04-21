<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location_id') }}
            <select id="location_id" type="location_id" name="location_id" class="form-control @error('location_id') is-invalid @enderror" required autocomplete="location_id">
                <option value="">--- Select Location ---</option>
                @foreach ($location as $key)
                <option value="{{ $key->id }}">{{ $key->city }}</option>
                @endforeach
            </select>
            {{-- {{ Form::text('hotel_id', $room->hotel_id, ['class' => 'form-control' . ($errors->has('hotel_id') ? ' is-invalid' : ''), 'placeholder' => 'Hotel Id']) }} --}}
            {!! $errors->first('location_id', '<div class="invalid-feedback">:message</div>') !!}
            {{-- {{ Form::label('location_id') }}
            {{ Form::text('location_id', $hotel->location_id, ['class' => 'form-control' . ($errors->has('location_id') ? ' is-invalid' : ''), 'placeholder' => 'Location Id']) }}
            {!! $errors->first('location_id', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $hotel->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $hotel->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location') }}
            {{ Form::text('location', $hotel->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $hotel->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('star') }}
            {{ Form::text('star', $hotel->star, ['class' => 'form-control' . ($errors->has('star') ? ' is-invalid' : ''), 'placeholder' => 'Star']) }}
            {!! $errors->first('star', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('roomQuantity') }}
            {{ Form::text('roomQuantity', $hotel->roomQuantity, ['class' => 'form-control' . ($errors->has('roomQuantity') ? ' is-invalid' : ''), 'placeholder' => 'Roomquantity']) }}
            {!! $errors->first('roomQuantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
