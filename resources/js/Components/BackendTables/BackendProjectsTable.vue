<template>
    <div class="flex justify-center">
        <table class="mt-5 border-separate border-spacing-6">
            <tbody>
                <template v-for="item in data" :key="item.id">
                    <tr>
                        <td class="pt-2">{{ item.id }}</td>
                        <td class="pt-2">{{ item.project_title }}</td>
                        <td class="pt-2">{{ item.project_category }}</td>
                        <td>
                            <NavigationLink
                                :href="route('projects.edit', item.id)"
                                >Edit</NavigationLink
                            >
                        </td>
                        <td><NavigationLink>Delete</NavigationLink></td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import NavigationLink from "@/Components/Backend_ui/NavigationLink.vue";

export default {
    components: {
        NavigationLink,
    },
    props: {
        data: Object,
    },
};
</script>

<style></style>
