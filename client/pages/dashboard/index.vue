<template>
  <div class="container mt-16">
    <div class="flex justify-between">
      <h1 class="mb-6 text-xl font-medium text-gray-600">
        Your snippets (1)
      </h1>

      <a href="#" @click.prevent="createSnippet">+ Create a Snippet</a>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    async createSnippet() {
      const snippet = await this.$axios.$post('snippets')

      this.$router.push({
        name: 'snippets-id-edit',
        params: {
          id: snippet.data.uuid
        }
      })
    }
  }
}
</script>

<style></style>
