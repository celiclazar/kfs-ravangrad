@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden rounded-lg">
            <div class="flex px-4 py-5 sm:px-6">
                <h2 class="flex-1 text-lg font-medium text-gray-900">{{ strtoupper('List of Permissions') }}</h2>
                <a href="{{ route('users.permissions.add') }}" class="flex-2 text-lg text-center">
                    <img src="/icons/32/add-button_32.png" alt="Add Icon" class="inline h-6 w-6 mr-1" />
                </a>
            </div>
            <div class="border-t border-gray-200">
                <div class="">
                    @foreach($permissions as $permission)
                        <div class="flex px-4 py-5 sm:px-6">

                            <div class="w-2/3 text-lg mt-2 text-gray-600">
                                <a href="{{route('users.roles.edit', $permission->id )}}">{{ $permission->name }}</a>
                            </div>

                            <div class="w-1/3 flex justify-end space-x-4">
                                <a href="{{ route('users.permission.edit', $permission->id) }}" class="text-center text-sm flex items-center">
                                    <img src="/icons/32/pencil_32.png" alt="Edit Icon" class="inline h-5 w-5 mr-1" />
                                </a>
                                <a href="{{ route('users.permission.delete', $permission->id) }}" class="text-center text-sm flex items-center">
                                    <img src="/icons/32/cancel_32.png" alt="Delete Icon" class="inline h-5 w-5 mr-1" />
                                </a>
                            </div>

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
