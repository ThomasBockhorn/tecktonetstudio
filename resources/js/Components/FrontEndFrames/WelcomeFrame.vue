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
                    As a freelance web developer, I understand that your website
                    is a crucial part of your online presence, and I am
                    committed to delivering a high-quality product that meets
                    your unique needs. Our approach is collaborative and
                    client-focused, and I will work closely with you every step
                    of the way to ensure that your website reflects your brand
                    and meets your goals. Whether you're looking for a simple
                    landing page or a complex e-commerce platform, I have the
                    skills and expertise to bring your project to fruition. I
                    believe that communication is key, and we will keep you
                    updated throughout the development process to ensure that
                    you are satisfied with the direction of the project. I am
                    committed to delivering a website that is user-friendly,
                    visually appealing, and optimized for search engines. Thank
                    you for considering us for your freelance web development
                    project. I am looking forward to working with you and
                    bringing your vision to life!
                </p>
                <p class="mt-5 text-center">- Thomas Bockhorn</p>
            </div>
        </div>
    </div>
</template>
<style scoped>
@media screen and (max-width: 425px) {
    p {
        font-size: 16px;
    }

    img {
        width: 100%;
        height: 35%;
        float: none;
        margin: 0;
        margin-bottom: 10px;
    }
}

@media screen and (min-width: 426px) and (max-width: 768px) {
    p {
        font-size: 18px;
    }

    img {
        width: 50%;
        height: 60%;
        float: left;
        margin: 1rem;
        margin-bottom: 10px;
    }
}

@media screen and (min-width: 769px) and (max-width: 820px) {
    p {
        font-size: 20px;
    }

    img {
        width: 50%;
        height: 60%;
        float: left;
        margin: 1rem;
        margin-bottom: 10px;
    }
}
</style>
