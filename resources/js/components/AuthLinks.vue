<template>
    <li class="relative flex justify-end items-center h-2/3 mt-2 md:hidden">
        <a @click="toggleDropdown" class="p-2 text-silver hover:text-gray-700 cursor-pointer" role="button">
            Menu
        </a>
        <div v-if="dropdownOpen" class="absolute right-6 mt-44 w-48 bg-white rounded-md shadow-lg border border-darkGreen z-20">
            <div class="bg-gray-100 px-6 py-4 rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800">User Options</h2>
            </div>
            <div class="px-6 py-4">
                <div class="mb-4">
                    <label for="user-name" class="block text-sm font-medium text-gray-700">Logged in as:</label>
                    <div id="user-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        {{ user.name }}
                    </div>
                </div>
                <div>
                    <!-- Logout link -->
                    <a @click="logout" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100 cursor-pointer">
                        {{ 'Logout' }}
                    </a>
                    <!-- Logout form -->
                    <form id="logout-form" action="/logout" method="POST" class="hidden">
                        <input type="hidden" name="_token" :value="csrfToken">
                    </form>
                </div>
            </div>
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
