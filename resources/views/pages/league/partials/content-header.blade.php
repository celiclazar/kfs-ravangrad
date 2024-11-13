<div class="mx-auto px-4 sm:px-2 lg:px-6 py-6 bg-white rounded-lg shadow-lg">
    <div class="flex flex-row justify-around">
        @if(auth()->user()->can('create-league'))
            <a href="{{ route('league.create') }}" class="flex-2 text-lg text-center">
                <img src="/icons/32/league_32.png" alt="Add Icon" class="inline h-6 w-6 mr-1" />
            </a>
        @endif
        @if($user->can('create-round'))
            <a href="{{ url('#') }}" class="flex-2 text-lg text-center">
                <img src="/icons/32/football-field_32.png" alt="Add Icon" class="inline h-6 w-6 mr-1" />
            </a>
        @endif
    </div>

</div>
