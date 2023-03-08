<template>
    <div class="col-span-3 p-7">
        <h1 class="text-2xl mb-5 text-center uppercase">Projects</h1>

        <ul class="flex flex-col">
            <li
                v-for="project in projects"
                :key="project.id"
                class="text-center"
            >
                <a :href="project.project_url" target="_blank">
                    <span class="hover:underline hover:decoration-2">
                        {{ project.project_title }}
                    </span>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        projects: Object,
    },
};
</script>

<style scoped>
span {
    text-decoration-color: hsl(186 100% 69%);
}
</style>
