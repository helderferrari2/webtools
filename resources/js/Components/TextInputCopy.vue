<template>
    <div class="flex relative w-full">
        <span class="block w-full h-10 bg-gray-100 px-4 py-2 rounded-sm">
            {{ value }}
        </span>
        <button
            @click.prevent="copyToClipboard"
            class="absolute top-0 right-0 p-2.5 text-gray-500 hover:text-gray-600"
        >
            <svg
                class="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                ></path>
            </svg>
        </button>
    </div>
</template>

<script setup>
import { toast } from "vue3-toastify";

const props = defineProps(["value"]);

const copyToClipboard = () => {
    navigator.clipboard.writeText(props.value);
    toast.success("Copiado com sucesso!");
};
</script>
