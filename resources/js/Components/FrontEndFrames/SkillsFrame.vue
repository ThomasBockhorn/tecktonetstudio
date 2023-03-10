<template>
    <div class="col-span-3 p-7">
        <h1 class="text-2xl mb-5 text-center uppercase">Skills</h1>
        <div class="flex justify-center">
            <div class="grid grid-cols-2 gap-10">
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
