<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" @submit.prevent="verifyInventory" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-sm">
                                <label for="barcode" class="col-sm-4 control-label">Barcode</label>
                                <div class="col-sm-8">
                                    <input autofocus
                                           class="form-control"
                                           id="barcode"
                                           required="required"
                                           type="text"
                                           @keyup="fetchItem | debounce 500"
                                           v-model="item.barcode">
                                </div>
                            </div>
                            <div class="form-group form-group-sm">
                                <label for="quantity" class="col-sm-4 control-label">Physical quantity</label>
                                <div class="col-sm-8">
                                    <input class="form-control" id="quantity" required="required" type="text" v-model="item.quantity">
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn-sm btn-primary pull-right"><i class="fa fa-pencil-square-o"></i>&nbsp; Verify</button>
                        </div>
                        <div class="col-sm-8">
                            <p v-show="serverItem.name" class="help-block"><strong>Description:</strong>&nbsp;&nbsp; {{ serverItem.name }}</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div v-show="display">
        <verification-list :list="verifications"></verification-list>
    </div>

</template>

<script>
    import Pagination from '../../common/Pagination.vue';
    import VerificationList from '../components/VerificationList.vue';
    import InventoryService from '../../inventory/services/InventoryService';

    export default {
        data() {
            return {
                item: {
                    barcode: '',
                    quantity: ''
                },
                serverItem: {
                    name: ''
                },
                verifications: [],
                display: false,
            }
        },

        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset,
            'pagination': Pagination,
            'verification-list': VerificationList
        },

        created() {
            this.fetchTodayVerfications();

            Vue.nextTick(function() {
                $('#barcode').focus();
            });
        },

        methods: {
            verifyInventory() {
                InventoryService.verifyStock(this.item).then(() => {
                    this.fetchTodayVerfications();
                });

                $('#quantity').val('');
                $('#barcode').val('').focus();
            },

            fetchTodayVerfications() {
                return InventoryService.verificationList().then(data => {
                    if(data.length) {
                        this.display = true;
                        this.$set('verifications', data);
                    }
                });
            },

            fetchItem() {
                var id = this.item.barcode.split('\\')[0];

                return InventoryService.find(id).then(data => {
                    this.$set('serverItem', data);
                });
            }
        }
    }
</script>
