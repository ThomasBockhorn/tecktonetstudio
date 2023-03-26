<template>
    <div class="shrink-0 flex items-center">
        <Link :href="route('dashboard')">
            <ApplicationLogo
                class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"
            />
        </Link>
    </div>
</template>

<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        ApplicationLogo,
        Link,
    },
};
</script>
