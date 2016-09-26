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
                    '/verifications': {
                        component: require('./inventory/verification/pages/index.vue')
                    }
                }
            },

            '/material-requests': {
                component: require('./inventory/Inventory.vue'),
                subRoutes: {
                    '/': {
                        component: require('./inventory/material-requests/pages/index.vue')
                    },
                    '/:id': {
                        component: require('./inventory/material-requests/pages/show.vue')
                    },

                    '/create': {
                        component: require('./inventory/material-requests/pages/create.vue')
                    },
                    '/issue/:id': {
                        component: require('./inventory/material-requests/dispatch/pages/show.vue')
                    }
                }
            },

            '/transfer-orders': {
                component: require('./inventory/Inventory.vue'),
                subRoutes: {
                    '/': {
                        component: require('./inventory/transfer-orders/pages/index.vue')
                    },
                    '/create': {
                        component: require('./inventory/transfer-orders/pages/create.vue')
                    }

                }
            },


            '/users': {
                component: require('./user/User.vue'),
                subRoutes: {
                    '/': {
                        component: require('./user/pages/index.vue')
                    },
                    '/:id': {
                        component: require('./user/pages/show.vue')
                    },
                    '/create': {
                        component: require('./user/pages/create.vue')
                    },
                    '/test': {
                        component: require('./user/pages/test.vue')
                    }
                }
            }

        }
    }

}

module.exports = routes;
