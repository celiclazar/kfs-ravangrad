@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <x-league-content-section title="Edit league">
        <div class="border-t border-gray-200 p-4">
            <form action="{{ route('league.update', $league->id) }}" method="POST">
                @csrf

                <div class="space-y-4 font-body">
                    <div class="flex flex-col">
                        <label class="text-sm sm:text-base" for="name">Name</label>
                        <input type="text" name="name" id="name"
                               value="{{ old('name', $league->name) }}"
                               class="border rounded p-2 text-base sm:text-lg" required>
                    </div>

                    <input type="hidden" name="is_locked" value="0">

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="is_locked" id="is_locked" value="1"
                               {{ old('is_locked', $league->is_locked) ? 'checked' : '' }}
                               class="h-4 w-4 border-gray-300 rounded">
                        <label class="text-sm sm:text-base" for="is_locked">Lock League</label>
                    </div>
                </div>

                <button type="submit"
                        class="mt-4 w-full sm:w-auto bg-primary text-white py-2 px-4 rounded uppercase text-sm sm:text-base">
                    Edit
                </button>
            </form>
        </div>
    </x-league-content-section>
@endsection

{{--@section('content-header')--}}
{{--    @include('pages.league.partials.content-header')--}}
{{--@endsection--}}
