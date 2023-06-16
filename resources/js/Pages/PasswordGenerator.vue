<template>
    <div>
        <!-- form -->
        <form @submit.prevent="submit">
            <div class="flex my-3 space-x-3">
                <div class="block">
                    <label class="flex flex-column items-center">
                        <Checkbox name="remember" v-model:checked="form.numbers" />
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Números</span>
                    </label>
                </div>
                <div class="block">
                    <label class="flex flex-column items-center">
                        <Checkbox name="remember" v-model:checked="form.lowercase" />
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Minúsculas</span>
                    </label>
                </div>
                <div class="block">
                    <label class="flex flex-column items-center">
                        <Checkbox name="remember" v-model:checked="form.uppercase" />
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Maiúsculas</span>
                    </label>
                </div>
                <div class="block">
                    <label class="flex flex-column items-center">
                        <Checkbox name="remember" v-model:checked="form.symbols" />
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Símbolos</span>
                    </label>
                </div>
            </div>

            <div class="flex my-3 space-x-3">
                <div class="block">
                    <label class="flex flex-column items-center">
                        <input type="text" v-model="form.length" />
                    </label>
                </div>
            </div>

            <div class="flex my-3 space-x-3">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Gerar
                </PrimaryButton>
            </div>
        </form>

        <!--Result-->
        <div>
            {{ data }}
        </div>
    </div>
</template>

<script setup>
import { defineEmits } from 'vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import Checkbox from '@/Components/Checkbox.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const emit = defineEmits(['submit']);

const props = defineProps({
    domains: {
        type: Object,
    },
    data: {
        type: String,
        default: ''
    }
})

const form = useForm({
    numbers: true,
    lowercase: true,
    uppercase: true,
    symbols: false,
    length: 16,
});

const submit = () => {
    emit('submit', {
        method: props.domains.method,
        params: form,
    })
}
</script>

