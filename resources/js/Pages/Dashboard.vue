<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />
    <DashboardLayout :title="'Gerador de Pessoas'" :subtitle="'Gera dados pessoais aleatórios. Ferramenta utilizada para testes de software.'">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
            <div class="p-4 md:p-7">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Card title
                </h3>
                <p class="mt-2 text-gray-800 dark:text-gray-400">
                With supporting text below as a natural lead-in to additional content.
                </p>
            </div>
        </div>
    </DashboardLayout>
</template>


