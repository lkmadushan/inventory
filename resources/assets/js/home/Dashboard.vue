<!--Add contents here, may view every page-->
<template>

    <navigation></navigation>

    <div class="container-fluid">
        <!--This is executed the current route ('/' or '/inventories', '/inventory/ its sub components')-->
        <router-view></router-view>
    </div>
</template>

<script>
    import Navigation from '../common/Navigation.vue';

    export default {
        components: { Navigation }
    }
</script>