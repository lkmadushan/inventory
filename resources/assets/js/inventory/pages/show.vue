<template>
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
                                        <label for="name" class="col-sm-4 control-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="name"
                                                   id="name"
                                                   v-model="item.name"
                                                   required
                                                   placeholder="Item name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-sm-4 control-label">Description</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="description"
                                                   id="description"
                                                   v-model="item.description"
                                                   required
                                                   placeholder="Item Description">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="base_unit_of_measure" class="col-sm-4 control-label">Base
                                            UoM</label>
                                        <div class="col-sm-8">
                                        <select v-model="selected"
                                                class="form-control"
                                                id="base_unit_of_measure"
                                                name="base_unit_of_measure"
                                                placeholder="Base UoM">
                                            <option selected>EA</option>
                                            <option>Kg</option>
                                            <option>Ltr</option>
                                        </select>
                                        <!--<span>Selected: {{ selected }}</span>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="width" class="col-sm-4 control-label">Width (mm)</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="width"
                                                   id="width"
                                                   placeholder="Width">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="height" class="col-sm-4 control-label">Height (mm)</label>
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
                                        <label for="depth" class="col-sm-4 control-label">Depth (mm)</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="depth"
                                                   id="depth"
                                                   placeholder="Depth">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="colour" class="col-sm-4 control-label">Color/Finish</label>
                                        <div class="col-sm-8">
                                            <select v-model="selected"
                                                    class="form-control"
                                                    id="color"
                                                    name="color"
                                                    placeholder="Color/Finish">
                                                <option selected>RAL</option>
                                                <option>RAL</option>
                                                <option>RAL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="item_type" class="col-sm-4 control-label">Item Type</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="item_type"
                                                   id="item_type"
                                                   placeholder="Item Type">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="main_location" class="col-sm-4 control-label">Main Location</label>
                                        <div class="col-sm-8">
                                            <select v-model="selected"
                                                    class="form-control"
                                                    id="main_location"
                                                    name="main_location"
                                                    placeholder="Main Location">
                                                <option selected>Loc 1</option>
                                                <option>Loc 2</option>
                                                <option>Loc 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rack_no" class="col-sm-4 control-label">Rack No.</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="rack_no"
                                                   id="rack_no"
                                                   placeholder="Rack Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="shelf_no" class="col-sm-4 control-label">Shelf
                                            No.</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                   class="form-control"
                                                   name="shelf_no"
                                                   id="shelf_no"
                                                   placeholder="Shelf Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="item_category_code" class="col-sm-4 control-label">Item Category
                                            Code</label>
                                        <div class="col-sm-8">
                                            <select v-model="selected"
                                                    class="form-control"
                                                    id="item_category_code"
                                                    name="item_category_code"
                                                    placeholder="Item Category Code">
                                                <option selected>TM</option>
                                                <option>TMS</option>
                                                <option>PP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_group_code" class="col-sm-4 control-label">Product Group
                                            Code</label>
                                        <div class="col-sm-8">
                                            <select v-model="selected"
                                                    class="form-control"
                                                    id="product_group_code"
                                                    name="product_group_code"
                                                    placeholder="Product Group Code">
                                                <option selected>PGC1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="sl" value="sl" v-model="checkedNames">
                                        <label for="sl">SL Item</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="in" value="in" v-model="checkedNames">
                                        <label for="in">Indian Item</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="pl" value="pl" v-model="checkedNames">
                                        <label for="in">Poland Item</label>
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
