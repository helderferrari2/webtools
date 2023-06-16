<template>
    <div
        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
        <div class="p-4 md:p-7">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white" v-if="title">
                {{ title }}
            </h3>
            <p class="mt-2 text-gray-800 dark:text-gray-400" v-if="subtitle">
                {{ subtitle }}
            </p>
            <slot></slot>
        </div>
    </div>
</template>

<script setup>

defineProps({
    title: {
        type: String,
        default: '',
    },
    subtitle: {
        type: String,
        default: '',
    }
})
</script>