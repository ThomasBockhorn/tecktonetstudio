<template>
    <div class="max-w-7xl mx-auto px-4 lg:px-8 mt-5 z-20">
        <div class="flex justify-between h-16">
            <div class="flex z-20">
                <ApplicationLogo />
            </div>
            <div class="flex z-20">
                <a href="https://github.com/ThomasBockhorn" class="m-5"
                    ><font-awesome-icon
                        icon="fa-brands fa-github"
                        class="text-white fa-2x small-sizes"
                /></a>
                <a
                    href="https://www.linkedin.com/in/thomasbockhorn/"
                    class="m-5"
                    ><font-awesome-icon
                        icon="fa-brands fa-linkedin"
                        class="text-white fa-2x small-sizes"
                /></a>

                <FrontendHamburger @clickEvent="clickEvent" />
            </div>
        </div>
    </div>
</template>

<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import FrontendHamburger from "@/Components/Frontend_ui/FrontendHamburger.vue";

export default {
    components: {
        ApplicationLogo,
        FrontendHamburger,
    },
    methods: {
        clickEvent(clicked) {
            this.$emit("clickEvent", clicked);
        },
    },
};
</script>

<style scoped>
@media screen and (max-width: 820px) {
    .small-sizes {
        width: 100%;
        height: 75%;
        margin: 0;
    }
}
</style>
