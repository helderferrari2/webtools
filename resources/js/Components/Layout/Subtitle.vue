<template>
    <p class="text-sm text-gray-800 dark:text-gray-400">
        {{value}}
    </p>
</template>

<script setup>

defineProps({
  value: {
      type: String,
      default: '',
  }
})
</script>
