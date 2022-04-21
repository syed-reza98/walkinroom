@extends('layouts.app')

@section('template_title')
    {{ $hotel->name ?? 'Show Hotel' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Hotel</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('hotels.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $hotel->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Location Id:</strong>
                            {{ $hotel->location_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $hotel->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $hotel->description }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $hotel->location }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $hotel->address }}
                        </div>
                        <div class="form-group">
                            <strong>Star:</strong>
                            {{ $hotel->star }}
                        </div>
                        <div class="form-group">
                            <strong>Roomquantity:</strong>
                            {{ $hotel->roomQuantity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
