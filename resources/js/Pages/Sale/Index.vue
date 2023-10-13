<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

import { defineProps } from 'vue';


const { products } = defineProps(['products']);



</script>

<template>
    <Head title="product" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Sales</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900" style="display: flex; flex-wrap: wrap;">
                        <!-- <div v-for="product in products" :key="product.id">
                            <div class="m-5 shadow-md rounded-md p-6" style="width: 500px;">
                                <p><b>Brad:</b>{{ product.brand }}</p>
                                <p><b>Name:</b>{{ product.name }}</p>
                                <p><b>Description:</b>{{ product.description }}</p>
                                <p><b>Retail Price:</b>{{ product.retail_price }}</p>
                                <p><b>Quantity Stock:</b>{{ product.qty_stock }}</p>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
