<template>
  <div class="container mt-16">
    <div class="flex flex-col items-center">
      <h1 class="mb-10 text-3xl font-medium text-gray-700">Hello</h1>

      <form
        action="#"
        class="w-full p-8 mb-6 bg-white rounded md:w-6/12 lg:w-4/12"
        @submit.prevent="submit"
      >
        <div class="mb-5">
          <label
            for="email"
            class="block mb-2 font-medium text-gray-600"
            :class="{
              'text-red-500': validation.email
            }"
          >
            Email address
          </label>
          <input
            type="text"
            name="email"
            id="email"
            class="block w-full p-3 border-2 border-gray-400 rounded"
            :class="{
              'border-red-500': validation.email
            }"
            v-model="form.email"
          />
          <div
            class="mt-1 mb-4 text-sm font-medium text-red-500"
            v-if="validation.email"
          >
            {{ validation.email[0] }}
          </div>
        </div>

        <div class="mb-5">
          <label
            for="password"
            class="block mb-2 font-medium text-gray-600"
            :class="{
              'text-red-500': validation.password
            }"
          >
            Password
          </label>
          <input
            type="password"
            name="password"
            id="password"
            autocomplete="false"
            class="block w-full p-3 border-2 border-gray-400 rounded"
            :class="{
              'border-red-500': validation.password
            }"
            v-model="form.password"
          />
          <div
            class="mt-1 mb-4 text-sm font-medium text-red-500"
            v-if="validation.password"
          >
            {{ validation.password[0] }}
          </div>
        </div>

        <div>
          <button
            type="submit"
            class="block w-full p-4 font-medium text-center text-white bg-blue-500 rounded"
          >
            Sign in
          </button>
        </div>
      </form>

      <div class="text-center text-gray-600">
        No Account ?
        <nuxt-link :to="{ name: 'index' }">
          Create one here
        </nuxt-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: 'Sign In'
    }
  },
  data() {
    return {
      form: {
        email: '',
        password: ''
      },
      validation: {}
    }
  },
  methods: {
    async submit() {
      try {
        await this.$auth.loginWith('local', {
          data: this.form
        })
      } catch (err) {
        if (err.response.status === 422) {
          this.validation = err.response.data.errors
        }
      }
    }
  }
}
</script>

<style></style>
