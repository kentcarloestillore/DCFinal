<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

defineOptions({
    layout: AuthenticatedLayout
});

const props = defineProps({
    trips: Array,
    booking: Object
});

const form = useForm({
    name: props.booking.name,
    trip_id: props.booking.trip_id,
    description: props.booking.description,
    date: props.booking.date,
    weight: props.booking.weight,
    price: props.booking.price
});

const submit = () => {
    console.log(form)
    console.log(props.booking.id)
    form.put(`/bookings/${props.booking.id}`);
    console.log(props.booking.id)
};

</script>

<template>
    <Head title="Edit Booking" />
    <img
        id="background"
        class="fixed top-0 w-full h-full z-0"
        src="../../../css/container.gif"
        alt="Background"
    />
    <div class="content bg-opacity-25 overflow-hidden">
        <div class="con text-black w-[60vh] ml-5 bg-gray-300 bg-opacity-50 border border-gray-500 shadow-lg rounded-lg mt-4 px-4">
            <form @submit.prevent="submit">
                <div class="flex flex-col my-3">
                    <label for="name">Customer Name</label>
                    <input type="text" id="name" v-model="form.name" class="w-full rounded" required>
                </div>
                <div class="flex flex-col my-3">
                    <label for="trip_id">Trip</label>
                    <select name="trip_id" id="trip_id" class="w-full rounded" v-model="form.trip_id" required>
                        <option :value="trip.id" v-for="(trip, index) in trips" :key="trip.id">From: {{ trip.port_departed }} To: {{ trip.port_arrived }}</option>
                    </select>
                </div>
                <div class="flex flex-col my-3">
                    <label for="description">Description</label>
                    <textarea rows="4" id="description" class="w-full rounded" v-model="form.description" required></textarea>
                </div>
                <div class="flex flex-col my-3">
                    <label for="date">Date</label>
                    <input type="date" id="date" class="w-full rounded" v-model="form.date" step="1" required>
                </div>
                <div class="flex flex-col my-3">
                    <label for="weight">Weight</label>
                    <input type="number" id="weight" class="w-full rounded" v-model="form.weight" step="1" required>
                </div>
                <div class="flex flex-col my-3">
                    <label for="price">Price</label>
                    <input type="number" id="price" class="w-full rounded" v-model="form.price" step="1" required>
                </div>
                <button type="submit" class="my-3 bg-teal-500 text-white px-8 py-4 rounded-lg mx-2">Save Changes</button>
                <Link href="/bookings" class="my-3 bg-green-500 text-white px-8 py-4 rounded-lg mx-2">Back</Link>
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
    transform: translateX(100vh);
  }
  100% {
    position: absolute;
    transform: translateX(0vh);
  }
}

#background{
    z-index: -1;
}
</style>
