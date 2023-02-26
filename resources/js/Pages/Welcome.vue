<template>
    <Head title="Welcome" />
    <div class="min-h-full relative">
        <FrontendHeading />
        <div
            class="relative flex bg-gray-100 min-h-screen dark:bg-gray-900 items-top justify-center sm:items-center sm:pt-0 text-white"
        >
            <FrontendGrid />
        </div>
        <FrontendFooter />
    </div>
</template>

<script>
import { Head } from "@inertiajs/vue3";
import FrontendHeading from "@/Components/Frontend_ui/FrontendHeading.vue";
import FrontendFooter from "@/Components/Frontend_ui/FrontendFooter.vue";
import FrontendGrid from "@/Components/FrontendTable/FrontendGrid.vue";

export default {
    components: {
        Head,
        FrontendHeading,
        FrontendFooter,
        FrontendGrid,
    },
};
</script>
