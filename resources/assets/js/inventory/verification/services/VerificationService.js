import Vue from 'vue';

export default class {
    
    static take(params = {}) {
        return Vue.http
            .get('/api/v1/verifications', { params: params })
            .then(response => response.json());
    }

    static verifyStock(data) {
        return Vue.http
            .post('/api/v1/verifications', data)
            .then(response => response.json());
    }

    static verificationList() {
        return Vue.http
            .get('/api/v1/verifications?today')
            .then(response => response.json());
    }

    static findColour(id) {
        return Vue.http
            .get('/api/v1/colours/' + id)
            .then(response => response.json());
    }

    static isBarcodeExists(barcode) {
        return Vue.http
            .post('/api/v1/verification-exists', { barcode: barcode })
            .then(response => response.json());
    }
}
