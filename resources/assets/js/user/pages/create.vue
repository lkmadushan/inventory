<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <user-card :callback="createInventory"></user-card>
            </div>
        </div>
    </div>
</template>

<script>
    import Search from '../../common/Search.vue';
    import Pagination from '../../common/Pagination.vue';
    import UserCard from '../components/UserCard.vue';
    import InventoryService from '../../inventory/services/InventoryService';

    export default {
        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset,
            'pagination': Pagination,
            'search': Search,
            'user-card': UserCard
        },

        methods:{
            createInventory(data){
                InventoryService.store(data).then(response => console.log(response));
            }
        }
    }
</script>
