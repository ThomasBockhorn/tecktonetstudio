<template>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5 z-20">
        <div class="flex justify-between h-16">
            <div class="flex z-20">
                <ApplicationLogo />
            </div>
            <div class="flex z-20">
                <a href="https://github.com/ThomasBockhorn" class="m-5"
                    ><font-awesome-icon
                        icon="fa-brands fa-github"
                        class="text-white fa-2x"
                /></a>
                <a
                    href="https://www.linkedin.com/in/thomasbockhorn/"
                    class="m-5"
                    ><font-awesome-icon
                        icon="fa-brands fa-linkedin"
                        class="text-white fa-2x"
                /></a>
            </div>
        </div>
    </div>
</template>

<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

export default {
    components: {
        ApplicationLogo,
    },
};
</script>
