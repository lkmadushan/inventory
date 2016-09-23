<!--Add contents here, may view every page-->
<template>

    <navigation></navigation>

    <div class="container-fluid">
        <!--This is executed the current route ('/' or '/inventories', '/inventory/ its sub components')-->
        <router-view></router-view>
    </div>
    <footer-bottom></footer-bottom>
</template>

<script>
    import Navigation from '../common/Navigation.vue';
    import FooterBottom from '../common/FooterBottom.vue';
    import AuthService from '../auth/services/AuthService';

    export default {
        components: { Navigation, FooterBottom },

        route: {
            data() {
                return AuthService.currentUser().then((user) => {
                    this.$broadcast('userRetrieved', user);
                });
            }
        }
    }
</script>