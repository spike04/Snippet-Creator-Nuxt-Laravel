<template>
  <div class="flex items-center py-8 bg-white lg:py-0">
    <div class="container flex flex-wrap items-center lg:flex-nowrap">
      <nuxt-link :to="{ name: 'index' }" class="flex-shrink-0 mr-10">
        <img src="@/assets/logo.svg" alt="Logo" class="h-8" />
      </nuxt-link>

      <a
        href="#"
        @click.prevent="mobileNavOpen = !mobileNavOpen"
        class="relative flex flex-col justify-center w-8 h-8 ml-auto lg:hidden"
      >
        <span
          class="w-8 h-1 mb-1 bg-blue-500 rounded"
          :class="{
            'transform ease-in-out rotate-45 absolute right-0 duration-200': mobileNavOpen
          }"
        ></span>
        <span
          class="w-8 h-1 mb-1 bg-blue-500 rounded"
          :class="{
            'transform ease-in-out -rotate-45 absolute right-0 duration-200': mobileNavOpen
          }"
        ></span>
        <span
          class="w-8 h-1 mb-1 duration-500 bg-blue-500 rounded"
          :class="{
            hidden: mobileNavOpen
          }"
        ></span>
      </a>

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
              :to="{ name: 'index' }"
              class="text-lg text-gray-700 lg:px-4 lg:py-8"
            >
              Browse
            </nuxt-link>
          </li>
          <li>
            <nuxt-link
              :to="{ name: 'index' }"
              class="text-lg text-gray-700 lg:px-4 lg:py-8"
            >
              Search
            </nuxt-link>
          </li>
        </ul>
        <ul
          class="items-center w-full ml-auto text-right lg:flex lg:h-24 lg:w-auto"
        >
          <template v-if="$auth.loggedIn">
            <li>
              <nuxt-link
                :to="{ name: 'dashboard' }"
                class="text-lg text-gray-700 lg:px-4 lg:py-8"
              >
                Dashboard
              </nuxt-link>
            </li>
            <li>
              <nuxt-link
                :to="{ name: 'index' }"
                class="text-lg text-gray-700 lg:px-4 lg:py-8"
              >
                {{ $auth.user.name }}
              </nuxt-link>
            </li>
            <li>
              <a
                href="#"
                @click.prevent="signOut"
                class="text-lg text-gray-700 lg:px-4 lg:py-8"
              >
                Sign out
              </a>
            </li>
          </template>
          <template v-else>
            <li>
              <nuxt-link
                :to="{ name: 'auth-signin' }"
                class="text-lg text-gray-700 lg:px-4 lg:py-8"
              >
                Sign In
              </nuxt-link>
            </li>
            <li>
              <nuxt-link
                :to="{ name: 'index' }"
                class="text-lg text-gray-700 lg:px-4 lg:py-8"
              >
                Create an account
              </nuxt-link>
            </li>
          </template>
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
  },
  methods: {
    async signOut() {
      await this.$auth.logout()
    }
  }
}
</script>

<style></style>
