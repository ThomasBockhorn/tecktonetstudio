<template>
    <div id="projectFrame" class="col-span-3 p-7 overflow-scroll">
        <h1 class="text-2xl mb-5 text-center uppercase">Projects</h1>

        <div class="flex flex-col">
            <div v-for="project in projects" :key="project.id">
                <h3 class="text-center uppercase mt-5">
                    {{ project.project_title }}
                </h3>
                <div id="neon" class="w-1/4 mx-auto"></div>
                <p class="mt-5">{{ project.project_description }}</p>
                <a :href="project.project_url" target="_blank">
                    <span class="hover:underline hover:decoration-2">
                        Visit Website
                    </span>
                </a>
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
#projectFrame::-webkit-scrollbar {
    display: none;
}

#neon {
    border: 1px solid hsl(186 100% 69%);
    box-shadow: 0px 0px 0.5em 0px hsl(186 100% 69%),
        0px 0px 0.5em 0px hsl(186 100% 69%);
    animation: glow 3s infinate;
}

span {
    text-decoration-color: hsl(186 100% 69%);
}
</style>
