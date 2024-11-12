@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-lg sm:text-xl font-medium text-gray-900">{{ strtoupper($role->name) }}</h2>
            </div>
            <div class="border-t border-gray-200 p-4">
                <form method="POST" action="{{ route('users.roles.update', $role->id) }}">
                    @csrf

                    <!-- Role Name Field -->
                    <div class="space-y-4 font-body">
                        <div class="flex flex-col">
                            <label class="text-sm sm:text-base" for="name">Role Name</label>
                            <input type="text" name="name" id="name"
                                   value="{{ old('name', $role->name) }}"
                                   class="border rounded p-2 text-base sm:text-lg">
                        </div>

                        <!-- Permissions Checkboxes -->
                        <div class="flex flex-col mt-4">
                            <label class="text-sm sm:text-base">Permissions</label>
                            <div class="grid grid-cols-2 gap-4 mt-2">
                                @foreach($permissions as $permission)
                                    <div class="flex items-center">
                                        <input type="checkbox" name="permissions[]" id="permission_{{ $permission->id }}"
                                               value="{{ $permission->id }}"
                                               {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}
                                               class="mr-2">
                                        <label for="permission_{{ $permission->id }}" class="text-sm sm:text-base">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="mt-4 w-full sm:w-auto bg-primary text-white py-2 px-4 rounded uppercase text-sm sm:text-base">
                        Update Role
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content-header')
    @include('pages.user-management.partials.content-header')
@endsection
