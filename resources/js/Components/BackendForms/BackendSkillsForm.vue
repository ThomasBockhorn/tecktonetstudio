<template>
    <div class="flex justify-center">
        <form action="" method="get">
            <div class="grid grid-rows-2 mt-5">
                <label for="skill">Enter a skill:</label>
                <input
                    class="border border-white rounded-md"
                    type="text"
                    name="skill"
                    id="skill"
                    required
                />
            </div>
            <div class="grid grid-rows-2 mt-5">
                <label class="mt-2" for="level">Enter the level: </label>
                <input
                    class="border border-white rounded-md"
                    type="text"
                    name="level"
                    id="level"
                    required
                />
            </div>
            <div class="flex justify-center mt-5">
                <button
                    class="text-white border px-4 py-2 m-2 bg-gray-800 border border-white rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
