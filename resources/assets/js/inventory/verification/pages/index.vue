<template>
    <div>
        <!--<search :query.sync="query" :callback="fetchInventories"></search>-->
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th>Item no.</th>
                    <th>Location</th>
                    <th>Colour</th>
                    <th>Rack no.</th>
                    <th>Shelf no.</th>
                    <th>Physical stock</th>
                 </tr>
            </thead>
            <tbody>
            <tr v-for="verification in verifications">
                <td>{{ verification.item_no }} - {{ verification.item.name }}</td>
                <td>{{ verification.location ? verification.location.location : 'N/A' }}</td>
                <td>{{ verification.colour ? verification.colour.ral_no : 'N/A' }}</td>
                <td>{{ verification.rack_no }}</td>
                <td>{{ verification.shelf_no }}</td>
                <td>{{ verification.physical_stock }}</td>
            </tr>
            </tbody>

        </table>
        <!--<div class="pull-right">-->
            <!--<pagination :pagination="verifications" :callback="fetchVerifications"></pagination>-->
        <!--</div>-->
    </div>
</template>

<script>
    import VerificationService from '../../verification/services/VerificationService';

    export default {


        data(){
            return{
                verifications: [],
                query: {}
            }
        },

        created(){
            this.fetchVerifications();
        },

        methods: {
           fetchVerifications() {

                VerificationService.take().then((data) => {
                    this.$set('verifications', data);
            });
           }
        }
    }
</script>