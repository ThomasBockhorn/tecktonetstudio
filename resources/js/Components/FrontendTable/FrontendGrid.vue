<template>
    <div id="neon" class="h-2/3 w-3/4 z-0 absolute mx-auto"></div>
    <div
        id="blackout"
        class="absolute h-2/3 w-full z-10 bg-gray-100 dark:bg-gray-900 border-grey-900 border-5 -rotate-45"
    ></div>
    <div class="grid grid-cols-4 grid-flow-rows z-20 gap-4 w-3/4">
        <div class="col-span-3 p-7">
            <h1 class="text-2xl mb-5 text-center">Welcome</h1>
            <div class="flex">
                <div>
                    <img
                        src="/img/ThomasBockhorn.JPG"
                        alt="Thomas Bockhorn"
                        class="float-left w-40 h-50 m-5"
                    />
                    <p class="text-lg">
                        I first got into web development with an invitation by
                        Udacity including a Google scholarship for their
                        front-end web development program. After taking a few
                        lessions, I became hooked on all things web development.
                        To further my education, I took and continue to take
                        Udemy courses for both front-end and back-end
                        development. The beauty of both technical and asthetic
                        spheres and how they interacted together fascinated me.
                        Just like architecture, good websites need to consider
                        both form and function.
                    </p>
                    <p class="mt-5">- Thomas Bockhorn</p>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="flex flex-col">
                <h1 class="text-2xl ml-5 mr-5 text-center mb-5">Menu</h1>

                <button class="text-lg text-center">
                    <span class="hover:underline hover:decoration-2"
                        >Welcome</span
                    >
                </button>
                <button class="text-lg text-center">
                    <span class="hover:underline hover:decoration-2"
                        >Projects</span
                    >
                </button>
                <button class="text-lg text-center">
                    <span class="hover:underline hover:decoration-2"
                        >Skills</span
                    >
                </button>
                <button class="text-lg text-center">
                    <span class="hover:underline hover:decoration-2"
                        >Contact</span
                    >
                </button>
            </div>
        </div>
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

span {
    text-decoration-color: hsl(186 100% 69%);
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
