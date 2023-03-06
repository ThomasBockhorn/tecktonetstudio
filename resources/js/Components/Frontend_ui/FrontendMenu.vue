<template>
    <div class="flex flex-col">
        <h1 class="text-2xl ml-5 mr-5 text-center mb-5">Menu</h1>

        <button class="text-lg text-center" @click="changeFrame('welcome')">
            <span class="hover:underline hover:decoration-2">Welcome</span>
        </button>
        <button class="text-lg text-center" @click="changeFrame('projects')">
            <span class="hover:underline hover:decoration-2">Projects</span>
        </button>
        <button class="text-lg text-center" @click="changeFrame('skills')">
            <span class="hover:underline hover:decoration-2">Skills</span>
        </button>
        <button class="text-lg text-center" @click="changeFrame('contact')">
            <span class="hover:underline hover:decoration-2">Contact</span>
        </button>
    </div>
</template>

<script>
export default {
    methods: {
        changeFrame(frame) {
            this.$emit("changeFrame", frame);
        },
    },
};
</script>

<style scoped>
span {
    text-decoration-color: hsl(186 100% 69%);
}
</style>
