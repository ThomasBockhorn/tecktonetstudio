<template>
    <div id="neon" class="h-2/3 w-3/4 z-0 absolute"></div>
    <div
        id="blackout"
        class="absolute h-2/3 w-full z-10 bg-gray-100 dark:bg-gray-900 border-grey-900 border-5 -rotate-45"
    ></div>
    <div
        id="grid"
        class="grid grid-cols-4 grid-flow-rows z-20 gap-4 w-3/4 h-3/4"
    >
        <WelcomeFrame v-if="frontFrame === 'welcome'" />
        <ProjectsFrame v-if="frontFrame === 'projects'" :projects="projects" />
        <SkillsFrame v-if="frontFrame === 'skills'" :skills="skills" />
        <ContactFrame v-if="frontFrame === 'contact'" />
        <div class="col-span-1" id="hideMenu">
            <FrontendMenu @changeFrame="changeFrame" />
        </div>
    </div>
</template>

<script>
import WelcomeFrame from "@/Components/FrontEndFrames/WelcomeFrame.vue";
import ProjectsFrame from "@/Components/FrontEndFrames/ProjectsFrame.vue";
import SkillsFrame from "@/Components/FrontEndFrames/SkillsFrame.vue";
import ContactFrame from "@/Components/FrontEndFrames/ContactFrame.vue";
import FrontendMenu from "@/Components/Frontend_ui/FrontendMenu.vue";

export default {
    components: {
        WelcomeFrame,
        ProjectsFrame,
        SkillsFrame,
        ContactFrame,
        FrontendMenu,
    },
    props: {
        projects: Object,
        skills: Object,
        pickedFrame: String,
    },
    data() {
        return {
            frontFrame: "welcome",
        };
    },
    watch: {
        pickedFrame(newFrame) {
            this.frontFrame = newFrame;
        },
    },
    methods: {
        changeFrame(frame) {
            this.frontFrame = frame;
        },
    },
};
</script>

<style scoped>
#neon {
    border: 5px solid hsl(186 100% 69%);
    box-shadow: 0px 0px 0.5em 0px hsl(186 100% 69%),
        0px 0px 0.5em 0px hsl(186 100% 69%);
    animation: glow 3s infinate;
}

#grid {
    grid-auto-rows: 25rem;
}

@keyframes glow {
    0% {
        box-shadow: 2px 2px 0.5em 2px hsl(186 100% 69%),
            4px 4px 0.5em 4px hsl(186 100% 69%);
    }
    25% {
        box-shadow: 6px 6px 0.5em 6px hsl(186 100% 69%),
            8px 8px 0.5em 8px hsl(186 100% 69%);
    }
    50% {
        box-shadow: 10px 10px 0.5em 10px hsl(186 100% 69%),
            12px 12px 0.5em 12px hsl(186 100% 69%);
    }
    75% {
        box-shadow: 14px 14px 0.5em 14px hsl(186 100% 69%),
            16px 16px 0.5em 16px hsl(186 100% 69%);
    }
    100% {
        box-shadow: 18px 18px 0.5em 18px hsl(186 100% 69%),
            20px 20px 0.5em 20px hsl(186 100% 69%);
    }
}

@media screen and (max-width: 820px) {
    #grid {
        grid-template-columns: 1fr;
        gap: 0;
    }
    #hideMenu {
        display: none;
    }
}
</style>
