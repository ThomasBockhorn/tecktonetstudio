<template>
    <div class="col-span-3 p-7">
        <h1 class="text-2xl mb-5 text-center uppercase">Skills</h1>
        <div class="flex justify-center">
            <div class="grid grid-cols-2 gap-5">
                <div v-for="skill in skills" :key="skill.id">
                    {{ skill.skill }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        skills: Object,
    },
};
</script>

<style scoped>
#neon {
    border: 1px solid hsl(186 100% 69%);
    box-shadow: 0px 0px 0.5em 0px hsl(186 100% 69%),
        0px 0px 0.5em 0px hsl(186 100% 69%);
    animation: glow 3s infinate;
}
</style>
