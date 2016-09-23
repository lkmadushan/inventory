<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <user-card :callback="updateUser" :user="user"></user-card>
            </div>
        </div>
    </div>
</template>

<script>
    import UserCard from '../components/UserCard.vue';
    import UserService from '../../user/services/UserService';

    export default {
        data() {
            return {
                user: {}
            }
        },

        components: {
            'user-card': UserCard
        },

        methods: {
            updateUser(user) {
                UserService.update(user.id, user).then(response => console.log(response));
            }
        },

        route: {
            data(transition) {
                var id = transition.to.params.id;

                return {
                    user: UserService.find(id)
                }
            }
        }
    }
</script>
