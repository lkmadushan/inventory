var routes = {
    '/': {
        //main root
        component: require('./home/Dashboard.vue'),
        //Every thing goes under the main root '/' so that the content of Dashboard will be shown every sub views except <router-view>
        subRoutes: {
            '/inventories': {
                component: require('./inventory/Inventory.vue'),
                subRoutes: {
                    '/': {
                        component: require('./inventory/pages/index.vue')
                    },
                    '/:id': {
                        component: require('./inventory/pages/show.vue')
                    },
                    '/create': {
                        component: require('./inventory/pages/create.vue')
                    },
                    '/verify': {
                        component: require('./inventory/verification/pages/create.vue')
                    },
                    '/store': {
                        component: require('./inventory/pages/show.vue')
                    },
                    '/verifications':{
                        component: require('./inventory/verification/pages/index.vue')
                    },
                }
            },

        }
    }
};

module.exports = routes;
