<template>
    <div class="flex flex-row h-16 justify-end font-heading text-2xl text-silver bg-darkGreen">
        <ul class="h-full bg-darkGreen md:flex-row md:space-x-4">
            <guest-links v-if="!isAuthenticated" />
            <auth-links v-else :user="user" />
        </ul>
    </div>

</template>

<script>

import GuestLinks from './GuestLinks.vue';
import AuthLinks from './AuthLinks.vue';

export default {
    components: {AuthLinks, GuestLinks},
    props: {
        user: Object,
    },
    data() {
        return {
            dropdownOpen: false,
            isAuthenticated: !!this.user,
        };
    },
    methods: {
        logout() {
            document.getElementById('logout-form').submit();
        }
    },
}

</script>

<style scoped>

</style>
