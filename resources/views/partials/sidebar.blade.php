<aside class=" lg:block md:w-full ">
    <div class="bg-neutral-dark text-secondary p-4">
        <h2 class="text-xl font-semibold">KFS Ravangrad</h2>
        <ul class="mt-4">
            <li class="py-2">
                <a href="/home" class="hover:bg-gray-700 p-2 block rounded">Dashboard</a>
            </li>
            @if(auth()->user()->hasRole('super-admin'))
                <li class="py-2">
                    <a href="{{route('users.index')}}" class="hover:bg-gray-700 p-2 block rounded">Users</a>
                </li>
            @endif
            <li class="py-2">
                <a href="/admin/league" class="hover:bg-gray-700 p-2 block rounded">Liga</a>
            </li>
            <li class="py-2">
                <a href="#" class="hover:bg-gray-700 p-2 block rounded">Statistika</a>
            </li>
            <li class="py-2">
                <a href="#" class="hover:bg-gray-700 p-2 block rounded">Članovi</a>
            </li>
            <li class="py-2">
                <a href="#" class="hover:bg-gray-700 p-2 block rounded">Blog</a>
            </li>
            <li class="py-2">
                <a href="#" class="hover:bg-gray-700 p-2 block rounded">Članarine</a>
            </li>
            <li class="py-2">
                <a href="#" class="hover:bg-gray-700 p-2 block rounded">Vesti</a>
            </li>
            <li class="py-2">
                <a href="#" class="hover:bg-gray-700 p-2 block rounded">Obaveštenja</a>
            </li>
            <li class="py-2">
                <a href="#"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="hover:bg-gray-700 p-2 block rounded">Logout</a>
            </li>
        </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>
</aside>
