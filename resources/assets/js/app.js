require('./bootstrap');

var App = Vue.extend({});
var router = new VueRouter({
    history: true,
    root: '/'
});

router.map(require('./routes'));
router.start(App, '#app');
