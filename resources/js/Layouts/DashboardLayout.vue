<template>
    <div class="dark:bg-slate-900">
        <Sidebar />

        <!-- Content -->
        <div class="flex flex-col lg:ml-[256px] bg-gray-100 h-screen">
            <!-- Page Heading -->
            <Header />

            <!-- Page Content -->
            <main class="m-3">
                <article>
                  <!-- <Breadcrumb /> -->
                  <Title :value="title"/>
                  <Subtitle :value="subtitle"/>
                </article>
                <section class="my-3">
                  <slot />
                </section>
            </main>
        </div>
    </div>
</template>

<script setup>
import Sidebar from "@/Components/Layout/Sidebar.vue";
import Breadcrumb from "@/Components/Layout/Breadcrumb.vue";
import Header from "@/Components/Layout/Header.vue";
import Title from "@/Components/Layout/Title.vue";
import Subtitle from "@/Components/Layout/Subtitle.vue";
import Footer from "@/Components/Layout/Footer.vue";

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
