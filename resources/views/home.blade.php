@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>
                    <br>
                    <a href="{{ route('rooms.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        {{ __('Create Room') }}
                    </a>
                    <br>
                    <br>
                    <a href="{{ route('hotels.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        {{ __('Create Hotel') }}
                    </a>
                    <br>
                    <br>
                    <a href="{{ route('locations.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        {{ __('Assign Location') }}
                    </a>
                    <br>
                    <br>
                    <a href="{{ route('photos.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        {{ __('Assign Room Photo') }}
                    </a>
                    <br>
                    <br>
                    <a href="{{ route('roomdates.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        {{ __('Assign Room Date') }}
                    </a>
                    <br>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
