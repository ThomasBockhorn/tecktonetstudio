<template>
    <div class="flex justify-center overflow-auto">
        <table class="mt-5 border-separate border-spacing-6">
            <tbody>
                <template v-for="item in data" :key="item.id">
                    <tr>
                        <td class="pt-2">{{ item.skill }}</td>
                        <td>
                            <NavigationLink
                                :href="route('skills.edit', item.id)"
                                >Edit</NavigationLink
                            >
                        </td>
                        <td>
                            <Link
                                method="delete"
                                class="inline-flex items-center px-4 py-2 m-2 bg-gray-800 border border-white rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 mt-6"
                                :href="route('skills.destroy', item.id)"
                                as="button"
                                >Delete</Link
                            >
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import NavigationLink from "@/Components/Backend_ui/NavigationLink.vue";
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        NavigationLink,
        Link,
    },
    props: {
        data: Object,
    },
};
</script>
