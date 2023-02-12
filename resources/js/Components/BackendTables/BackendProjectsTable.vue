<template>
    <div class="flex justify-center">
        <table class="mt-5 border-separate border-spacing-6">
            <tbody>
                <template v-for="item in data" :key="item.id">
                    <tr>
                        <td class="pt-2">{{ item.id }}</td>
                        <td class="pt-2">{{ item.project_title }}</td>
                        <td>
                            <NavigationLink
                                :href="route('projects.edit', item.id)"
                                >Edit</NavigationLink
                            >
                        </td>
                        <td>
                            <NavigationLink
                                :href="route('projects.show', item.id)"
                                >Show</NavigationLink
                            >
                        </td>
                        <td>
                            <Link
                                method="delete"
                                class="inline-flex items-center px-4 py-2 m-2 bg-gray-800 border border-white rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 mt-6"
                                :href="route('projects.destroy', item.id)"
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

<style></style>
