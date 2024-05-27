<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    trips: Array
});

defineOptions({
    layout: AuthenticatedLayout
});

const form = useForm({
    name: "",
    trip_id: "",
    description: "",
    date: "",
    weight:"",
    price:""
});

const isLoading = ref(false);

const submit = () => {
    isLoading.value = true;
    setTimeout(() => {
        form.post('/bookings', {
            onFinish: () => {
                isLoading.value = false;
            }
        });
    }, 4000);
};

</script>

<template>
    <Head title="Create book" />
    <img
        id="background"
        class="fixed top-0 w-full h-full z-0"
        src="../../../css/container.gif"
        alt="Background"
    />
    <div class="content bg-opacity-25 flex">

            <div class="con text-black w-[60vh] ml-5 bg-gray-300 bg-opacity-50 border border-gray-500 shadow-lg rounded-lg mt-4 px-4">
                <form @submit.prevent="submit">
                    <div class="flex flex-col my-3">
                        <label class="text-start" for="name">Customer Name</label>
                        <input type="text" id="name" v-model="form.name" class="w-full rounded" required>
                    </div>
                    <div class="flex flex-col my-3">
                        <label class="text-start" for="trip_id">Trip</label>
                        <select name="trip_id" id="trip_id" class="w-full rounded" v-model="form.trip_id" required>
                            <option :value="trip.id" v-for="(trip, index) in trips" :key="trip.id">From: {{ trip.port_departed }} To: {{ trip.port_arrived }}</option>
                        </select>
                    </div>
                    <div class="flex flex-col my-3">
                        <label class="text-start" for="description">Description</label>
                        <textarea rows="4" id="description" class="w-full rounded" v-model="form.description" required></textarea>
                    </div>
                    <div class="flex flex-col my-3">
                        <label class="text-start" for="date">Date</label>
                        <input type="date" id="weight" class="w-full rounded" v-model="form.date" required>
                    </div>
                    <div class="flex flex-col my-3">
                        <label class="text-start" for="weight">Weight</label>
                        <input type="number" id="weight" class="w-full rounded" v-model="form.weight" step="1" required>
                    </div>
                    <div class="flex flex-col my-3">
                        <label class="text-start" for="price">Price</label>
                        <input type="number" id="price" class="w-full rounded" v-model="form.price" step="1" required>
                    </div>
                    <button type="submit" class="my-3 bg-teal-500 text-white px-8 py-4 rounded-lg">Create Booking</button>
                </form>
            </div>
            <div class="image m-10">
                <img v-if="!isLoading" src="../../../css/shipstill.png" alt="Static Ship" class="h-[40vh]">
                <img v-else src="../../../css/shipload.gif" alt="Loading Ship" class="h-[40vh]">
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
    transform: scale(80%);
  }
  100% {
    transform: scale(100%);
  }
}

.image{
    animation-name: image;
    animation-duration: 5s;
    animation-timing-function: ease-in;
}

@keyframes image {
  0% {
    opacity: 0%;
  }
  95% {
    opacity: 100%;
  }
}

#background{
    z-index: -1;
}
</style>
