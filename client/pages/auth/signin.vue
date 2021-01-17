<template>
  <div class="container mt-16">
    <a href="" @click.prevent="submit">signin</a>
  </div>
</template>

<script>
export default {
  methods: {
    async submit() {
      await this.$auth.loginWith('local', {
        data: {
          email: 'john@email.com',
          password: 'password'
        }
      })
    }
  }
}
</script>

<style></style>
