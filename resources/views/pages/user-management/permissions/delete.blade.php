@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg sm:text-xl font-medium text-gray-900">{{ strtoupper($permission->name) }}</h2>
            </div>
            <div class="border-t border-gray-200 p-4 text-2xl">
                <form method="POST" action="{{ route('users.permissions.destroy', $permission->id) }}">
                    @csrf

                    <div>
                        <p>Are you sure that you want to delete <span class="font-bold">{{$permission->name}}</span> permission? </p>
                        <p>This action is irreversible.</p>
                    </div>

                    <div class="mt-4 space-x-4">
                        <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded uppercase text-sm">
                            Confirm Delete
                        </button>
                        <a href="{{ route('users.permissions') }}" class="bg-gray-500 text-white py-2 px-4 rounded uppercase text-sm">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content-header')
    @include('pages.user-management.partials.content-header')
@endsection
