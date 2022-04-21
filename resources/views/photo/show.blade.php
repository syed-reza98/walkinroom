@extends('layouts.app')

@section('template_title')
    {{ $photo->name ?? 'Show Photo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Photo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('photos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Room Id:</strong>
                            {{ $photo->room_id }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $photo->title }}
                        </div>
                        <div class="form-group">
                            <strong>Path:</strong>
                            {{ $photo->path }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
