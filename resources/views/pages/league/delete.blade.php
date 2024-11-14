@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg sm:text-xl font-medium text-gray-900">Delete League</h2>
            </div>

            @if ($errors->has('delete_error'))
                <div class="bg-red-100 text-red-700 p-4 mb-4">
                    <p>{{ $errors->first('delete_error') }}</p>
                </div>
            @endif

            <div class="border-t border-gray-200 p-4 text-lg">
                <form method="POST" action="{{ route('league.destroy', $league->id) }}">
                    @csrf

                    <div>
                        <p>Are you sure you want to delete the league <span class="font-bold">{{ $league->name }}</span>?</p>
                        <p>This action cannot be undone.</p>
                    </div>

                    <div class="mt-4 space-x-4">
                        <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded uppercase text-sm">
                            Confirm Delete
                        </button>
                        <a href="{{ route('league') }}" class="bg-gray-500 text-white py-2 px-4 rounded uppercase text-sm">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
