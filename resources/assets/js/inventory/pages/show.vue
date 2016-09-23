<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <item-card :callback="updateInventory" :item="item"></item-card>
            </div>
        </div>
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
                item: {}
            }
        },

        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset,
            'pagination': Pagination,
            'search': Search,
            'item-card': ItemCard
        },

        methods: {
            updateInventory(item) {
                InventoryService.update(item.id, item).then(response => console.log(response));
            }
        },

        route: {
            data(transition) {
                var id = transition.to.params.id;

                return {
                    item: InventoryService.find(id)
                }
            }
        }
    }
</script>
