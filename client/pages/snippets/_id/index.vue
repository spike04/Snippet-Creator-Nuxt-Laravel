<template>
  <div>
    <div class="mb-16 bg-white">
      <div class="container py-10 pb-16">
        <div class="w-10/12">
          <h1 class="mb-4 text-4xl font-medium leading-tight text-gray-700">
            Snippet title
          </h1>

          <div class="text-gray-600">
            Created by <nuxt-link :to="{}">Rubin Bajracharya</nuxt-link>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h1 class="mb-6 text-xl font-medium text-gray-600">1/1. Step Title</h1>

      <div class="flex flex-wrap lg:flex-nowrap">
        <div
          class="flex flex-wrap items-start justify-between w-full mb-8 lg:w-8/12 lg:mr-16 lg:flex-nowrap"
        >
          <div class="order-first">
            <nuxt-link
              :to="{}"
              class="block p-3 mb-2 mr-2 bg-blue-500 rounded-lg"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                class="w-6 h-6 text-white fill-current"
              >
                <path
                  d="M5.41 11H21a1 1 0 0 1 0 2H5.41l5.3 5.3a1 1 0 0 1-1.42 1.4l-7-7a1 1 0 0 1 0-1.4l7-7a1 1 0 0 1 1.42 1.4L5.4 11z"
                />
              </svg>
            </nuxt-link>
          </div>
          <div class="w-full p-8 text-gray-600 bg-white rounded-lg">
            Markdown Content
          </div>
          <div class="flex flex-row order-first lg:order-last lg:flex-col">
            <nuxt-link
              :to="{}"
              class="block p-3 mb-2 ml-2 bg-blue-500 rounded-lg"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                class="w-6 h-6 text-white fill-current"
              >
                <path
                  d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z"
                />
              </svg>
            </nuxt-link>
            <nuxt-link
              :to="{}"
              class="order-first block p-3 mb-2 ml-2 bg-blue-500 rounded-lg lg:order-last"
              title="Edit step"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                class="w-6 h-6 text-white fill-current"
              >
                <path
                  d="M6.3 12.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h6a1 1 0 0 1 0 2H4v14h14v-6z"
                />
              </svg>
            </nuxt-link>
          </div>
        </div>
        <div class="w-full lg:w-4/12">
          <div class="mb-8">
            <h1 class="mb-6 text-xl font-medium text-gray-600">Steps</h1>

            <ul>
              <li v-for="(step, index) in 5" :key="index" class="mb-1">
                <nuxt-link :to="{}" :class="{ 'font-bold': index == 0 }">
                  {{ index + 1 }}. Step Title
                </nuxt-link>
              </li>
            </ul>
          </div>
          <div class="text-sm text-gray-500">
            Use
            <div
              class="inline-block px-2 text-sm leading-relaxed text-gray-600 bg-gray-400 rounded"
            >
              ctrl
            </div>
            +
            <div
              class="inline-block px-2 text-sm leading-relaxed text-gray-600 bg-gray-400 rounded"
            >
              shift
            </div>
            +
            <div
              class="inline-block px-2 text-sm leading-relaxed text-gray-600 bg-gray-400 rounded"
            >
              left or right
            </div>
            on your keyboard to navigate between steps
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {}
</script>

<style></style>
