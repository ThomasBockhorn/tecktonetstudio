<template>
    <div>
        <div class="min-h-screen bg-gray-900">
            <BackendNavigation />
            <!-- Page Heading -->
            <header class="bg-gray-800 shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
<script>
import BackendNavigation from "@/Components/Backend_ui/BackendNavigation.vue";

export default {
    components: {
        BackendNavigation,
    },
};
</script>
