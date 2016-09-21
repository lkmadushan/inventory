import Vue from 'vue';

export default class {

    static take(params) {
        return Vue.http
            .get('/api/v1/inventories', { params: params })
            .then(response => response.json());
    }

    static find(id) {
        return Vue.http
            .get('/api/v1/inventories/' + id)
            .then(response => response.json());
    }

    static findAll() {
        return Vue.http
            .get('/api/v1/inventories')
            .then(response => response.json());
    }




}

