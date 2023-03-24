<template>
    <div>
        <button
            class="hamburger hamburger--collapse mt-2"
            :class="active"
            @click="clickEvent"
            type="button"
        >
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            active: "",
            clicked: false,
        };
    },
    methods: {
        clickEvent() {
            this.active = this.active === "" ? "is-active" : "";
            this.clicked = !this.clicked;
            this.$emit("clickEvent", this.clicked);
        },
    },
};
</script>

<style>
.hamburger-inner,
.hamburger-inner::before,
.hamburger-inner::after {
    background-color: white;
}

.hamburger.is-active .hamburger-inner,
.hamburger.is-active .hamburger-inner::before,
.hamburger.is-active .hamburger-inner::after {
    background-color: white;
}

@media screen and (min-width: 1024px) {
    .hamburger {
        display: none;
    }
}
</style>
