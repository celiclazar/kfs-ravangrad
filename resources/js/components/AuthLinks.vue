<template>
    <li class="flex flex-col items-center h-full md:hidden">
        <a @click="toggleDropdown" class="p-4 text-silver hover:text-slate-400 uppercase " role="button">
            <svg
                class="w-6 h-6 text-silver hover:text-gray-400"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"
                />
            </svg>
        </a>
        <div v-if="dropdownOpen" class="absolute right-4 top-10 w-56 bg-night text-silver rounded-md shadow-lg border border-darkGreen z-20">
            <div class="px-4 py-2 rounded-t-lg">
                <h2 class="text-center font-heading font-bold">KFS Ravangrad</h2>
            </div>
            <div class="px-4 py-2">
                <a href="/admin/league" class="block px-4 py-2 hover:bg-gray-100 hover:text-night cursor-pointer">Liga</a>
                <a href="/admin/stats" class="block px-4 py-2 hover:bg-gray-100 hover:text-night cursor-pointer">Statistika</a>
                <a href="/admin/members" class="block px-4 py-2 hover:bg-gray-100 hover:text-night cursor-pointer">Članovi</a>
                <a href="/blog" class="block px-4 py-2 hover:bg-gray-100 hover:text-night cursor-pointer">Blog</a>
                <a href="/admin/dues" class="block px-4 py-2 hover:bg-gray-100 hover:text-night cursor-pointer">Članarine</a>
                <a href="/admin/news" class="block px-4 py-2 hover:bg-gray-100 hover:text-night cursor-pointer">Vesti</a>
                <a @click="logout" class="block px-4 py-2 hover:bg-gray-100 hover:text-night cursor-pointer">Logout</a>
            </div>
            <form id="logout-form" action="/logout" method="POST" class="hidden">
                <input type="hidden" name="_token" :value="csrfToken">
            </form>
        </div>
    </li>
</template>

<script>
export default {
    props: ['user', 'logoutUrl'],
    data() {
        return {
            dropdownOpen: false,
            csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    },
    methods: {
        toggleDropdown() {
            this.dropdownOpen = !this.dropdownOpen;
        },
        logout() {
            document.getElementById('logout-form').submit();
        }
    }
}
</script>
