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
    
    static store(data){
        return Vue.http
            .post('/api/v1/inventories',data )
            .then(response => response.json());
    }

    static verifyStock(data){
        
    }
    

}