<template>
    <div id="neon" class="h-2/3 w-2/3 z-0 absolute mx-auto"></div>
    <div
        id="blackout"
        class="absolute h-full z-10 bg-gray-100 min-h-screen dark:bg-gray-900 border-grey-900 border-5 w-full -rotate-45"
    ></div>
    <div class="grid grid-cols-2 z-20 mx-auto absolute">
        <div>1</div>
        <div>2</div>
        <div>3</div>
        <div>4</div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped>
#neon {
    border: 5px solid hsl(186 100% 69%);
    box-shadow: 0px 0px 0.5em 0px hsl(186 100% 69%),
        0px 0px 0.5em 0px hsl(186 100% 69%);
    animation: glow 3s infinate;
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
</style>
