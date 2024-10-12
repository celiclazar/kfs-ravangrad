<div>
    @can('')
    @endcan
    @if(auth()->user()->can('super-admin') || auth()->user()->can('admin'))
        <div class="text-black">
            <a href="{{ route('league.create') }}">Dodaj novu ligu</a>
        </div>
    @endif
    <a href={{url('/week/add')}} class="text-black">
        Dodaj kolo
    </a>
</div>
