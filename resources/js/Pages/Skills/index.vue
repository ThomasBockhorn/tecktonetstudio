<template>
    <Head title="Skills" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Skills
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <BackendSkillsTable :data="skills" />
                        <NavigationLink :href="route('skills.create')"
                            >Create a Skill</NavigationLink
                        >
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import NavigationLink from "@/Components/Backend_ui/NavigationLink.vue";
import BackendSkillsTable from "@/Components/BackendTables/BackendSkillsTable.vue";

export default {
    components: {
        AuthenticatedLayout,
        Head,
        NavigationLink,
        BackendSkillsTable,
    },
    props: {
        skills: Object,
    },
};
</script>

<style></style>
