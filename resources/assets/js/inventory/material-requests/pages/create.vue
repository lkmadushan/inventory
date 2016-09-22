<template>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="container-fluid">
                    <h2>Items</h2>
                    <form @submit.prevent="collectItems">
                        <div class="form-group">
                            <typeahead class="typeahead"
                                       :async="'/api/v1/inventories?query='"
                                       :key="'data'"
                                       :template="'{{ item.name + \' - \' + item.item_no }}'"
                                       :template-name="'async'"
                                       :on-hit="fetchItem"></typeahead>
                        </div>
                        <div class="form-group">
                            <input type="text" v-model="quantity" class="form-control" required>
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
                        <td><button @click="removeItem(item)">Delete</button></td>
                    </tr>
                    </tbody>
                </table>
                <button type=submit" class="btn btn-primary" @click="test">
                    <i class="fa fa-pencil-square-o"></i> Send Request
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    import MaterialRequestService from '../services/MaterialRequestsService';

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

        ready() {
            $('.typeahead').find('input').focus();
        },

        methods:{

            fetchItem(item, typehead) {
                const that = typehead;

                that.$set('value', item.name);
                this.$set('item', item);

            },

            collectItems() {
                this.item.quantity = this.quantity;
                this.items.push(this.item);

                this.quantity='';
                $('.typeahead').find('input').val('');

                $('.typeahead').find('input').focus();

            },

            removeItem(item) {
                this.items.$remove(item);
            },

            createMaterialRequest(data){
                MaterialRequestService.store(data).then(response => console.log(response));
            }
        }

    }

</script>