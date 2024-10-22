<template>
    <div class="relative">
        <!-- Hamburger Icon -->
        <button
            @click="isOpen = !isOpen"
            class="block md:hidden p-2 focus:outline-none"
        >
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
        </button>

        <!-- Menu items -->
        <div
            :class="isOpen ? 'block' : 'hidden'"
            class="flex flex-col h-screen w-48 space-y-4 md:flex-row md:space-x-4 md:space-y-0 p-2 mt-2 bg-darkGreen"
        >
            <a href="/login" class="text-silver hover:text-gray-400">Login</a>
            <a href="/register" class="text-silver hover:text-gray-400">Register</a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false,
        };
    },
};
</script>

<style scoped>
/* Optionally, you can add additional styles here */
</style>
