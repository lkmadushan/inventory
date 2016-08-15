<template>
    <div class="col-md-2">
        <input type="text"
               class="form-control"
               @keydown="search | debounce 100"
               v-model="query"
               placeholder="Search">

    </div>
</template>

<script>
    export default {
        props: {
            query: {
                type: String,
                required: true
            },

            callback: {
                type: Function,
                required: true
            }
        },

        methods: {
            search() {
                this.callback();
            }
        }
    }
</script>
