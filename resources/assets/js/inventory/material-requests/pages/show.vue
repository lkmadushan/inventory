<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Item No</th>
                        <th>Name</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="detail in item.details">
                        <td>{{ detail.item_no }}</td>
                        <td>{{ detail.item.name }}</td>
                        <td>{{ detail.quantity }}</td>
                        <td><i @click="removeItem(item)" class="fa fa-trash-o"></i></td>
                    </tr>
                    </tbody>
                </table>
                <button type=submit" class="btn btn-primary" @click="updateMaterialRequest">
                    <i class="fa fa-pencil-square-o"></i> Send Request
                </button>
            </div>
        </div>
    </div>
</template>

<script>

    import MaterialRequestService from '../services/MaterialRequestsService';

    export default {
        data() {
            return {
                item: {}
            }
        },


        methods: {
            updateMaterialRequest(data) {
                MaterialRequestService.store(data).then(response => console.log(response));
            },

            removeItem(item) {
                this.items.$remove(item);
            },
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
