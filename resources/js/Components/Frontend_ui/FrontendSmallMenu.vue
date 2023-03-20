<template>
    <div class="flex flex-col bg-white" v-if="menu">
        <button
            class="text-lg text-center view-sizes m-5"
            @click="
                changeFrame('welcome');
                showMenu(false);
            "
        >
            <span class="hover:underline hover:decoration-2">Welcome</span>
        </button>
        <button
            class="text-lg text-center view-sizes m-5"
            @click="
                changeFrame('projects');
                showMenu(false);
            "
        >
            <span class="hover:underline hover:decoration-2">Projects</span>
        </button>
        <button
            class="text-lg text-center view-sizes m-5"
            @click="
                changeFrame('skills');
                showMenu(false);
            "
        >
            <span class="hover:underline hover:decoration-2">Skills</span>
        </button>
        <button
            class="text-lg text-center view-sizes m-5"
            @click="
                changeFrame('contact');
                showMenu(false);
            "
        >
            <span class="hover:underline hover:decoration-2">Contact</span>
        </button>
        <a href="https://github.com/ThomasBockhorn" class="m-5 text-center"
            ><font-awesome-icon
                icon="fa-brands fa-github"
                class="fa-2x small-sizes"
        /></a>
        <a
            href="https://www.linkedin.com/in/thomasbockhorn/"
            class="m-5 text-center"
            ><font-awesome-icon
                icon="fa-brands fa-linkedin"
                class="fa-2x small-sizes"
        /></a>
    </div>
</template>

<script>
export default {
    props: {
        menu: Boolean,
    },
    methods: {
        changeFrame(frame) {
            this.$emit("changeFrame", frame);
        },
        showMenu(clicked) {
            this.$emit("showMenu", clicked);
        },
    },
};
</script>

<style></style>
