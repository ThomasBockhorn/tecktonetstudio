<template>
    <div class="flex flex-col">
        <h1 class="text-2xl text-center mb-5 view-size-title">
            <span class="uppercase">Menu</span>
        </h1>

        <button
            class="text-lg text-center view-sizes"
            @click="changeFrame('welcome')"
        >
            <span class="hover:underline hover:decoration-2">Welcome</span>
        </button>
        <button
            class="text-lg text-center view-sizes"
            @click="changeFrame('projects')"
        >
            <span class="hover:underline hover:decoration-2">Projects</span>
        </button>
        <button
            class="text-lg text-center view-sizes"
            @click="changeFrame('skills')"
        >
            <span class="hover:underline hover:decoration-2">Skills</span>
        </button>
        <button
            class="text-lg text-center view-sizes"
            @click="changeFrame('contact')"
        >
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

@media screen and (max-width: 412px) {
    .view-sizes {
        font-size: 16px;
    }

    .view-size-title {
        font-size: 16px;
    }
}
</style>
