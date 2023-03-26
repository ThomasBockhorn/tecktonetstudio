<template>
    <Head title="Edit the Skill" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
            >
                Edit the Skill
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <BackendSkillsEditForm :skill="skill" />
                        <NavigationLink :href="route('skills.index')"
                            >Back to Skill List</NavigationLink
                        >
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import NavigationLink from "@/Components/Backend_ui/NavigationLink.vue";
import BackendSkillsEditForm from "@/Components/Backend_Forms/BackendSkillsEditForm.vue";

export default {
    components: {
        AuthenticatedLayout,
        Head,
        NavigationLink,
        BackendSkillsEditForm,
    },
    props: {
        skill: Object,
    },
};
</script>
