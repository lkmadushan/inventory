<template>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="container-fluid">
                    <h2>Items</h2>
                        <div class="form-group">
                            <typeahead v-el:typeahead
                                       :async="'/api/v1/inventories?query='"
                                       :key="'data'"
                                       :template="'{{ item.name + \' - \' + item.item_no }}'"
                                       :template-name="'async'"
                                       :on-hit="fetchItem"
                                       placeholder="Enter Item Name or Number"></typeahead>
                        </div>
                        <div class="form-group">
                            <input @keydown.enter="collectItems"
                                   type="text"
                                   placeholder="Quantity"
                                   v-el:quantity
                                   v-model="quantity"
                                   class="form-control"
                                   required>
                        </div>
                    <button @click="collectItems" :disabled="isDisabled" type="button" class="btn btn-sm btn-primary">Add</button>
                </div>
            </div>
            <div class="col-md-12" v-show="display">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><input type="checkbox" v-model="selectAll"></th>
                        <th>Item No</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in items">

                        <td><input type="checkbox" v-model="selected" :value="item.item_no" number></td>
                        <td>{{ item.item_no }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.quantity }}</td>
                        <td><i @click="removeItem(item)" class="fa fa-trash-o"></i></td>
                    </tr>
                    </tbody>
                </table>
                <button type=submit" class="btn btn-primary" @click="createMaterialRequest">
                    <i class="fa fa-pencil-square-o"></i> Send Request
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    import MaterialRequestService from '../services/MaterialRequestsService';


    export default {

        components: {
            typeahead: VueStrap.typeahead
        },

        data() {
            return {
                items: [],
                item: {},
                quantity: '',
                name: '',
                display:false,
                selected: []
            }
        },

        ready() {
            $(this.$els.typeahead).find('input').focus();
        },

        computed: {
            isDisabled() {
                return _.isEmpty(this.quantity) || _.isEmpty(this.item);
            },

            selectAll: {
                get: function () {
                    return this.items ? this.selected.length == this.items.length : false;
                },
                set: function (value) {
                    var selected = [];

                    if (value) {
                        this.items.forEach((item) => selected.push(item.item_no));
                    }

                    this.selected = selected;
                }
            }
        },

        methods: {

            fetchItem(item, typehead) {
                this.$els.quantity.focus();

                const that = typehead;
                that.showDropdown = false;
                that.$set('value', item.name);

                this.$set('item', item);
            },

            collectItems() {
                this.display = true;
                if(this.isDisabled) return;

                this.item.quantity = this.quantity;
                this.items.push(this.item);

                $(this.$els.typeahead).find('input').val('');
                $(this.$els.typeahead).find('input').focus();

                this.quantity = '';
                this.item = {};
            },

            removeItem(item) {
                this.items.$remove(item);
            },

            createMaterialRequest(){
                MaterialRequestService.store(this.items).then(response => console.log(response));

                this.items = [];
            }
        }

    }

</script>
