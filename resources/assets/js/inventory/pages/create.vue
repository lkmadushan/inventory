<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <item-card :callback="createInventory"></item-card>
            </div>
        </div>
    </div>
</template>

<script>
    import Search from '../../common/Search.vue';
    import Pagination from '../../common/Pagination.vue';
    import ItemCard from '../components/ItemCard.vue';
    import InventoryService from '../../user/services/InventoryService';

    export default {
        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset,
            'pagination': Pagination,
            'search': Search,
            'item-card': ItemCard
        },

        methods:{
            createInventory(data){
                InventoryService.store(data).then(response => console.log(response));
            }
        }
    }
</script>
