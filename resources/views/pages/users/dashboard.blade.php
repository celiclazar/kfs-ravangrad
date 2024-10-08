@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg font-medium text-gray-900">{{ __('Dashboard') }}</h2>
            </div>

            <div class="border-t border-gray-200">
                <div class="px-4 py-5 sm:px-6">
                    @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('status') }}</span>
                        </div>
                    @endif

                    <p class="mt-2 text-gray-600">{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
