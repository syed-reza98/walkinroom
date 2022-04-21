@extends('layouts.app')

@section('template_title')
    {{ $room->name ?? 'Show Room' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Room</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Hotel Id:</strong>
                            {{ $room->hotel_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $room->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $room->title }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong> <br>
                            <img src="{{ Storage::url($room->image) }}" height="200" width="200" alt="" />
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $room->description }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $room->type }}
                        </div>
                        <div class="form-group">
                            <strong>Capacity:</strong>
                            {{ $room->capacity }}
                        </div>
                        <div class="form-group">
                            <strong>Availability:</strong>
                            {{ $room->availability }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $room->price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
