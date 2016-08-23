<template>

    <div class="col-md-2">
        <input type="text"
               class="form-control"
               @keydown="search | debounce 500"
               v-model="string"
               placeholder="Search">

    </div>

    <div class="col-md-2">
        <select @change="search" class="form-control" v-model="type">
            <option value="5">Option 1</option>
            <option value="10">Optiob 2</option>
        </select>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                type: {},
                string: ''
            }
        },

        props: {
            query: {
                type: Object,
                required: true
            },

            callback: {
                type: Function,
                required: true
            }
        },

        computed: {
            query() {
                const params = {};

                if (this.string.length > 0) params.query = this.string;
                if (this.type.length > 0) params.type = this.type;

                return params;
            }
        },

        methods: {
            search() {
                this.callback();
            }
        }
    }
</script>
