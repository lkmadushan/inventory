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
    
    static store(data) {
        return Vue.http
            .post('/api/v1/inventories', data)
            .then(response => response.json());
    }

    static verifyStock(data) {
        return Vue.http
            .post('/api/v1/verifications', data)
            .then(response => response.json());
    }

    static verificationList() {
        return Vue.http
            .get('/api/v1/verifications')
            .then(response => response.json());
    }

    static findColour(id) {
        return Vue.http
            .get('/api/v1/colours/' + id)
            .then(response => response.json());
    }
}
