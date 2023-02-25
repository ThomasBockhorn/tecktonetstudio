<template>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <NavLink
            :href="route('dashboard')"
            :active="route().current('dashboard')"
        >
            Dashboard
        </NavLink>
        <NavLink
            :href="route('skills.index')"
            :active="route().current('skills.index')"
        >
            Skills
        </NavLink>
        <NavLink
            :href="route('projects.index')"
            :active="route().current('projects.index')"
        >
            Projects
        </NavLink>
    </div>
</template>

<script>
import NavLink from "@/Components/NavLink.vue";

export default {
    components: {
        NavLink,
    },
};
</script>

<style></style>
