<template>
    <form class="form-horizontal" role="form" @submit.prevent="submitForm" method="post">
        <tabs>
            <tab header="General">
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
                            <label for="color" class="col-sm-4 control-label">Color/Finish</label>
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
                            <label for="is_blocked" class="col-sm-4 control-label">SL Item</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="sl" value="sl"
                                       v-model="sl">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="is_blocked" class="col-sm-4 control-label">Indian Item</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="in" value="in"
                                       v-model="in">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="is_blocked" class="col-sm-4 control-label">Poland Item</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="pl" value="pl"
                                       v-model="pl">
                            </div>
                        </div>

                    </div>



                    <div class="col-md-4">
                        <div class="form-group">
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
                        <div class="form-group">
                            <label for="ref_R&D" class="col-sm-4 control-label">Ref R&D</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="ref_R&D" value="ref_R&D" v-model="ref_R&D">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="approved_by" class="col-sm-4 control-label">Approved By
                                Code</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
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
                        <div class="form-group">
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
                        <div class="form-group">
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
                        <div class="form-group">
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
                        <div class="form-group">
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
                        <div class="form-group">
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
                        <div class="form-group">
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
                        <div class="form-group">
                            <label for="approved_by" class="col-sm-4 control-label">Service Item Group</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
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
                        <div class="form-group">
                            <label for="is_blocked" class="col-sm-4 control-label">Blocked</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_blocked" value="is_blocked" v-model="is_blocked">
                            </div>
                        </div>
                        <div class="form-group">
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
                        <div class="form-group">
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

                        <div class="form-group">
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

                        <div class="form-group">
                            <label for="is_blocked" class="col-sm-4 control-label">Stockkeeping Unit Exists</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_exist" value="is_exist" v-model="is_exist">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="is_blocked" class="col-sm-4 control-label">SKU Item</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_sku_item" value="is_sku_item" v-model="is_sku_item">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="is_blocked" class="col-sm-4 control-label">UL Certified</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_ul_certified" value="is_ul_certified"
                                       v-model="is_ul_certified">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="is_blocked" class="col-sm-4 control-label">ROHS</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_rohs" value="is_rohs" v-model="is_rohs">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="Invoicing">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="base_unit_of_measure" class="col-sm-4 control-label">Costing Method</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
                                        class="form-control"
                                        id="costing_method"
                                        name="costing_method"
                                        placeholder="Costing Method">
                                    <option selected>Standard</option>
                                    <option>FiFo</option>
                                    <option>LiFo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="is_blocked" class="col-sm-4 control-label">Cost Is Adjusted</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_adjusted" value="is_adjusted" v-model="is_adjusted">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="is_blocked" class="col-sm-4 control-label">Cost is posted to G/L</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_posted" value="is_posted" v-model="is_posted">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="base_unit_of_measure" class="col-sm-4 control-label">Standard Cost</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
                                        class="form-control"
                                        id="standard_cost"
                                        name="standard_cost"
                                        placeholder="Standard Cost">
                                    <option selected>0.00</option>
                                    <option>1.00</option>
                                    <option>2.00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="base_unit_of_measure" class="col-sm-4 control-label">Unit Cost</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
                                        class="form-control"
                                        id="unit_cost"
                                        name="unit_cost"
                                        placeholder="Unit Cost">
                                    <option selected>0.00</option>
                                    <option>1.00</option>
                                    <option>2.00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Overhead Rate</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="overhead_rate"
                                       v-model="overhead_rate"
                                       id="overhead_rate"
                                       required
                                       placeholder="Overhead Rate">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Indirect Cost %</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="indirect_cost"
                                       v-model="indirect_cost"
                                       id="indirect_cost"
                                       required
                                       placeholder="Indirect Cost">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Last Direct Cost</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="last_direct_cost"
                                       v-model="last_direct_cost"
                                       id="last_direct_cost"
                                       required
                                       placeholder="Last Direct Cost">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="base_unit_of_measure" class="col-sm-4 control-label">Price/Profit Calculation</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
                                        class="form-control"
                                        id="price_profit_calculation"
                                        name="price_profit_calculation"
                                        placeholder="Price/Profit Calculation">
                                    <option selected>profit=price-cost</option>
                                    <option>price=cost+profit</option>
                                    <option>no relationship</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Profit %</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="profit"
                                       v-model="profit"
                                       id="profit"
                                       required
                                       placeholder="Profit">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Unit Price</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="unit_price"
                                       v-model="unit_price"
                                       id="unit_price"
                                       required
                                       placeholder="Unit Price">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="gen_prod_posting_group" class="col-sm-4 control-label">Gen Prod Posting Group</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
                                        class="form-control"
                                        id="gen_prod_posting_group"
                                        name="gen_prod_posting_group"
                                        placeholder="Gen Prod Posting Group">
                                    <option selected>TM</option>
                                    <option>RM</option>
                                    <option>SS</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="vat_prod_posting_group" class="col-sm-4 control-label">VAT Prod Posting Group</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
                                        class="form-control"
                                        id="vat_prod_posting_group"
                                        name="vat_prod_posting_group"
                                        placeholder="VAT Prod Posting Group">
                                    <option selected>SVAT</option>
                                    <option>VAT 8</option>
                                    <option>VAT 15</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inventory_posting_group" class="col-sm-4 control-label">Inventory Posting Group</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
                                        class="form-control"
                                        id="inventory_posting_group"
                                        name="inventory_posting_group"
                                        placeholder="Inventory Posting Group">
                                    <option selected>TM</option>
                                    <option>SS</option>
                                    <option>RM</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="net_invoiced_qty" class="col-sm-4 control-label">Net Invoiced Qty</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="net_invoiced_qty"
                                       v-model="net_invoiced_qty"
                                       id="net_invoiced_qty"
                                       required
                                       placeholder="Net Invoiced Qty">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="is_allow_invoice_desc" class="col-sm-4 control-label">Allow Invoice Disc</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_allow_invoice_desc" value="is_allow_invoice_desc" v-model="is_allow_invoice_desc">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="item_desc_group" class="col-sm-4 control-label">Item Desc Group</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
                                        class="form-control"
                                        id="item_desc_group"
                                        name="item_desc_group"
                                        placeholder="Item Desc Group">
                                    <option selected>19 inches</option>
                                    <option>box</option>
                                    <option>discount</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sales_unit_of_measure" class="col-sm-4 control-label">Sales Unit Of Measure</label>
                            <div class="col-sm-8">
                                <select v-model="selected"
                                        class="form-control"
                                        id="sales_unit_of_measure"
                                        name="sales_unit_of_measure"
                                        placeholder="Sales Unit Of Measure">
                                    <option selected>EA</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="is_inventory_value_zero" class="col-sm-4 control-label">Inventory Value Zero</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_inventory_value_zero" value="is_inventory_value_zero" v-model="is_inventory_value_zero">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="reserved_qty_on_inv" class="col-sm-4 control-label">Reserved Qty On Inv</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="reserved_qty_on_inv"
                                       v-model="reserved_qty_on_inv"
                                       id="reserved_qty_on_inv"
                                       required
                                       placeholder="Reserved Qty On Inv">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="reserved_qty_on_pur" class="col-sm-4 control-label">Reserved Qty On Pur</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="reserved_qty_on_pur"
                                       v-model="reserved_qty_on_pur"
                                       id="reserved_qty_on_pur"
                                       required
                                       placeholder="Reserved Qty On Pur">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="reserved_qty_on_sale" class="col-sm-4 control-label">Reserved Qty On Sale</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       name="reserved_qty_on_sale"
                                       v-model="reserved_qty_on_sale"
                                       id="reserved_qty_on_sale"
                                       required
                                       placeholder="Reserved Qty On Sale">
                            </div>
                        </div>

                    </div>


                </div>
            </tab>
            <tab header="Replenishment">
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
                            <label for="is_blocked" class="col-sm-4 control-label">ROHS</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_rohs" value="is_rohs" v-model="is_rohs">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="Planning">
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
                            <label for="is_blocked" class="col-sm-4 control-label">ROHS</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_rohs" value="is_rohs" v-model="is_rohs">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="Foreign Trade">
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
                            <label for="is_blocked" class="col-sm-4 control-label">ROHS</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_rohs" value="is_rohs" v-model="is_rohs">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="Item Tracking">
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
                            <label for="is_blocked" class="col-sm-4 control-label">ROHS</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_rohs" value="is_rohs" v-model="is_rohs">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="E-commerce">
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
                            <label for="is_blocked" class="col-sm-4 control-label">ROHS</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_rohs" value="is_rohs" v-model="is_rohs">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="EPD">
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
                            <label for="is_blocked" class="col-sm-4 control-label">ROHS</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_rohs" value="is_rohs" v-model="is_rohs">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
        </tabs>
        <button type="submit"
                class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Save Item
        </button>
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