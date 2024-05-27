<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <img
            id="background"
            class="absolute top-0 w-full h-[100vh]"
            src="../../css/sea.jpg"
        />
        <div class="content z-10 overflow-hidden">
            <div class="z-10 bg-opacity-50">
                <Link href="/">
                    <ApplicationLogo class="w-[20rem] mt-[-10vh] rounded-full" />
                </Link>
            </div>

            <div
                class="w-full sm:max-w-md mt-[-7vh] px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg z-10 bg-opacity-50 hover:bg-opacity-100"
            >
                <slot />
            </div>
        </div>
    </div>
</template>


<style scoped>
.content{
    animation-name: transition;
    animation-duration: 3s;
}

@keyframes transition {
    0% {transform: scale(50%)}
    100% {transform: scale(100%)}
}
</style>
