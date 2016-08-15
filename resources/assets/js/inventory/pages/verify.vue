<template>
    <form class="form-horizontal" role="form" v-on:submit="createDog">
        <div class="form-group">
            <label for="name" class="col-sm-2 col-sm-offset-1 control-label">Item</label>
            <div class="col-sm-5">
                <input class="form-control" required="required" name="name" type="text" v-model="item.no" id="nameInput">
            </div>
        </div>
        <div class="form-group">
            <label for="age" class="col-sm-2 col-sm-offset-1 control-label">Physical Qty</label>
            <div class="col-sm-5">
                <input class="form-control" required="required" name="qty" type="text" v-model="item.qty">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-3">
                <button type="submit" class="btn btn-primary" :disabled="creating">
                    Let's See
                </button>
            </div>
        </div>
    </form>
    <div>
        <div class="row">
            <div class="col-md-12">
                <tabs>
                    <tab header="General">
                        <form name="itemForm" method="POST" action="" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-4 control-label">Item No.</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="item_no"
                                                   v-model="item.item_no"
                                                   id="item_no"
                                                   required
                                                   placeholder="Item no.">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-4 control-label">Description</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="name"
                                                   id="name"
                                                   v-model="item.name"
                                                   required
                                                   value=""
                                                   placeholder="Item name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-4 control-label">Description 2</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="name"
                                                   id="name"
                                                   v-model="item.name"
                                                   required
                                                   value=""
                                                   placeholder="Item name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="per_pallet" class="col-sm-4 control-label">Base Unit Of
                                            Measure</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="per_pallet"
                                                   id="per_pallet"
                                                   value=""
                                                   placeholder="Items per pallet">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="base_unit_of_measure" class="col-sm-4 control-label">Shelf
                                            No.</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="base_unit_of_measure"
                                                   id="base_unit_of_measure"
                                                   required
                                                   value=""
                                                   placeholder="Unit of measure">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-sm-4 control-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control"
                                                      rows="5"
                                                      name="description"
                                                      id="description"
                                                      required
                                                      placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="colour" class="col-sm-4 control-label">Colour</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="colour"
                                                   id="colour"
                                                   value=""
                                                   placeholder="Colour">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="hex_colour_code" class="col-sm-4 control-label">Colour hex
                                            code</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="hex_colour_code"
                                                   id="hex_colour_code"
                                                   value=""
                                                   placeholder="Colour hex code">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="width" class="col-sm-4 control-label">Width</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="width"
                                                   id="width"
                                                   value=""
                                                   placeholder="Width">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="height" class="col-sm-4 control-label">Height</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="height"
                                                   id="height"
                                                   value=""
                                                   placeholder="Height">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="depth" class="col-sm-4 control-label">Depth</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="depth"
                                                   id="depth"
                                                   value=""
                                                   placeholder="Depth">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="">
                            <input type="hidden" name="_method" value="PATCH">
                            <button type="submit"
                                    class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Update Item
                            </button>
                        </form>
                    </tab>
                    <tab header="Invoicing">
                        Test
                    </tab>
                    <tab header="Replenishment">
                        Test
                    </tab>
                    <tab header="Planning">
                        Test
                    </tab>
                    <tab header="Foreign Trade">
                        Test
                    </tab>
                    <tab header="Item Tracking">
                        Test
                    </tab>
                    <tab header="E-commerce">
                        Test
                    </tab>
                    <tab header="EPD">
                        Test
                    </tab>
                </tabs>
            </div>
        </div>
    </div>
</template>

<script>
    import Search from '../../common/Search.vue';
    import Pagination from '../../common/Pagination.vue';
    import InventoryService from '../../inventory/services/InventoryService';

    export default {
        data() {
            return {
                item: {}
            }
        },

        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset,
            'pagination': Pagination,
            'search': Search
        },

        route: {
            data(transition) {
                var id = transition.to.params.id;

                return {
                    item: InventoryService.find(id)
                }
            }
        }
    }
</script>
