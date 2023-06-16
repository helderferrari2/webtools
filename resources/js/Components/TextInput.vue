<template>
    <label
        for="input-label"
        class="block text-sm font-medium mb-2 dark:text-white"
        >{{ label }}</label
    >
    <div class="relative w-full">
        <input
            type="text"
            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            ref="input"
            :disabled="disabled"
        />
            <div class="hs-tooltip inline-block">
                <button
                    type="button"
                    @click.prevent="copyToClipboard()"
                    class="hs-tooltip-toggle absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
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
                    <span
                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-sm dark:bg-slate-700"
                        role="tooltip"
                    >
                        Copiar
                    </span>
                </button>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    modelValue: {
        type: String,
        required: true,
    },
    label: {
        type: String,
        default: "",
    },
    size: {
        type: String,
        default: "sm",
    },
    copy: {
        type: Boolean,
        default: true,
    },
    disabled: {
        type: Boolean,
        default: true,
    },
});

defineEmits(["update:modelValue"]);

function copyToClipboard() {
    try {
        navigator.clipboard.writeText(props.modelValue);
    } catch (e) {
        console.error(e);
    }
}

// import { useMessage } from './useMessage';

// const { message, printMessage } = useMessage();

// // You can now access the message and printMessage in your template after extracting them from the useMessage composable
// https://www.thisdot.co/blog/converting-your-vue-2-mixins-into-composables-using-the-composition-api/
</script>
