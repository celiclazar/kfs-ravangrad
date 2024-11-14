@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <x-league-content-section title="{{ $league->name }}" :addRoute="route('league.create')" :user="$user">
        <div class="border-t border-gray-200 p-4">
            Ovde idu kola
        </div>
    </x-league-content-section>
@endsection

@section('content-header')
    @include('pages.league.partials.content-header')
@endsection
