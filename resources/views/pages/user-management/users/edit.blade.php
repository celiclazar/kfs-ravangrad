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
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="space-y-4 font-body">
                        <div class="flex flex-col">
                            <label class="text-sm sm:text-base" for="name">Name</label>
                            <input type="text" name="name" id="name"
                                   value="{{ old('name', $user->name) }}"
                                   class="border rounded p-2 text-base sm:text-lg">
                        </div>

                        <div class="flex flex-col">
                            <label class="text-sm sm:text-base" for="email">Email</label>
                            <input type="email" name="email" id="email"
                                   value="{{ old('email', $user->email) }}"
                                   class="border rounded p-2 text-base sm:text-lg">
                        </div>

                        <div class="flex flex-col">
                            <label class="text-sm sm:text-base" for="role">Role</label>
                            <select name="role" id="role"
                                    class="border rounded p-2 text-base sm:text-lg">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="mt-4 w-full sm:w-auto bg-darkGreen text-white py-2 px-4 rounded uppercase text-sm sm:text-base">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content-header')
    @include('pages.user-management.users.partials.content-header')
@endsection