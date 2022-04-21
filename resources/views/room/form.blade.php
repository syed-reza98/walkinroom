<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('hotel_id') }}
            <select id="hotel_id" type="hotel_id" name="hotel_id" class="form-control @error('hotel_id') is-invalid @enderror" required autocomplete="hotel_id">
                <option value="">--- Select Hotel ---</option>
                @foreach ($hotel as $key)
                <option value="{{ $key->id }}">{{ $key->name }}</option>
                @endforeach
            </select>
            {{-- {{ Form::text('hotel_id', $room->hotel_id, ['class' => 'form-control' . ($errors->has('hotel_id') ? ' is-invalid' : ''), 'placeholder' => 'Hotel Id']) }} --}}
            {!! $errors->first('hotel_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $room->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('image') }}
            <input type="file" name="image[]" id="image" class="form-control" placeholder="Choose images" multiple >

            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        {{-- <input type="file" name="image" class="form-control" placeholder="Image"> --}}
        {{-- <div class="form-group">
            <img src="{{ Storage::url($room->image) }}" height="200" width="200" alt="" />
        </div> --}}
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $room->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $room->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacity') }}
            {{ Form::text('capacity', $room->capacity, ['class' => 'form-control' . ($errors->has('capacity') ? ' is-invalid' : ''), 'placeholder' => 'Capacity']) }}
            {!! $errors->first('capacity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('availability') }}
            {{ Form::checkbox('availability', true, ['class' => 'form-control' . ($errors->has('availability') ? ' is-invalid' : ''), 'placeholder' => 'Availability']) }}
            {!! $errors->first('availability', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $room->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
