

<template>
<!-- Hero -->
<div class="relative overflow-hidden before:absolute before:top-0 before:left-1/2 before:bg-[url('/images/polygon-bg-element')] before:bg-no-repeat before:bg-top before:bg-cover before:w-full before:h-full before:-z-[1] before:transform before:-translate-x-1/2 dark:before:bg-[url('../svg/component/polygon-dark.svg')]">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">

    <!-- Title -->
    <div class="mt-5 max-w-2xl text-center mx-auto">
      <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
        Let's Build
        <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">Together</span>
      </h1>
    </div>
    <!-- End Title -->

    <!-- Subtitle-->
    <div class="mt-5 max-w-3xl text-center mx-auto">
      <p class="text-lg text-gray-600 dark:text-gray-400">Preline UI is an open-source...</p>
    </div>
    <!-- End Subtitle-->

    <!-- Buttons -->
    <!-- <div class="mt-8 grid gap-3 w-full sm:inline-flex sm:justify-center">
      <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white py-3 px-4 dark:focus:ring-offset-gray-800" href="#">
        Get started
        <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </a>
      <a class="relative group inline-flex justify-center items-center gap-x-3.5 text-center bg-white border hover:border-gray-300 shadow-sm font-mono text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition p-2 pl-4 dark:bg-slate-900 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" href="javascript:;">
        $ npm i preline
        <span class="flex justify-center items-center bg-gray-200 rounded-md w-7 h-7 dark:bg-gray-700 dark:text-gray-400">
          <svg class="w-3.5 h-3.5 group-hover:rotate-6 transition" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
          </svg>
        </span>
      </a>
    </div> -->
    <!-- End Buttons -->


</div>
    <!--Search form-->
    <div class="mt-5 flex justify-center items-center gap-x-1 sm:gap-x-3">
        <input type="text" class="rounded-md shadow-sm" v-model="search" placeholder="Informe o servico"/>
        <PrimaryButton v-if="search" @click.prevent="reset()">
          Limpar
        </PrimaryButton>
    </div>
    <!--End Search form-->

  <!-- Card Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">
    <Link v-for="item in items" :key="item.slug" class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800" :href="`/${item.slug}`">
      <div class="p-4 md:p-5">
        <div class="flex justify-between items-center">
          <div>
            <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
              {{ item.title }}
            </h3>
            <p class="text-sm text-gray-500">
              {{item.subtitle}}
            </p>
          </div>
          <div class="pl-3">
            <svg class="w-3.5 h-3.5 text-gray-500" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
        </div>
      </div>
    </Link>
  </div>
</div>
<!-- End Card Section -->

</div>
<!-- End Hero -->
</template>

<script setup>

import {Link} from '@inertiajs/vue3'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import { onMounted, watch } from 'vue';
import {ref} from 'vue'

const search = ref('')
const items = ref([])

const props = defineProps(['domains'])

onMounted(() => {
    setItems()
})

// single ref
watch(search, (value) => {
    if (!value) {
        setItems()
        return;
    }
    items.value = items.value.filter(item => item.title.toLowerCase().includes(value.toLowerCase()));
})

function setItems() {
  items.value = props.domains
}

function reset() {
    search.value = ''
}

</script>