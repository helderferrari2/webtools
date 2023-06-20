<template>
    <div class="dark:bg-slate-900">
        <Sidebar :items="domains.menu" />

        <!-- Content -->
        <div class="flex flex-col lg:ml-[256px] min-h-screen bg-gray-100 dark:bg-gray-700">
            <!-- Page Heading -->
            <Header />

            <!-- Page Content -->
            <main class="m-3 flex-1">
                <Breadcrumb />
                <section class="my-3">
                    <slot />
                </section>
            </main>

            <!-- Page Footer -->
            <Footer />
        </div>
    </div>
</template>

<script setup>
import Sidebar from "@/Components/Layout/Sidebar.vue";
import Breadcrumb from "@/Components/Layout/Breadcrumb.vue";
import Header from "@/Components/Layout/Header.vue";
import Footer from "@/Components/Layout/Footer.vue";

defineProps({
    domains: {
        type: Object,
        required: true
    }
})
</script>
