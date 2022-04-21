@extends('layouts.app')

@section('template_title')
    Create Photo
@endsection

@section('content')
<div class="container mt-5">
    @if(session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
    @endif
    <style>
    .images-preview-div img
    {
    padding: 10px;
    max-width: 100px;
    }
    </style>
    <div class="card">
    <div class="card-header text-center font-weight-bold">
    <h2>Laravel 9 Upload Multiple Image With Preview - Tutsmake.com</h2>
    </div>
    <div class="card-body">
    <form name="images-upload-form" method="POST"  action="{{ route('photos.store') }}" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        {{ Form::label('room_id') }}
        <select id="room_id" type="room_id" name="room_id" class="form-control @error('room_id') is-invalid @enderror" required autocomplete="room_id">
            <option value="">--- Select Room ---</option>
            @foreach ($room as $key)
            <option value="{{ $key->id }}">{{ $key->title }}</option>
            @endforeach
        </select>

        {!! $errors->first('room_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    {{-- <div class="form-group">
        {{ Form::label('room_id') }}
        {{ Form::text('room_id', $photo->room_id, ['class' => 'form-control' . ($errors->has('room_id') ? ' is-invalid' : ''), 'placeholder' => 'Room Id']) }}
        {!! $errors->first('room_id', '<div class="invalid-feedback">:message</div>') !!}
    </div> --}}
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
    <input type="file" name="images[]" id="images" placeholder="Choose images" multiple >
    </div>
    @error('images')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    <div class="col-md-12">
    <div class="mt-1 text-center">
    <div class="images-preview-div"> </div>
    </div>
    </div>
    <div class="col-md-12">
    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </div>
    </div>
    </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script >
    $(function() {
    // Multiple images preview with JavaScript
    var previewImages = function(input, imgPreviewPlaceholder) {
    if (input.files) {
    var filesAmount = input.files.length;
    for (i = 0; i < filesAmount; i++) {
    var reader = new FileReader();
    reader.onload = function(event) {
    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
    }
    reader.readAsDataURL(input.files[i]);
    }
    }
    };
    $('#images').on('change', function() {
    previewImages(this, 'div.images-preview-div');
    });
    });
    </script>
    </div>
    {{-- <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Photo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('photos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('photo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
