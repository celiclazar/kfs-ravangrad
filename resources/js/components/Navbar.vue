<template>
    <ul class="flex flex-col h-14 bg-darkGreen md:flex-row md:space-x-4">
        <guest-links v-if="!isAuthenticated" />
        <auth-links v-else :user="user" />
    </ul>
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
/* Add any necessary component-specific styles */
</style>
