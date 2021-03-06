<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" @submit.prevent="verifyInventory" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-sm" :class="{ 'has-error': isBarcodeExists }">
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
                            <p v-show="serverItem.item_no" class="help-block"><strong>Item No:</strong>&nbsp;&nbsp; {{ serverItem.item_no }}</p>
                            <p v-show="serverItem.name" class="help-block"><strong>Name:</strong>&nbsp;&nbsp; {{ serverItem.name }}</p>
                            <p v-show="colour.ral_no" class="help-block"><strong>Colour:</strong>&nbsp;&nbsp; {{ colour.ral_no }} <span v-show="colour.hex_no" class="circle" :style="{ background: colour.hex_no }">&nbsp;</span></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div v-show="display">
        <verification-list :list="verifications.data"></verification-list>
    </div>

</template>

<style>
    .circle {
        display: inline-block;
        margin-right: 20px;
        margin-left: 5px;
        width: 20px;
        height: 20px;
    }
</style>

<script>
    import Pagination from '../../../common/Pagination.vue';
    import VerificationList from '../../verification/components/VerificationList.vue';
    import InventoryService from '../../services/InventoryService';
    import VerificationService from '../../verification/services/VerificationService';

    export default {
        data() {
            return {
                item: {
                    barcode: '',
                    quantity: ''
                },
                serverItem: {
                    name: '',
                    item_no: ''
                },
                isBarcodeExists: false,
                colour: {
                    ral_no: '',
                    hex_no: ''
                },
                verifications: {
                    data: []
                },
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
            this.fetchTodayVerifications();

            Vue.nextTick(function() {
                $('#barcode').focus();
            });
        },

        methods: {
            verifyInventory() {
                VerificationService.verifyStock(this.item).then(date => {
                    this.fetchTodayVerifications();
                });

                $('#quantity').val('');
                $('#barcode').val('').focus();
            },

            fetchTodayVerifications() {
                return VerificationService.verificationList().then(data => {
                    if(data.total > 0) {
                        this.display = true;
                        this.isBarcodeExists = false;
                        this.$set('verifications', data);
                    }
                });
            },

            fetchItem() {
                var data = this.item.barcode.split('\\');

                VerificationService.isBarcodeExists(this.item.barcode).then(data => {
                    this.$set('isBarcodeExists', data.status);
                });

                if (data.length == 5) {
                    return Promise.all([
                        InventoryService.find(data[0]),
                        VerificationService.findColour(data[4]),
                    ]).then(([item, colour]) => {
                        this.$set('serverItem', item);
                        this.$set('colour', colour);
                    });
                }

                return InventoryService.find(data[0]).then(data => {
                    this.$set('serverItem', data);
                });
            }
        }
    }
</script>
