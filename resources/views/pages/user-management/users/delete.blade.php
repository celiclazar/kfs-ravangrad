@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg sm:text-xl font-medium text-gray-900">{{ strtoupper($user->name) }}</h2>
            </div>
            <div class="border-t border-gray-200 p-4">
                <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                    @csrf

                    <div>
                        <p>Are you sure that you want to delete <span class="font-bold">{{$user->name}}</span>? </p>
                        <p>This action is irreversible.</p>
                    </div>

                    <button type="submit"
                            class="mt-4 w-full sm:w-auto bg-primary text-white py-2 px-4 rounded uppercase text-sm sm:text-base">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content-header')
    @include('pages.user-management.partials.content-header')
@endsection
