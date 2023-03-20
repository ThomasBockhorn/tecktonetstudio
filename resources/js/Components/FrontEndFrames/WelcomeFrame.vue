<template>
    <div class="col-span-3 p-7 overflow-scroll">
        <h1 id="title" class="text-2xl mb-5 text-center uppercase">Welcome</h1>
        <div class="flex">
            <div>
                <img
                    src="/img/ThomasBockhornHeadShot.jpg"
                    alt="Thomas Bockhorn"
                    class="float-left w-40 h-50 m-5"
                />
                <p class="text-lg">
                    I first got into web development with an invitation from
                    Udacity to apply for a Google scholarship for their
                    front-end web development program. After taking a few
                    lessons , I became hooked on all things web development. To
                    further my education, I took and continue to take Udemy
                    courses for both front-end and back-end development. The
                    beauty of both technical and asthetic spheres and how they
                    interact together fascinates me. Just like architecture,
                    good websites need to consider both form and function. My
                    coursework gave me the skills to build websites for clients.
                    Most recently, I built one for Jim Felder to showcase his
                    art and paintings available for sale.
                </p>
                <p class="mt-5 text-center">- Thomas Bockhorn</p>
            </div>
        </div>
    </div>
</template>
<style scoped>
@media screen and (max-width: 414px) {
    p {
        font-size: 16px;
    }

    #title {
        font-size: 16px;
    }

    img {
        width: 100%;
        height: 25%;
        float: none;
        margin: 0;
        margin-bottom: 10px;
    }
}
</style>
