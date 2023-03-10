<template>
    <div class="flex justify-center">
        <form @submit.prevent="submit">
            <div class="grid grid-rows-2 mt-5">
                <label for="skill">Enter a skill:</label>
                <input
                    class="border border-white rounded-md text-black"
                    type="text"
                    name="skill"
                    id="skill"
                    v-model="form.skill"
                    required
                />
            </div>
            <div class="grid grid-rows-2 mt-5">
                <label class="mt-2" for="level">Enter the level: </label>
                <input
                    class="border border-white rounded-md text-black"
                    type="text"
                    name="level"
                    id="level"
                    v-model="form.level"
                    required
                />
            </div>
            <div class="flex justify-center mt-5">
                <button
                    class="text-white border px-4 py-2 m-2 bg-gray-800 border border-white rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
                    type="submit"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import { useForm } from "@inertiajs/vue3";

export default {
    setup(props) {
        const form = useForm({
            skill: props.skill.skill,
        });

        function submit() {
            form.patch(route("skills.update", props.skill.id));
            form.skill = "";
        }

        return { form, submit };
    },
    props: {
        skill: Object,
    },
};
</script>

<style></style>
