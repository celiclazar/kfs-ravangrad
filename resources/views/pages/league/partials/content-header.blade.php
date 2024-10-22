<div>
    @if(auth()->user()->can('super-admin') || auth()->user()->can('admin'))
        <div class="text-black">
            <a href="{{ route('league.create') }}">Dodaj novu ligu</a>
        </div>
    @endif
    <a href={{route('league.add-round')}} class="text-black">
        Kreiraj novu ligu
    </a>
</div>
