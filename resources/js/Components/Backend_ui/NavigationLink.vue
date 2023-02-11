<template>
    <div class="mt-4">
        <Link
            :href="href"
            class="inline-flex items-center px-4 py-2 m-2 bg-gray-800 border border-white rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
        >
            <slot />
        </Link>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
    props: ["href"],
};
</script>

<style></style>
