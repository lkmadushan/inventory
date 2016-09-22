import Vue from 'vue';

export default class {


    static store(data) {
        return Vue.http
            .post('/api/v1/users', data)
            .then(response => response.json());
    }

}


