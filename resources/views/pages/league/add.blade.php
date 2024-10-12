@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div>
        Ovo će biti deo gde se dodaju pizdarije
    </div>
@endsection

@section('content-header')
    @include('pages.league.partials.content-header')
@endsection
