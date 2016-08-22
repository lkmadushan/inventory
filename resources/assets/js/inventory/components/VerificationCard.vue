<template>
    <hr>
    <form class="form-horizontal" role="form" @submit.prevent="submitForm" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-group-sm">
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
                        <div class="form-group form-group-sm">
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
                        <div class="form-group form-group-sm">
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
                        <div class="form-group form-group-sm">
                            <label for="base_unit_of_measure" class="col-sm-4 control-label">Base
                                UoM</label>
                            <div class="col-sm-8">
                                <select v-model=""
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
                        <div class="form-group form-group-sm">
                            <label for="width" class="col-sm-4 control-label">Width (mm)</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="width"
                                       id="width"
                                       placeholder="Width">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
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
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Depth (mm)</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="depth"
                                       id="depth"
                                       placeholder="Depth">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="color" class="col-sm-4 control-label">Color/Finish</label>
                            <div class="col-sm-8">
                                <select v-model=""
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
                        <div class="form-group form-group-sm">
                            <label for="item_type" class="col-sm-4 control-label">Item Type</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="item_type"
                                       id="item_type"
                                       placeholder="Item Type">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="main_location" class="col-sm-4 control-label">Main Location</label>
                            <div class="col-sm-8">
                                <select v-model=""
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
                        <div class="form-group form-group-sm">
                            <label for="rack_no" class="col-sm-4 control-label">Rack No.</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="rack_no"
                                       id="rack_no"
                                       placeholder="Rack Number">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
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
                        <div class="form-group form-group-sm">
                            <label for="item_category_code" class="col-sm-4 control-label">Item Category
                                Code</label>
                            <div class="col-sm-8">
                                <select v-model=""
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
                        <div class="form-group form-group-sm">
                            <label for="product_group_code" class="col-sm-4 control-label">Product Group
                                Code</label>
                            <div class="col-sm-8">
                                <select v-model=""
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
                        <div class="form-group form-group-sm">
                            <input type="checkbox" id="sl" value="sl" v-model="checkedNames">
                            <label for="sl">SL Item</label>
                        </div>
                        <div class="form-group form-group-sm">
                            <input type="checkbox" id="in" value="in" v-model="checkedNames">
                            <label for="in">Indian Item</label>
                        </div>
                        <div class="form-group form-group-sm">
                            <input type="checkbox" id="pl" value="pl" v-model="checkedNames">
                            <label for="in">Poland Item</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group form-group-sm">
                            <label for="approved_date" class="col-sm-4 control-label">Approved Date</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="approved_date"
                                       id="approved_date"
                                       value=""
                                       placeholder="Approved Date">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="ref_R&D" class="col-sm-4 control-label">Ref R&D</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="ref_R&D" value="ref_R&D" v-model="">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="approved_by" class="col-sm-4 control-label">Approved By
                                Code</label>
                            <div class="col-sm-8">
                                <select v-model=""
                                        class="form-control"
                                        id="approved_by"
                                        name="approved_by"
                                        placeholder="Product Group Code">
                                    <option selected>User1</option>
                                    <option>User2</option>
                                    <option>User3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="height" class="col-sm-4 control-label">Inventory</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="inventory"
                                       id="inventory"
                                       value=""
                                       placeholder="Inventory">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Purch Order</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="qty_on_purch_order"
                                       id="qty_on_purch_order"
                                       value=""
                                       placeholder="Qty On Purchase Order">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Prod Order</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="qty_on_prod_order"
                                       id="qty_on_prod_order"
                                       value=""
                                       placeholder="Qty On Product Order">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Comp Lines</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="qty_on_comp_lines"
                                       id="qty_on_comp_lines"
                                       value=""
                                       placeholder="Qty On Component Lines">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Sales Order</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="qty_on_sales_order"
                                       id="qty_on_sales_order"
                                       value=""
                                       placeholder="Qty On Sales Order">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Service Order</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="qty_on_service_order"
                                       id="qty_on_service_order"
                                       value=""
                                       placeholder="Qty On Service Order">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="approved_by" class="col-sm-4 control-label">Service Item Group</label>
                            <div class="col-sm-8">
                                <select v-model=""
                                        class="form-control"
                                        id="service_item_group"
                                        name="service_item_group"
                                        placeholder="Service Item Group">
                                    <option selected>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">Blocked</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_blocked" value="is_blocked" v-model="is_blocked">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Last Date Modified</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="last_date_modified"
                                       id="last_date_modified"
                                       value=""
                                       placeholder="Last Date Modified">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Creation Date</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="creation_date"
                                       id="creation_date"
                                       value=""
                                       placeholder="Creation Date">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Created By</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="created_by"
                                       id="created_by"
                                       value=""
                                       placeholder="Created By">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">Stockkeeping Unit Exists</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_exist" value="is_exist" v-model="is_exist">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">SKU Item</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_sku_item" value="is_sku_item" v-model="is_sku_item">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">UL Certified</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_ul_certified" value="is_ul_certified"
                                       v-model="is_ul_certified">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">ROHS</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_rohs" value="is_rohs" v-model="is_rohs">
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</template>

<script>
    export default {
        props: {
            callback: {
                type: Function,
                required: true
            },

            item: {
                type: Object,
                default: Object
            }
        },

        components: {
            'tab': VueStrap.tab,
            'tabs': VueStrap.tabset
        },

        methods: {
            submitForm() {
                this.callback(this.item);
            }
        }
    }
</script>