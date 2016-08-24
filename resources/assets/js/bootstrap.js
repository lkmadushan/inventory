window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

window.Vue = require('vue');
window.VueRouter = require('vue-router');
window.VueStrap = require('vue-strap/dist/vue-strap.min.js');

Vue.use(VueRouter);
require('vue-resource');

Vue.http.interceptors.push((request, next) => {
    request.headers['X-CSRF-TOKEN'] = Laravel.csrfToken;
    
    next();
});