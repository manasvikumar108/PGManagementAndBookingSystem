@extends('layouts.app')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @include('sections.service')
    @include('sections.room-container-brief')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
