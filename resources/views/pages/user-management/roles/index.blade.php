@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-2xl font-medium text-gray-900">{{ __('Roles') }}</h2>
            </div>
            <div class="border-t border-gray-200">
                <div class="">
                    @foreach($roles as $role)
                        <div class="text-xl p-2 w-full hover:bg-gray-100">
                            <a href="{{route('users.roles.edit', $role->id )}}">{{ strtoupper($role->name) }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-header')
    @include('pages.user-management.partials.content-header')
@endsection
