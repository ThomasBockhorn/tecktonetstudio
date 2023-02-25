<template>
    <nav
        class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700"
    >
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <BackendLogo />

                    <!-- Navigation Links -->
                    <BackendNavLinks />
                </div>

                <!-- Settings Dropdown -->
                <BackendSettingsDropdown />

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button
                        @click="
                            showingNavigationDropdown =
                                !showingNavigationDropdown
                        "
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out"
                    >
                        <svg
                            class="h-6 w-6"
                            stroke="currentColor"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                :class="{
                                    hidden: showingNavigationDropdown,
                                    'inline-flex': !showingNavigationDropdown,
                                }"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                            <path
                                :class="{
                                    hidden: !showingNavigationDropdown,
                                    'inline-flex': showingNavigationDropdown,
                                }"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div
            :class="{
                block: showingNavigationDropdown,
                hidden: !showingNavigationDropdown,
            }"
            class="sm:hidden"
        >
            <BackendResponsiveLink />
            <!-- Responsive Settings Options -->
            <BackendResponsiveSettings />
        </div>
    </nav>
</template>

<script>
import { ref } from "vue";
import BackendLogo from "@/Components/Backend_ui/BackendLogo.vue";
import BackendNavLinks from "@/Components/Backend_ui/BackendNavLinks.vue";
import BackendSettingsDropdown from "@/Components/Backend_ui/BackendSettingsDropdown.vue";
import BackendResponsiveLink from "@/Components/Backend_ui/BackendResponsiveLink.vue";
import BackendResponsiveSettings from "@/Components/Backend_ui/BackendResponsiveSettings.vue";

const showingNavigationDropdown = ref(false);

export default {
    components: {
        BackendLogo,
        BackendNavLinks,
        BackendSettingsDropdown,
        BackendResponsiveLink,
        BackendResponsiveSettings,
    },
    setup() {
        return {
            showingNavigationDropdown,
        };
    },
};
</script>

<style></style>
