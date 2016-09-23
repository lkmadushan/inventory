<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <user-card :callback="createUser"></user-card>
            </div>
        </div>
    </div>
</template>

<script>
    import Search from '../../common/Search.vue';
    import Pagination from '../../common/Pagination.vue';
    import UserCard from '../../user/components/UserCard.vue';
    import UserService from '../../user/services/UserService';


    export default {
        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset,
            'pagination': Pagination,
            'search': Search,
            'user-card': UserCard
        },

        methods:{

            createUser(data){
                UserService.store(data).then(response => console.log(response));

            }
        }
    }
</script>
