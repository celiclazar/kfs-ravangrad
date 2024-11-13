@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <x-league-content-section title="Leagues">

    </x-league-content-section>
@endsection

@section('content-header')
    @include('pages.league.partials.content-header')
@endsection
