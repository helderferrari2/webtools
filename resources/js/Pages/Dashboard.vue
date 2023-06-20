<template>
    <Head :title="props.domains.page.title"></Head>
    <DashboardLayout :domains="props.domains">
        <Card>
            <component :is="dynamicComponent" :domains="props.domains.page" :data="data" @submit="submit"></component>
        </Card>
    </DashboardLayout>
</template>

<script setup>

import { ref, defineAsyncComponent } from 'vue'
import { Head } from '@inertiajs/vue3';
import Card from '@/Components/Card.vue';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

const dynamicComponent = defineAsyncComponent(() => import('@/Pages/PasswordGenerator.vue'))

const props = defineProps({
    domains: {
        type: Object,
        required: true
    },
    data :{}
})

const data = ref(props.data)

const submit = (formData) => {
    axios.post(route('action'), formData)
        .then(response => data.value = response.data)
        .catch(error => console.log({ error }))
};

</script>