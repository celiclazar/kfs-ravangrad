@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h2 class="text-lg font-medium text-gray-900">{{ __('Roles') }}</h2>
                </div>

                <div class="border-t border-gray-200">
                    <div class="px-4 py-5 sm:px-6">
                        @foreach($roles as $role)
                            <p>{{ strtoupper($role) }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content-header')
    @include('pages.user-management.partials.content-header')
@endsection
