<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineOptions({
    layout: AuthenticatedLayout
});

const form = useForm({
    port_departed: "",
    port_arrived: "",
    date_departed: "",
    date_arrived: "",
});

const submit = () =>{
    form.post('/trips')
}

</script>

<template>
    <Head title="Create trip" />
    <img
        id="background"
        class="fixed top-0 w-full h-full z-0"
        src="../../../css/container.gif"
        alt="Background"
    />
    <div class="content bg-opacity-25 overflow-auto">

            <div class="con text-black w-[60vh] ml-5 bg-gray-300 bg-opacity-50 border border-gray-500 shadow-lg rounded-lg mt-4 px-4">
                <form @submit.prevent="submit">
                    <div class="flex flex-col my-3">
                        <label for="name">Port Departed</label>
                        <input type="text" id="name" v-model="form.port_departed" class="w-full rounded" required>
                    </div>
                    <div class="flex flex-col my-3">
                        <label for="name">Port Arrived</label>
                        <input type="text" id="name" v-model="form.port_arrived" class="w-full rounded" required>
                    </div>
                    <div class="flex flex-col my-3">
                        <label for="name">Date Departed</label>
                        <input type="date" id="name" v-model="form.date_departed" class="w-full rounded" required>
                    </div>
                    <div class="flex flex-col my-3">
                        <label for="name">Date Arrived</label>
                        <input type="date" id="name" v-model="form.date_arrived" class="w-full rounded" required>
                    </div>
                    <button type="submit" class="my-3 bg-teal-500 text-white px-8 py-4 rounded-lg">Create Trip</button>
                </form>
            </div>
    </div>

</template>


<style scoped>
.content {
    z-index: 1;
    color: white;
    text-align: center;
    animation-name: animate;
    animation-timing-function: ease-in-out;
    animation-duration: 3s;
}

@keyframes animate {
  0% {
    position: absolute;
    transform: scale(50%);
  }
  100% {
    position: absolute;
    transform: scale(100%);
  }
}

#background{
    z-index: -1;
}
</style>
