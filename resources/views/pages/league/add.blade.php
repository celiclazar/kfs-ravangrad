@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <x-league-content-section title="Add league">
        <div class="border-t border-gray-200 p-4">
            <form action="{{ route('league.store') }}" method="POST">
                @csrf

                <div class="space-y-4 font-body">
                    <div class="flex flex-col">
                        <label class="text-sm sm:text-base" for="name">Name</label>
                        <input type="text" name="name" id="name"
                               value="{{ old('name') }}"
                               class="border rounded p-2 text-base sm:text-lg" required>
                    </div>
                </div>

                <button type="submit"
                        class="mt-4 w-full sm:w-auto bg-primary text-white py-2 px-4 rounded uppercase text-sm sm:text-base">
                    Create League
                </button>
            </form>
        </div>
    </x-league-content-section>
@endsection

@section('content-header')
    @include('pages.league.partials.content-header')
@endsection
