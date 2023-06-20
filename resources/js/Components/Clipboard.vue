<template>
    <div>
        <label v-if="label" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
            {{ label }}
        </label>
        <div class="flex items-center justify-between w-full h-10 px-4 py-2 rounded-sm bg-gray-100">
            <div>{{ value }}</div>
            <div class="p-2.5 text-gray-500 hover:text-gray-600">

                <button @click.prevent="copyToClipboard" class="flex">
                    <div v-if="!showTooltip" class="flex items-center gap-1">
                        <span>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                </path>
                            </svg>
                        </span>
                        <span class="text-xs">Copiar</span>
                    </div>
                    <div v-else class="flex items-center gap-1">
                        <span>
                            <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </span>
                        <span class="text-xs">Copiado</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps(["label", "value"]);

const showTooltip = ref(false);

const copyToClipboard = () => {
    navigator.clipboard.writeText(props.value);
    showTooltip.value = true;
    setTimeout(() => showTooltip.value = false, 1000)
};
</script>