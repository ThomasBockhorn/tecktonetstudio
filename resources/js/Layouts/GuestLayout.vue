<template>
    <div
        class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900"
    >
        <div
            id="guest-layout"
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
<style scoped>
#guest-layout::-webkit-scrollbar {
    display: none;
}
</style>
