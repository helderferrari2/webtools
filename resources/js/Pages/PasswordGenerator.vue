<template>
    <div>
        <Clipboard :value="data" />
        <Divider />
        
        <!-- form -->
        <p class="mb-3">Customize sua senha com os filtros abaixo:</p>
        <form @submit.prevent="submit">

            <div class="my-3">
                <InputLabel for="length" value="Tamanho da Senha" />
                <TextInput
                    id="length"
                    type="text"
                    class="mt-1 block"
                    v-model="form.length"
                    v-mask="'###'"
                />
                <InputError class="mt-2" :message="form.errors.length" />
            </div>

            <div class="flex flex-col space-y-2">
                <InputLabel for="checkboxes" value="Tipos de caracteres" />
                <div class="block">
                    <label class="flex flex-column items-center">
                        <Checkbox name="remember" v-model:checked="form.numbers" />
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Incluir Números (0-9)</span>
                    </label>
                </div>
                <div class="block">
                    <label class="flex flex-column items-center">
                        <Checkbox name="remember" v-model:checked="form.lowercase" />
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Incluir Minúsculas (a-z)</span>
                    </label>
                </div>
                <div class="block">
                    <label class="flex flex-column items-center">
                        <Checkbox name="remember" v-model:checked="form.uppercase" />
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Incluir Maiúsculas (A-Z)</span>
                    </label>
                </div>
                <div class="block">
                    <label class="flex flex-column items-center">
                        <Checkbox name="remember" v-model:checked="form.symbols" />
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Incluir Símbolos (!@#$%&*...)</span>
                    </label>
                </div>
            </div>

            <div class="flex my-3 space-x-3 justify-center">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Gerar Senha
                </PrimaryButton>
            </div>
        </form>

        <Divider />

    </div>
</template>

<script setup>
import { defineEmits } from 'vue';
import { useForm } from '@inertiajs/vue3';
import Divider from '@/Components/Divider.vue';
import Clipboard from '@/Components/Clipboard.vue'
import Checkbox from '@/Components/Checkbox.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
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

// const validatePassword = () => {
//       const strongRegex = new RegExp(
//         '^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})'
//       );
//       const mediumRegex = new RegExp(
//         '^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})'
//       );

//       if (strongRegex.test(props.data)) {
//         return 'Forte';
//       } else if (mediumRegex.test(props.data)) {
//         return 'Médio';
//       } else {
//         return 'Fraco';
//       }
//     };

// const passwordStrength = computed(() =>  validatePassword());

</script>

