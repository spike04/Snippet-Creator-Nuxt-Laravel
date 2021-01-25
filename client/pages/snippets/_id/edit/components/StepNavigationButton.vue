<template>
  <nuxt-link
    :to="
      step
        ? {
            query: {
              step: step.uuid
            }
          }
        : {}
    "
    class="block p-3 mb-2 mr-2 bg-blue-500 rounded-lg"
    :class="{
      'opacity-25 pointer-events-none': !step
    }"
  >
    <slot />
  </nuxt-link>
</template>

<script>
export default {
  props: {
    step: {
      required: true,
      type: Object
    }
  }
}
</script>
