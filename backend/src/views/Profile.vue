<template>
  <div class="grid grid-cols-2 md:grid-cols-3 gap-3 p-4">
    <div class="relative rounded-md bg-white py-5">
      <Spinner v-if="loading"
        class="absolute left-0 top-0 rounded-md bg-white right-0 bottom-0 flex items-center justify-center" />
      <span class="ml-4 font-bold text-xl">Profile Update</span>
      <form @submit.prevent="onSubmit">
        <div class=" px-4 pt-5 pb-4">
          <CustomInput class="mb-2" v-model="user.name" label="Name" />
          <CustomInput class="mb-2" v-model="user.email" label="Email" />
          <CustomInput type="password" class="mb-2" label="Password" v-model="user.password" />
        </div>
        <footer class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button type="submit"
            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 text-base font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500">
            Submit
          </button>
        </footer>
      </form>
    </div>
    <div class="">
      <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-[200px] rounded-md" />
    </div>
  </div>
</template>

<script setup>

import CustomInput from "../components/core/CustomInput.vue";

import Spinner from "../components/core/Spinner.vue";
import { computed, toRaw, ref } from 'vue'
import { useStore } from "vuex";

const store = useStore();
const currentUser = computed(() => store.state.user.data);

const user = ref({
  id: currentUser.value.id,
  name: currentUser.value.name,
  email: currentUser.value.email,
  password: null
})


const loading = ref(false)

function onSubmit() {
  loading.value = true
  store.dispatch('updateUser', user.value)
    .then(response => {
      loading.value = false;
      store.dispatch('getCurrentUser')

    })
    .catch(() => {
      loading.value = false;
    })
}

</script>
