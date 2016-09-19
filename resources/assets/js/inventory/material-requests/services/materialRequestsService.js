import Vue from 'vue';

export default class {

    static take(params) {
        return Vue.http
            .get('/api/v1/inventories', { params: params })
            .then(response => response.json());
    }
    
}

