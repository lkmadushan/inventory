import Vue from 'vue';

export default class {

    
    static store(data) {
        return Vue.http
            .post('/api/v1/inventories', data)
            .then(response => response.json());
    }



}

