import Vue from 'vue';

export default class {


    static store(data) {
        return Vue.http
            .post('/api/v1/users', data)
            .then(response => response.json());
    }

    static take(params) {
        return Vue.http
            .get('/api/v1/users', { params: params })
            .then(response => response.json());
    }

    static find(id) {
        return Vue.http
            .get('/api/v1/users/' + id)
            .then(response => response.json());
    }

    static update(id, data){
        return Vue.http
            .patch('/api/v1/users/' + id, data)
            .then(response => response.json());
    }

    static remove(id) {
        return Vue.http
            .delete('/api/v1/users/' + id)
            .then(response => response.json());
    }

}


