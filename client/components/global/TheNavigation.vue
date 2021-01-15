<template>
  <div class="flex items-center py-8 bg-white lg:py-0">
    <div class="container flex flex-wrap items-center lg:flex-nowrap">
      <nuxt-link :to="{ name: 'home' }" class="flex-shrink-0 mr-10">
        <img src="@/assets/logo.svg" alt="Logo" class="h-8" />
      </nuxt-link>

      <a
        href="#"
        @click.prevent="mobileNavOpen = !mobileNavOpen"
        class="ml-auto lg:hidden"
        >Open</a
      >

      <div
        class="flex w-full"
        :class="{
          'mt-8': mobileNavOpen,
          'hidden lg:flex': !mobileNavOpen
        }"
      >
        <ul class="items-center w-full lg:flex lg:h-24 lg:w-auto">
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:px-4 lg:py-8"
            >
              Browse
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:px-4 lg:py-8"
            >
              Search
            </nuxt-link>
          </li>
        </ul>
        <ul
          class="items-center w-full ml-auto text-right lg:flex lg:h-24 lg:w-auto"
        >
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:px-4 lg:py-8"
            >
              Dashboard
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:px-4 lg:py-8"
            >
              Rubin Bajracharya
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:px-4 lg:py-8"
            >
              Sign In
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:px-4 lg:py-8"
            >
              Create an account
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'home' }"
              class="text-lg text-gray-700 lg:px-4 lg:py-8"
            >
              Sign out
            </nuxt-link>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      mobileNavOpen: false
    }
  }
}
</script>

<style></style>
