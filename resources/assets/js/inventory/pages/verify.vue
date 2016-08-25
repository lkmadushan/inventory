<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" @submit.prevent="verifyInventory">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-group-sm">
                                <label for="barcode" class="col-sm-4 control-label">Item</label>
                                <div class="col-sm-8">
                                    <input autofocus class="form-control" id="barcode" required="required" name="barcode" type="text" v-model="item.barcode" id="nameInput">
                                </div>
                            </div>
                            <div class="form-group form-group-sm">
                                <label for="quantity" class="col-sm-4 control-label">Physical quantity</label>
                                <div class="col-sm-8">
                                    <input class="form-control" id="quantity" required="required" name="quantity" type="text" v-model="item.quantity">
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn-sm btn-primary pull-right"><i class="fa fa-pencil-square-o"></i>&nbsp; Verify</button>
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
                verifications: [],
                display: false
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
                    this.item.barcode = '';
                    this.item.quantity = '';
                    $('#barcode').focus();
                });
            },

            fetchTodayVerfications() {
                return InventoryService.verificationList().then(data => {
                    if(data.length) {
                        this.display = true;
                        this.$set('verifications', data);
                    }
                });
            }
        }
    }
</script>
