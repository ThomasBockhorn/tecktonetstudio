<template>
    <div class="flex justify-center container">
        <form
            @submit.prevent="submit"
            class="grid grid-rows-3 grid-cols-1 gap-6"
        >
            <div class="grid grid-cols-1">
                <label for="project_title" class=""
                    >Enter a Project Title:</label
                >
                <input
                    class="border border-white rounded-md text-black"
                    type="text"
                    name="project_title"
                    id="project_title"
                    v-model="form.project_title"
                    required
                />
            </div>
            <div class="grid grid-cols-1">
                <label class="" for="project_url">Enter a Project URL: </label>
                <input
                    class="border border-white rounded-md text-black"
                    type="text"
                    name="project_url"
                    id="project_url"
                    v-model="form.project_url"
                    required
                />
            </div>
            <div class="grid grid-cols-1">
                <label class="mb-5" for="project_description"
                    >Enter a Project Description:
                </label>
                <textarea
                    class="border border-white rounded-md text-black"
                    type="text"
                    name="project_description"
                    id="project_description"
                    v-model="form.project_description"
                    required
                    cols="50"
                ></textarea>
            </div>

            <div class="flex justify-center">
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
    setup() {
        const form = useForm({
            project_title: "",
            project_description: "",
            project_url: "",
        });

        function submit() {
            form.post(route("projects.store"));
            form.project_title = "";
            form.project_description = "";
            form.project_url = "";
        }

        return { form, submit };
    },
};
</script>

<style></style>
