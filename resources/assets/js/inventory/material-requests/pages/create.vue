<template>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="container-fluid">
                    <h2>Items</h2>
                    <v-select :options="['foo','bar','baz']"></v-select>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import vSelect from 'vue-select'

    export default {
        components: {vSelect},
        data() {
            return {
                selected: null,
                options: ['foo','bar','baz']
            }
        },
        methods:{
            fetchInventory(data){
                InventoryService.store(data).then(response => console.log(response));
            }
        }
    }

</script>