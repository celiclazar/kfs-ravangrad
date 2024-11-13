<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="bg-white shadow overflow-hidden rounded-lg">
        <div class="flex px-4 py-5 sm:px-6">
            <h2 class="flex-1 text-lg font-medium text-gray-900">{{ strtoupper($title) }}</h2>
            <a href="{{ $addRoute }}" class="flex-2 text-lg text-center">
                <img src="/icons/32/add-button_32.png" alt="Add Icon" class="inline h-6 w-6 mr-1" />
            </a>
        </div>
        <div class="border-t border-gray-200">
            <div class="">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
