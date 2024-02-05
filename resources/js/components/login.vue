<template>
    <form>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="phone">phone</label>
            <input v-model="phone" type="text" id="phone" class="form-control"/>

        </div>

        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4" @click.prevent="login">Sign in</button>
    </form>
</template>

<script setup>

import {ref} from "vue";


const phone = ref('')
const loading = ref(false)

function login() {
    loading.value = true;

    axios.post('/api/login', {
        phone: phone.value
    })
        .then(response => {
            console.log(response);
            loading.value = false;
        })
        .catch(error => {
            console.error(error);
            loading.value = false;
        });
}
</script>
