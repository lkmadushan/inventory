<template>
    <div id="app">
        <form class="pure-form pure-form-stacked">
            <div class="">
                <label>Email</label>
                <input v-validate data-rules="required|email"  name="email" type="text" placeholder="Email">
                <span class="error" v-show="errors.has('email')">{{ errors.first('email') }}</span>
            </div>
        </form>
    </div>
</template>

<script>


    export default {



    }
</script>