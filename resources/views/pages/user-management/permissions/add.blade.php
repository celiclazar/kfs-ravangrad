@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg sm:text-xl font-medium text-gray-900">{{ __('Add New Permission') }}</h2>
            </div>
            <div class="border-t border-gray-200 p-4">
                <form method="POST" action="{{ route('users.permissions.store') }}">
                    @csrf

                    <div class="space-y-4 font-body">
                        <div class="flex flex-col">
                            <label class="text-sm sm:text-base" for="name">Name</label>
                            <input type="text" name="name" id="name"
                                   value="{{ old('name') }}"
                                   class="border rounded p-2 text-base sm:text-lg" required>
                        </div>

                        <div class="flex flex-col">
                            <label class="text-sm sm:text-base" for="role">Belongs To Role</label>
                            <select name="role" id="role"
                                    class="border rounded p-2 text-base sm:text-lg" required>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit"
                            class="mt-4 w-full sm:w-auto bg-primary text-white py-2 px-4 rounded uppercase text-sm sm:text-base">
                        Add Permission
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content-header')
    @include('pages.user-management.partials.content-header')
@endsection
