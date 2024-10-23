@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-2xl font-medium text-gray-900">{{ $role->name }}</h2>
            </div>
            <div class="border-t border-gray-200">
                <div class="">
                    <form>
                        <label for="name">Name</label>
                        <input id="name" name="name" required>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-header')
    @include('pages.user-management.partials.content-header')
@endsection
