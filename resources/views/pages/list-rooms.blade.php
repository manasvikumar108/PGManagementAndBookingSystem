@extends('layouts.app')

@include('layouts.header')

@include('sections.booking-header')

@section('content')
    @include('sections.room-container-details')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
