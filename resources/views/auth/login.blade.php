@extends('layouts.guest')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-100 px-6 py-4 rounded-t-lg">
                        <h2 class="text-lg font-semibold text-gray-800">{{ __('Login') }}</h2>
                    </div>

                    <div class="px-6 py-6">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('email') border-red-500 @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('password') border-red-500 @enderror"
                                       name="password" required autocomplete="current-password">
                                @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4 flex items-center">
                                <input id="remember" type="checkbox" name="remember"
                                       class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" class="ml-2 block text-sm text-gray-900">{{ __('Remember Me') }}</label>
                            </div>

                            <div class="flex items-center justify-between">
                                <button type="submit" class="w-full bg-darkGreen text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="mt-3 block text-center text-sm text-darkGreen hover:text-indigo-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
