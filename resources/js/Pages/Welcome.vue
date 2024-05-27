<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 h-[100vh] overflow-hidden">
        <img
            id="background"
            class="absolute top-0 w-full h-[100vh]"
            src="../../css/sea.jpg"
        />
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <img src="../../css/shipmove.png" alt="" class="ship">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <img src="../../css/logo.png" alt="" srcset="" class="w-[15rem] rounded-full absolute top-[-8vh]" id="logo">
                    </div>
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-6" id="body">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <div class="flex flex-col gap-5">
                            <div id="screenshot-container" class="card1 relative flex w-full h-max flex-1 items-stretch overflow-hidden rounded-lg bg-white bg-opacity-50 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:bg-opacity-100 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
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
                            <div id="screenshot-container" class="card2 relative flex w-full h-max flex-1 items-stretch overflow-hidden rounded-lg bg-white bg-opacity-50 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:bg-opacity-100 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20] group">
                                <div class="relative flex items-center lg:items-end">
                                    <div class="pt-3 sm:pt-5">
                                        <div class="flex flex-col w-full">
                                            <div class="absolute w-full h-full">
                                                <img src="../../css/picture.png" alt="" class="w-[40vh] top-[-11vh] absolute opacity-50 transition-opacity duration-300 group-hover:opacity-100">
                                            </div>
                                            <h2 class="text-xl font-semibold text-black dark:text-white z-10">Kent Carlo J. Estillore</h2>
                                            <p class="mt-4 text-sm/relaxed z-20 group-hover:text-black group-hover:text-shadow-white relative">
                                                <span class="absolute inset-0 bg-white bg-opacity-10 p-2 transition duration-300 opacity-0 group-hover:opacity-100"></span>
                                                <span class="relative z-10">
                                                    Kent Carlo Estillore is a web developer who created the innovative cargo shipping booking application, designed to simplify and enhance the booking process for users worldwide.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="screenshot-container" class="card3 relative flex w-full h-max flex-1 items-stretch overflow-hidden rounded-lg bg-white bg-opacity-50 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:bg-opacity-100 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div class="relative flex items-center lg:items-end">
                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white mb-5">Key Feature: </h2>
                                    <h2>User-Friendly Interface:</h2>
                                    <ul>
                                        <li>Intuitive design and navigation.</li>
                                        <li>Responsive layout for desktop and mobile.</li>
                                    </ul>

                                    <h2>Real-Time Availability and Booking:</h2>
                                    <ul>
                                        <li>Up-to-date ship availability and schedules.</li>
                                        <li>Instant booking confirmation and e-tickets.</li>
                                    </ul>

                                    <h2>Multiple Payment Options:</h2>
                                    <ul>
                                        <li>Secure payments via credit/debit cards, online banking, and digital wallets.</li>
                                        <li>Transparent pricing with no hidden fees.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="text-center mt-4">Copyright &copy; 2024. BSIT-3 Clab-2 Inc.</footer>
            </div>
        </div>
    </div>
</template>


<style scoped>

#logo{
    animation-name: logo;
    animation-duration: 2s;
    animation-timing-function: ease-in-out;
}

@keyframes logo {
    0% {width: 100vh;}
}

#body{
    animation-name: body;
    animation-duration: 3s;
    animation-timing-function: ease-in-out;
}

@keyframes body {
    0%  {opacity: 0;}
    30%  {opacity: 0;}
}

.ship{
    position: absolute;
    animation-name: ship;
    animation-duration: 5s;
    width: 20vh;
    opacity: 0%;
}

@keyframes ship {
    0%      {
             position: absolute;
             width: 20vh;
             opacity: 0%;
            }
    20%      {
             position: absolute;
             width: 20vh;
             opacity: 0%;
            }
    90%    {
             position: absolute;
             width: 180vh;
             opacity: 60%;
             z-index: 10;
            }
    100%    {
             position: absolute;
             width: 200vh;
             opacity: 0%;
             z-index: 0;
            }
}



</style>
