<template>
    <div class="pt-2 pb-3 space-y-1">
        <ResponsiveNavLink
            :href="route('dashboard')"
            :active="route().current('dashboard')"
        >
            Dashboard
        </ResponsiveNavLink>
        <ResponsiveNavLink
            :href="route('skills.index')"
            :active="route().current('skills.index')"
        >
            Skills
        </ResponsiveNavLink>
        <ResponsiveNavLink
            :href="route('projects.index')"
            :active="route().current('projects.index')"
        >
            Projects
        </ResponsiveNavLink>
    </div>
</template>

<script>
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";

export default {
    components: {
        ResponsiveNavLink,
    },
};
</script>

<style></style>
