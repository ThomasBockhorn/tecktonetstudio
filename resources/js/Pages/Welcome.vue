<template>
    <Head title="Welcome" />

    <FrontendHeading @clickEvent="showMenu" :burgerStatus="burgerStatus" />
    <FrontendSmallMenu
        :menu="menu"
        @changeFrame="changeFrame"
        @showMenu="showMenu"
    />
    <div
        class="relative flex bg-gray-900 items-center justify-center text-white"
    >
        <FrontendGrid
            :projects="projects"
            :skills="skills"
            :pickedFrame="pickedFrame"
        />
    </div>
    <FrontendFooter />
</template>

<script>
import { Head } from "@inertiajs/vue3";
import FrontendHeading from "@/Components/Frontend_ui/FrontendHeading.vue";
import FrontendFooter from "@/Components/Frontend_ui/FrontendFooter.vue";
import FrontendGrid from "@/Components/FrontendTable/FrontendGrid.vue";
import FrontendSmallMenu from "@/Components/Frontend_ui/FrontendSmallMenu.vue";

export default {
    components: {
        Head,
        FrontendHeading,
        FrontendFooter,
        FrontendGrid,
        FrontendSmallMenu,
    },
    props: {
        projects: Object,
        skills: Object,
    },
    data() {
        return {
            menu: false,
            pickedFrame: "welcome",
            burgerStatus: false,
        };
    },
    methods: {
        showMenu(event) {
            this.menu = event;
            this.burgerStatus = event;
        },
        changeFrame(frame) {
            this.pickedFrame = frame;
            this.menu = false;
            this.burgerStatus = false;
        },
    },
};
</script>
