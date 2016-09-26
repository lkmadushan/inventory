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
            <tr v-for="materialRequest in materialRequests.data" >
                <td v-link="{ path: '/material-requests/' + materialRequest.id }">{{ materialRequest.number }}</td>
                <td>{{ materialRequest.user.name }}</td>
                <td>
                    {{ materialRequest.user.department }}

                    <dropdown text="Options" type="primary" class="btn-group-xs pull-right">
                        <li><a v-link="{ path: '/material-requests/' + materialRequest.id }">View</a></li>
                        <li><a href="#dropdown">Delete</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a  v-link="{ path: '/material-requests/issue/' + materialRequest.id }">Dispatch</a></li>
                    </dropdown>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="pull-right">
            <pagination :pagination="materialRequests" :callback="fetchMaterialRequests"></pagination>
        </div>
    </div>
</template>

<script>
    import Search from '../../../common/Search.vue';
    import Pagination from '../../../common/Pagination.vue';
    import MaterialRequestService from '../../material-requests/services/MaterialRequestsService';

    export default {
        data() {
            return {
                materialRequests: {},
                query: {},
                selected: []
            }
        },

        components: {
            'pagination': Pagination,
            'search': Search,
            'dropdown': VueStrap.dropdown

        },

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
            },

            removeItem(materialRequest){

                alert();
            }
        }
    }
</script>
