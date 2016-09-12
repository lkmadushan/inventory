<template>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="container-fluid">
                    <h2>Items</h2>
                    <form @submit.prevent="collectItems">
                        <div class="form-group">
                            <typeahead :async="'/api/v1/inventories?query='"
                                       :key="'data'"
                                       :template="'{{ item.name + \' - \' + item.item_no }}'"
                                       :template-name="'async'"
                                       :on-hit="fetchItem"></typeahead>
                        </div>
                        <div class="form-group">
                            <input type="text" v-model="quantity" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Item No</th>
                        <th>Name</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in items">
                        <td>{{ item.item_no }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.quantity }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                items: [],
                item: {},
                quantity: ''
            }
        },

        components: {
            typeahead: VueStrap.typeahead
        },

        methods:{
            fetchItem(item, typehead) {
                const that = typehead;
                that.reset();
                that.$set('value', item.name);

                this.$set('item', item);
            },

            collectItems() {
                this.item.quantity = this.quantity;
                this.items.push(this.item);
            }
        }

    }

</script>