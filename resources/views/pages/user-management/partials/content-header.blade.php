{{-- resources/views/partials/three-card-section.blade.php --}}
<div class="m-4">
    <div class="max-w-3xl mx-auto py-4 m-4 bg-white rounded-lg shadow-md">
        <div class="flex flex-row justify-around">
            <a href="{{ route('users.permissions') }}" class="flex-2 text-lg text-center">
                <img src="/icons/32/permission_32.png" alt="Add Icon" class="inline h-6 w-6 mr-1" />
            </a>
            <a href="{{ route('users.roles') }}" class="flex-2 text-lg text-center">
                <img src="/icons/32/roles_32.png" alt="Add Icon" class="inline h-6 w-6 mr-1" />
            </a>
            <a href="{{ route('users.index') }}" class="flex-2 text-lg text-center">
                <img src="/icons/32/users_32.png" alt="Add Icon" class="inline h-6 w-6 mr-1" />
            </a>
        </div>
    </div>
</div>

