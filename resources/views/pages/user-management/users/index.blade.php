@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg font-medium text-gray-900">{{ strtoupper('List of Users') }}</h2>
            </div>
            <div class="border-t border-gray-200">
                @foreach($users as $user)
                    <div class="px-4 py-5 sm:px-6">
                        <a href="{{route('users.edit', $user->id )}}" class="text-lg mt-2 text-gray-600">{{ $user->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('content-header')
    @include('pages.user-management.users.partials.content-header')
@endsection
