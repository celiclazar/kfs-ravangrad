{{-- resources/views/partials/three-card-section.blade.php --}}
<div class="m-4">
    <div class="max-w-3xl mx-auto py-4 m-4 bg-amber-800 rounded-lg shadow-md">
        <div class="flex flex-row justify-around">
            <a href="{{ url('/week/add') }}" class="text-black hover:text-gray-800 font-medium">
                PERMISIJE
            </a>
            <a href="{{ route('users.roles') }}" class="text-black hover:text-gray-800 font-medium">
                ROLES
            </a>
            <a href="{{ route('users.index') }}" class="text-black hover:text-gray-800 font-medium">
                USERS
            </a>
        </div>
    </div>
</div>

