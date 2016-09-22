import Vue from 'vue';

export default class {

    static currentUser(){
        return Vue.http
            .get('/api/v1/current')
            .then(response => response.json());
    }
}

