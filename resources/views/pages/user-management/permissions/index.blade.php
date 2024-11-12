@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <x-content-section title="List of Permissions" :addRoute="route('users.permissions.add')">
        @foreach($permissions as $permission)
            <div class="flex px-4 py-5 sm:px-6">

                <div class="w-2/3 text-lg mt-2 text-gray-600">
                    <a href="{{route('users.permissions.edit', $permission->id )}}">{{ $permission->name }}</a>
                </div>

                <div class="w-1/3 flex justify-end space-x-4">
                    <a href="{{ route('users.permissions.edit', $permission->id) }}" class="text-center text-sm flex items-center">
                        <img src="/icons/32/pencil_32.png" alt="Edit Icon" class="inline h-5 w-5 mr-1" />
                    </a>
                    <a href="{{ route('users.permissions.delete', $permission->id) }}" class="text-center text-sm flex items-center">
                        <img src="/icons/32/cancel_32.png" alt="Delete Icon" class="inline h-5 w-5 mr-1" />
                    </a>
                </div>

            </div>
        @endforeach
    </x-content-section>
@endsection

@section('content-header')
    @include('pages.user-management.partials.content-header')
@endsection