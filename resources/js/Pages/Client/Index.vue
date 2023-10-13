<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

import { defineProps } from 'vue';


const { clients } = defineProps(['clients']);



</script>

<template>
    <Head title="Client" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Clients</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900" style="display: flex; flex-wrap: wrap;">
                        <div v-for="client in clients" :key="client.id">
                            <div class="m-5 shadow-md rounded-md p-6" style="width: 500px;">
                                <p><b>Full Name:</b> {{ client.last_name }} {{ client.first_name }}</p>
                                <p><b>Address:</b> {{ client.address }}</p>
                                <p><b>Phone:</b> {{ client.phone }}</p>
                                <p><b>Client Limit:</b> {{ client.credit_limit }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
