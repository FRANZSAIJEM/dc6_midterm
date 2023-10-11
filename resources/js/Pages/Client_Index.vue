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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Client</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <!-- Client Loop -->
                        <ul>
                            <li v-for="client in clients" :key="client.id">
                                <!-- Display client information here -->
                                <h3>{{ client.last_name }}</h3>
                                <p>{{ client.first_name }}</p>
                                <!-- Add other client properties as needed -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
