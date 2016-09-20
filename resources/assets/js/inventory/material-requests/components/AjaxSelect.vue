<template @keyup="fetch">
    <select >
        <option></option>
    </select>
</template>

<script>
    export default {

        props: {
            placeholder: {
                type: String,
                default: 'Select an option'
            },

            url: {
                type: String,
                required: true
            },

            options: {
                type: Function,
                required: true
            }
        },

        ready() {
            $(this.$el).select2({
                minimumInputLength: 2,
                placeholder: this.placeholder,
                theme: 'bootstrap',
                ajax: {
                    url: this.url,
                    dataType: 'json',
                    type: "GET",
                    delay: 250,
                    data: function (params) {
                        return {
                            query: params.term
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: this.options(data)
                        };

                    }.bind(this),
                    cache: true
                }
            });
        },

        methods : {
            fetch(){
                print();
            }
        }


    }
</script>