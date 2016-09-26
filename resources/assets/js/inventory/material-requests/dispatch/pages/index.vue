<template>
    <div>
        <search :query.sync="query" :callback="fetchMaterialRequests"></search>
        <table class="table table-hover table-condensed">
            <thead>
            <tr>
                <th>Material Request No.</th>
                <th>User</th>
                <th>Department</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="materialrequest in materialRequests.data">
                <td>{{ materialrequest.number }}</td>
                <td>{{ materialrequest.user.name }}</td>
                <td>{{ materialrequest.user.department }}</td>
            </tr>
            </tbody>
        </table>
        <div class="pull-right">
            <pagination :pagination="materialRequests" :callback="fetchMaterialRequests"></pagination>
        </div>
    </div>
</template>

<script>
    import Search from '../../../../common/Search.vue';
    import Pagination from '../../../../common/Pagination.vue';
    import MaterialRequestService from '../../../material-requests/services/MaterialRequestsService';

    export default {
        data() {
            return {
                materialRequests: {},
                query: {}
            }
        },

        components: { Pagination, Search },

        created() {
            this.fetchMaterialRequests();
        },

        methods: {
            fetchMaterialRequests(page = 1) {
                var params = this.query;
                params.page = page;

                MaterialRequestService.take(params).then((data) => {
                    this.$set('materialRequests', data);
            });
            }
        }
    }
</script>
