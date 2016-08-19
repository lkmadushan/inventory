<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" @submit.prevent="updateStoreAndFindItem">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Item</label>
                                <div class="col-sm-8">
                                    <input autofocus class="form-control" required="required" name="name" type="text" v-model="item.item_no" id="nameInput">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="qty" class="col-sm-4 control-label">Physical Qty</label>
                                <div class="col-sm-8">
                                    <input class="form-control" required="required" name="qty" type="text" v-model="item.qty">
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o"></i>Let's See</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div v-show="display">
        <item-card :callback="verifyInventory" :item="item"></item-card>
    </div>

</template>

<script>
    import Search from '../../common/Search.vue';
    import Pagination from '../../common/Pagination.vue';
    import ItemCard from '../components/ItemCard.vue';
    import InventoryService from '../../inventory/services/InventoryService';

    export default {
        data() {
            return {
                item: {},
                display: false
            }
        },

        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset,
            'pagination': Pagination,
            'search': Search,
            'item-card': ItemCard
        },

        methods:{
            verifyInventory(data){
                InventoryService.store(data).then(response => console.log(response));
            },

            updateStoreAndFindItem() {
                Promise.all([
                    InventoryService.verifyStock(this.item),
                    InventoryService.find(this.item.item_no)
                ]).then(([a, b]) => {
                    this.display = true,
                    this.$set('item', b);
                });
            }
        }
    }
</script>
