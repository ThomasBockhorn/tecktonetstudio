<template>
    <div class="max-w-7xl mx-auto px-4 lg:px-8 mt-5 z-20 bg-gray-900">
        <div class="flex justify-between h-16">
            <div class="flex z-20"></div>
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

                <FrontendHamburger
                    @clickEvent="clickEvent"
                    :burgerStatus="burgerStatus"
                />
            </div>
        </div>
    </div>
</template>

<script>
import FrontendHamburger from "@/Components/Frontend_ui/FrontendHamburger.vue";

export default {
    components: {
        FrontendHamburger,
    },
    props: {
        burgerStatus: Boolean,
    },
    watch: {
        burgerStatus: function (newVal) {
            this.clicked = newVal;
        },
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
        display: none;
    }
}
</style>
