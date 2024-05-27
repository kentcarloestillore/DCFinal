<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineOptions({
    layout: AuthenticatedLayout
});
</script>

<template>
    <Head title="Dashboard" />
    <img
            id="background"
            class="absolute top-0 w-full h-[100vh]"
            src="../../css/container.gif"
        />
    <div class="content bg-opacity-25 flex flex-col items-center justify-center mt-5 gap-10">

        <h2 class="font-semibold text-gray-800 leading-tight text-start text-4xl">Dashboard</h2>

        <div id="screenshot-container" class="text-black card1 relative flex w-[30%] h-max flex-1 overflow-hidden rounded-lg bg-white bg-opacity-100 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:bg-opacity-100 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
            <div class="relative flex items-center lg:items-end">
                <div class="pt-3 sm:pt-5 lg:pt-0">
                        <h2 class="text-xl font-semibold text-black dark:text-white">Ship Transport Booking Web Application</h2>

                    <p class="mt-4 text-sm/relaxed">
                        This is a web project aims to revolutionize the way people book ship transport by providing a user-friendly,
                        efficient, and comprehensive online platform. This web application will cater to a variety of users,
                        including individual travelers, businesses, and logistics companies, ensuring a seamless and hassle-free
                        booking experience for all.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <img src="../../css/vision.gif" alt="" class="absolute top-40 left-20">
</template>

<style scoped>

@keyframes animate {
  0% {
    transform: scale(0, 0.005);
  }
  50% {
    transform: scaleY(0.005);
  }
  100% {
    transform: scale(1, 1);
  }
}

.content {
    z-index: 1;
    color: white;
    text-align: center;
    animation-name: animate;
    animation-timing-function: ease-in-out;
    animation-duration: 3s;
}

#background{
    z-index: -1;
}


</style>
