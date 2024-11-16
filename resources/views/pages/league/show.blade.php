@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <x-league-content-section title="{{ $league->name }}" :addRoute="route('league.create')" :user="$user">
        <div class="w-full h-8 flex bg-primary-light">
            <div class="flex-1 flex justify-center items-center">
                <a href="{{ route('league.edit', ['id' => $league->id]) }}" class="text-white">
                    <img src="/icons/32/add-button_32.png" alt="Add Icon" class="inline h-5 w-5 mr-1" />
                </a>
            </div>
            <div class="flex-1 flex justify-center items-center">
                <a href="{{ route('league.delete', ['id' => $league->id]) }}" class="text-white">
                    <img src="/icons/32/add-button_32.png" alt="Add Icon" class="inline h-5 w-5 mr-1" />
                </a>
            </div>
            <div class="flex-1 flex justify-center items-center">
                <a href="{{ route('league.show', ['id' => $league->id]) }}" class="text-white">
                    <img src="/icons/32/add-button_32.png" alt="Add Icon" class="inline h-5 w-5 mr-1" />
                </a>
            </div>
        </div>
        <div class="border-t border-gray-200 p-4">
            @foreach($weeks as $week)
                <div class="flex px-4 py-5 sm:px-6">

                    <div class="w-2/3 text-lg mt-2 text-gray-600">
                        <a href="{{route('league.show', $week->id )}}">{{ $week->name }}</a>
                    </div>

                    <div class="w-1/3 flex justify-end space-x-4">
                        <a href="{{ route('league.edit', $week->id) }}" class="text-center text-sm flex items-center">
                            <img src="/icons/32/pencil_32.png" alt="Edit Icon" class="inline h-5 w-5 mr-1" />
                        </a>
                        <a href="{{ route('league.delete', $week->id) }}" class="text-center text-sm flex items-center">
                            <img src="/icons/32/cancel_32.png" alt="Delete Icon" class="inline h-5 w-5 mr-1" />
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    </x-league-content-section>
@endsection

@section('content-header')
    @include('pages.league.partials.content-header')
@endsection
