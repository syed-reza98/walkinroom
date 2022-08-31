@extends('layouts.app2')

@section('content')

    <!-- Section 2 hero -->
    @include('layouts.hero')

    <!-- Section 3 popular -->
    @include('partials.popular')

    @include('partials.list')

    @include('partials.list2')

    <!-- Section 4 testimonial -->
    {{-- @include('partials.testimonial') --}}




    <!-- Section 6 othersite -->
    {{-- @include('partials.othersite') --}}

    <!-- Section 5 callaction -->
    @include('partials.callaction')

<!-- Section 7 -->


@endsection
