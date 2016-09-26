<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div v-show="success" class="alert alert-success">
                    <strong>Success!</strong> User successfully created.
                </div>
                <user-card :callback="createUser" :user="user" :errors="errors"></user-card>
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
        data() {
            return {
                user: {},
                errors: {},
                success: false
            }
        },

        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset,
            'pagination': Pagination,
            'search': Search,
            'user-card': UserCard

        },

        methods:{
            createUser(data){
                return UserService.store(data)
                        .then((reponse) => {
                            this.$set('success', true);
                            this.$set('errors', {});
                            this.$set('user', {});
                        }).catch((response) => {
                            this.$set('success', false);
                            this.$set('errors', response.data);
                        });
            }
        }
    }
</script>
