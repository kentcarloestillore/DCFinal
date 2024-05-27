<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    trips: Array
});

defineOptions({
    layout: AuthenticatedLayout
});

const onDelete = (trip) => {
  const delForm = useForm({
    id: trip.id
  })
  const del = confirm("Are you sure you want to delete this trip!")
  if(del){
    delForm.submit('delete', '/trips/' + trip.id,{
        preserveScroll: true
    });
  }
};
</script>

<template>
    <Head title="Trips" />
    <img
        id="background"
        class="fixed top-0 w-full h-full z-0"
        src="../../../css/container.gif"
        alt="Background"
    />
    <div class="content bg-opacity-25 overflow-auto">
        <div v-if="$page.props.flash.success" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ $page.props.flash.success }}</span>
        </div>
            <table class="min-w-full divide-y divide-gray-200 text-black bg-gray-500 bg-opacity-50">
                <thead class="bg-gray-50 bg-opacity-50">
                    <tr>
                        <th scope="col" class="px-1 py-3 text-left text-xs font-medium text-black uppercase">Id</th>
                        <th scope="col" class="px-1 py-3 text-left text-xs font-medium text-black uppercase">Port Departed</th>
                        <th scope="col" class="px-1 py-3 text-left text-xs font-medium text-black uppercase">Port Arrived</th>
                        <th scope="col" class="px-1 py-3 text-left text-xs font-medium text-black uppercase">Date Departed</th>
                        <th scope="col" class="px-1 py-3 text-left text-xs font-medium text-black uppercase">Date Arrived</th>
                        <th scope="col" class="px-1 py-3 text-left text-xs font-medium text-black uppercase">Action</th>
                    </tr>
                </thead>
                <tbody class=" divide-y divide-gray-500 bg-opacity-50">
                    <tr v-for="(trip, index) in trips" :key="trip.id">
                        <td class="px-1 py-4 whitespace-nowrap text-xs font-medium text-left">{{ trip.id }}</td>
                        <td class="px-1 py-4 whitespace-nowrap text-xs font-medium text-left">{{ trip.port_departed }}</td>
                        <td class="px-1 py-4 whitespace-nowrap text-xs font-medium text-left">{{ trip.port_arrived }}</td>
                        <td class="px-1 py-4 whitespace-nowrap text-xs font-medium text-left">{{ trip.date_departed }}</td>
                        <td class="px-1 py-4 whitespace-nowrap text-xs font-medium text-left">{{ trip.date_arrived }}</td>
                        <td class="px-1 py-4 whitespace-nowrap text-xs font-medium flex justify-center gap-3 items-center">
                            <Link :href="'/trips/' + trip.id" class="text-blue-500 px-1 py-2 whitespace-nowrap text-2xl font-medium flex justify-center items-center hover:text-indigo-900">
                                <i class="fa fa-edit"></i>
                            </Link>
                            <button @click="onDelete(trip)" class="text-red-500 px-1 py-2 whitespace-nowrap text-2xl font-medium flex justify-center items-center hover:text-red-900"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
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
    width: 100%;
    transform: scale(0, 0.005);
  }
  50% {
    width: 100%;
    position: absolute;
    transform: scaleY(0.005);
  }
  100% {
    width: 100%;
    position: absolute;
    transform: scale(1, 1);
  }
}

#background{
    z-index: -1;
}
</style>
