<template>
    <div class="pt-4 pb-1 border-t border-gray-600">
        <div class="px-4">
            <div class="font-medium text-base text-gray-200">
                {{ $page.props.auth.user.name }}
            </div>
            <div class="font-medium text-sm text-gray-500">
                {{ $page.props.auth.user.email }}
            </div>
        </div>

        <div class="mt-3 space-y-1">
            <ResponsiveNavLink :href="route('profile.edit')">
                Profile
            </ResponsiveNavLink>
            <ResponsiveNavLink
                :href="route('logout')"
                method="post"
                as="button"
            >
                Log Out
            </ResponsiveNavLink>
        </div>
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
