<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div v-show="success" class="alert alert-success">
                    <strong>Success!</strong> User successfully updated.
                </div>
                <user-card :callback="updateUser" :user="user" :errors="errors"></user-card>
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
                user: {},
                errors: {},
                success: false

            }
        },

        components: {
            'user-card': UserCard
        },

        methods: {
            updateUser(user) {
                return UserService.update(user.id, user)
                        .then((reponse) => {
                            this.$set('success', true);
                            this.$set('errors', {});
                        }).catch((response) => {
                            this.$set('success', false);
                            this.$set('errors', response.data);
                        });
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
