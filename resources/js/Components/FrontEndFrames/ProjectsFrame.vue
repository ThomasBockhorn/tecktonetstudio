<template>
    <div class="col-span-3 p-7">
        <h1 class="text-2xl mb-5 text-center uppercase mb-5">Projects</h1>
        <div class="flex flex-col">
            <div>
                <ul>
                    <li v-for="project in projects" :key="project.id">
                        <a :href="project.project_url" target="_blank">
                            <span class="hover:underline hover:decoration-2">
                                {{ project.project_title }}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
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
