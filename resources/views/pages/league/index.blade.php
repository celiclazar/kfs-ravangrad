@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div>Ovde ću izlistati sve lige (sezone) do sada</div>
@endsection

@section('content-header')
    @include('pages.league.partials.content-header')
@endsection
