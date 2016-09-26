<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Item No</th>
                        <th>Name</th>
                        <th>Quantity Requred</th>
                        <th>Scan Item</th>
                        <th>Quantity to Issue</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in item.details">
                        <td>{{ item.item_no }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.quantity }}</td>
                        <td>
                            <input autofocus
                                   class="form-control"
                                   id="barcode"
                                   required="required"
                                   type="text"
                                   @keyup="fetchItem(item.item_no) | debounce 500"
                                   v-model="barcode">
                        </td>
                        <td>
                            <input class="form-control"
                                   id="qty_to_issue"
                                   required="required"
                                   type="text"
                                   v-model="item.quantity">
                        </td>

                    </tr>
                    </tbody>
                </table>
                <!--<button type=submit" class="btn btn-primary" @click="updateMaterialRequest">-->
                    <!--<i class="fa fa-pencil-square-o"></i> Send Request-->
                <!--</button>-->
            </div>
        </div>
    </div>
</template>

<script>

    import MaterialRequestService from '../../services/MaterialRequestsService';

    export default {
        data() {
            return {
                item: {},
                barcode: ''
            }
        },


        methods: {
            updateMaterialRequest(data) {
                MaterialRequestService.store(data).then(response => console.log(response));
            },

            removeItem(item) {
                this.items.$remove(item);
            },

            fetchItem(item){
                //get data and set row is success
               console.log(item);
            }
        },

        route: {
            data(transition) {
                var id = transition.to.params.id;

                return {
                    item: MaterialRequestService.find(id)
                }
            }
        }
    }
</script>
