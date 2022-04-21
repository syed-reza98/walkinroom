@extends('layouts.app')

@section('template_title')
    {{ $roomdate->name ?? 'Show Roomdate' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Roomdate</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('roomdates.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Room Id:</strong>
                            {{ $roomdate->room_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $roomdate->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Check In:</strong>
                            {{ $roomdate->check_in }}
                        </div>
                        <div class="form-group">
                            <strong>Check Out:</strong>
                            {{ $roomdate->check_out }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
