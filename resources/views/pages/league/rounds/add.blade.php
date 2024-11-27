@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <x-league-content-section title="Add round">
        <div class="w-full h-8 flex">
            <div class="flex-1 flex px-2 ml-2 items-left">

            </div>

        </div>

        <div class="border-t border-gray-200 p-4">
            <form action="{{ route('round.create.preview') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="space-y-4 font-body">
                    <div class="flex flex-col">
                        <label class="text-gray-500 italic text-sm sm:text-base" for="file"> .json extension file</label>
                        <input type="file" name="file" id="file"
                               class="border rounded p-2 text-base sm:text-sm" required>
                    </div>
                </div>

                <button type="submit"
                        class="mt-4 w-full sm:w-auto bg-primary text-white py-2 px-4 rounded uppercase text-sm sm:text-base">
                    Upload File
                </button>
            </form>
        </div>

    </x-league-content-section>
@endsection

@section('content-header')
    @include('pages.league.partials.content-header')
@endsection
