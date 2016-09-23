import Vue from 'vue';

export default class {

    
    static store(data) {
        return Vue.http
            .post('/api/v1/material-requests', { items: data })
            .then(response => response.json());
    }

    static take(){
        return Vue.http
            .get('/api/v1/material-requests')
            .then(response => response.json());
    }

    static find(id) {
        return Vue.http
            .get('/api/v1/material-requests/' + id)
            .then(response => response.json());
    }


}

