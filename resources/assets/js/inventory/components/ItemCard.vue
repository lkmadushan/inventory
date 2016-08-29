<template>
    <form class="form-horizontal" role="form" @submit.prevent="submitForm" method="post">
        <tabs>
            <tab header="General">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-group-sm">
                            <label for="name" class="col-sm-4 control-label">Item No.</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
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
                                        placeholder="Base UoM">
                                    <option selected>EA</option>
                                    <option>Kg</option>
                                    <option>Ltr</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="width" class="col-sm-4 control-label">Width (mm)</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="width"
                                       placeholder="Width">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="height" class="col-sm-4 control-label">Height (mm)</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
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
                                       id="depth"
                                       placeholder="Depth">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="color" class="col-sm-4 control-label">Color/Finish</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="color"
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
                                       id="shelf_no"
                                       placeholder="Shelf Number">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="item_category_code" class="col-sm-4 control-label">Item Category
                                Code</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="item_category_code"
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
                                <select class="form-control"
                                        id="product_group_code"
                                        placeholder="Product Group Code">
                                    <option selected>PGC1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">SL Item</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="sl" v-model="sl">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">Indian Item</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="in" v-model="in">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">Poland Item</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="pl" v-model="pl">
                            </div>
                        </div>

                    </div>



                    <div class="col-md-4">
                        <div class="form-group form-group-sm">
                            <label for="approved_date" class="col-sm-4 control-label">Approved Date</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="approved_date"
                                       placeholder="Approved Date">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="ref_R&D" class="col-sm-4 control-label">Ref R&D</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="ref_R&D">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="approved_by" class="col-sm-4 control-label">Approved By
                                Code</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="approved_by"
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
                                       id="inventory"
                                       placeholder="Inventory">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Purch Order</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="qty_on_purch_order"
                                       placeholder="Qty On Purchase Order">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Prod Order</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="qty_on_prod_order"
                                       placeholder="Qty On Product Order">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Comp Lines</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="qty_on_comp_lines"
                                       placeholder="Qty On Component Lines">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Sales Order</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="qty_on_sales_order"
                                       placeholder="Qty On Sales Order">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Qty On Service Order</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="qty_on_service_order"
                                       placeholder="Qty On Service Order">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="approved_by" class="col-sm-4 control-label">Service Item Group</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="service_item_group"
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
                                <input type="checkbox" id="is_blocked" v-model="is_blocked">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Last Date Modified</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="last_date_modified"
                                       placeholder="Last Date Modified">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Creation Date</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="creation_date"
                                       placeholder="Creation Date">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="depth" class="col-sm-4 control-label">Created By</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="created_by"
                                       placeholder="Created By">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">Stockkeeping Unit Exists</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_exist" v-model="is_exist">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">SKU Item</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_sku_item" v-model="is_sku_item">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">UL Certified</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_ul_certified" v-model="is_ul_certified">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">ROHS</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_rohs" v-model="is_rohs">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="Invoicing">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="base_unit_of_measure" class="col-sm-4 control-label">Costing Method</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="costing_method"
                                        placeholder="Costing Method">
                                    <option selected>Standard</option>
                                    <option>FiFo</option>
                                    <option>LiFo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">Cost Is Adjusted</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_adjusted" value="is_adjusted" v-model="is_adjusted">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_blocked" class="col-sm-4 control-label">Cost is posted to G/L</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_posted" value="is_posted" v-model="is_posted">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="base_unit_of_measure" class="col-sm-4 control-label">Standard Cost</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="standard_cost"
                                        placeholder="Standard Cost">
                                    <option selected>0.00</option>
                                    <option>1.00</option>
                                    <option>2.00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="base_unit_of_measure" class="col-sm-4 control-label">Unit Cost</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="unit_cost"
                                        placeholder="Unit Cost">
                                    <option selected>0.00</option>
                                    <option>1.00</option>
                                    <option>2.00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="name" class="col-sm-4 control-label">Overhead Rate</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="overhead_rate"
                                       id="overhead_rate"
                                       placeholder="Overhead Rate">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="name" class="col-sm-4 control-label">Indirect Cost %</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="indirect_cost"
                                       id="indirect_cost"
                                       placeholder="Indirect Cost">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="name" class="col-sm-4 control-label">Last Direct Cost</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="last_direct_cost"
                                       id="last_direct_cost"
                                       placeholder="Last Direct Cost">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="base_unit_of_measure" class="col-sm-4 control-label">Price/Profit Calculation</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="price_profit_calculation"
                                        placeholder="Price/Profit Calculation">
                                    <option selected>profit=price-cost</option>
                                    <option>price=cost+profit</option>
                                    <option>no relationship</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="name" class="col-sm-4 control-label">Profit %</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="profit"
                                       id="profit"
                                       placeholder="Profit">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="name" class="col-sm-4 control-label">Unit Price</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="unit_price"
                                       id="unit_price"
                                       placeholder="Unit Price">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="gen_prod_posting_group" class="col-sm-4 control-label">Gen Prod Posting Group</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="gen_prod_posting_group"
                                        placeholder="Gen Prod Posting Group">
                                    <option selected>TM</option>
                                    <option>RM</option>
                                    <option>SS</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="vat_prod_posting_group" class="col-sm-4 control-label">VAT Prod Posting Group</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="vat_prod_posting_group"
                                        placeholder="VAT Prod Posting Group">
                                    <option selected>SVAT</option>
                                    <option>VAT 8</option>
                                    <option>VAT 15</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="inventory_posting_group" class="col-sm-4 control-label">Inventory Posting Group</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="inventory_posting_group"
                                        placeholder="Inventory Posting Group">
                                    <option selected>TM</option>
                                    <option>SS</option>
                                    <option>RM</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="net_invoiced_qty" class="col-sm-4 control-label">Net Invoiced Qty</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="net_invoiced_qty"
                                       id="net_invoiced_qty"
                                       placeholder="Net Invoiced Qty">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_allow_invoice_desc" class="col-sm-4 control-label">Allow Invoice Disc</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_allow_invoice_desc" value="is_allow_invoice_desc" v-model="is_allow_invoice_desc">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="item_desc_group" class="col-sm-4 control-label">Item Desc Group</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="item_desc_group"
                                        placeholder="Item Desc Group">
                                    <option selected>19 inches</option>
                                    <option>box</option>
                                    <option>discount</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="sales_unit_of_measure" class="col-sm-4 control-label">Sales Unit Of Measure</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="sales_unit_of_measure"
                                        placeholder="Sales Unit Of Measure">
                                    <option selected>EA</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="is_inventory_value_zero" class="col-sm-4 control-label">Inventory Value Zero</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="is_inventory_value_zero" value="is_inventory_value_zero" v-model="is_inventory_value_zero">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="reserved_qty_on_inv" class="col-sm-4 control-label">Reserved Qty On Inv</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="reserved_qty_on_inv"
                                       id="reserved_qty_on_inv"
                                       placeholder="Reserved Qty On Inv">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="reserved_qty_on_pur" class="col-sm-4 control-label">Reserved Qty On Pur</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="reserved_qty_on_pur"
                                       id="reserved_qty_on_pur"
                                       placeholder="Reserved Qty On Pur">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="reserved_qty_on_sale" class="col-sm-4 control-label">Reserved Qty On Sale</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="reserved_qty_on_sale"
                                       id="reserved_qty_on_sale"
                                       placeholder="Reserved Qty On Sale">
                            </div>
                        </div>

                    </div>


                </div>
            </tab>
            <tab header="Replenishment">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="replenishment_system" class="col-sm-4 control-label">Replenishment System</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="replenishment_system"
                                        placeholder="Replenishment System">
                                    <option selected>Purchase</option>
                                    <option>Prod order</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="pur_vendor_no" class="col-sm-4 control-label">Pur Vendor No</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="pur_vendor_no"
                                        placeholder="Pur Vendor No">
                                    <option selected>Saniro</option>
                                    <option>Elsteel Denmark</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group form-group-sm">
                            <label for="vendor_item_no" class="col-sm-4 control-label">Vendor Item No</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="vendor_item_no"
                                       id="vendor_item_no"
                                       placeholder="Vendor Item No">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="pur_unit_of_measure" class="col-sm-4 control-label">Pur Unit Of Measure</label>
                            <div class="col-sm-8">
                                <select v-model=""
                                        class="form-control"
                                        id="pur_unit_of_measure"
                                        placeholder="Pur Unit Of Measure">
                                    <option selected>EA</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="lead_time_calculation" class="col-sm-4 control-label">Lead Time Calculation</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="lead_time_calculation"
                                       id="lead_time_calculation"
                                       placeholder="Lead Time Calculation">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="production_manufactoring_policy" class="col-sm-4 control-label">Prod Manufactoring Policy</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="production_manufactoring_policy"
                                        placeholder="Prod Manufactoring Policy">
                                    <option selected>Make to stock</option>
                                    <option>Make to order</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="routing_no" class="col-sm-4 control-label">Routing No</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="routing_no"
                                        placeholder="Routing No">
                                    <option selected>General</option>
                                    <option>PC-0050</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="production_bom_no" class="col-sm-4 control-label">Production BOM No</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="production_bom_no"
                                        placeholder="Production BOM No">
                                    <option selected>UL-90259</option>
                                    <option>UL-90255</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group form-group-sm">
                            <label for="rounding_precision" class="col-sm-4 control-label">Rounding Precision</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="rounding_precision"
                                       id="rounding_precision"
                                       placeholder="Rounding Precision">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="flushing_method" class="col-sm-4 control-label">Flushing Method</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="flushing_method"
                                        placeholder="Flushing Method">
                                    <option selected>Manual</option>
                                    <option>Forward</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group form-group-sm">
                            <label for="scrap" class="col-sm-4 control-label">Scrap %</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="scrap"
                                       id="scrap"
                                       placeholder="Scrap">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="lot_size" class="col-sm-4 control-label">Lot Size</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="lot_size"
                                       id="lot_size"
                                       placeholder="Lot Size">
                            </div>
                        </div>

                    </div>


                </div>
            </tab>
            <tab header="Planning">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="reordering_policy" class="col-sm-4 control-label">Reordering Policy</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="reordering_policy"
                                       id="reordering_policy"
                                       placeholder="Reordering Policy">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="include_inventory" class="col-sm-4 control-label">Include Inventory</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="include_inventory" value="include_inventory" v-model="include_inventory">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="reserve" class="col-sm-4 control-label">Reserve</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="reserve"
                                        placeholder="Reserve">
                                    <option selected>Optional</option>
                                    <option>Never</option>
                                    <option>Always</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="order_tracking_policy" class="col-sm-4 control-label">Order Tracking Policy</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="order_tracking_policy"
                                        placeholder="Order Tracking Policy">
                                    <option selected>None</option>
                                    <option>Tracking Only</option>
                                    <option>Tracking & action</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="reorder_cycle" class="col-sm-4 control-label">Reorder Cycle</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="reorder_cycle"
                                       placeholder="Reorder Cycle">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="safety_lead_time" class="col-sm-4 control-label">Safety Lead Time</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="safety_lead_time"
                                       id="safety_lead_time"
                                       placeholder="Safety Lead Time">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="safety_stock_quantity" class="col-sm-4 control-label">Safety Stock Qty</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="safety_stock_quantity"
                                       id="safety_stock_quantity"
                                       placeholder="Safety Stock Qty">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="reorder_point" class="col-sm-4 control-label">Reorder Point</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="reorder_point"
                                       id="reorder_point"
                                       placeholder="Reorder Point">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="reorder_quantity" class="col-sm-4 control-label">Reorder Qty</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="reorder_quantity"
                                       id="reorder_quantity"
                                       placeholder="Reorder Quantity">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="maximum_inventory" class="col-sm-4 control-label">Maximum Inventory</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="maximum_inventory"
                                       id="maximum_inventory"
                                       placeholder="Maximum Inventory">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="minimum_order_quantity" class="col-sm-4 control-label">Min Order Qty</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="minimum_order_quantity"
                                       id="minimum_order_quantity"
                                       placeholder="Min Order Qty">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="maximum_order_quantity" class="col-sm-4 control-label">Max Order Qty</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="maximum_order_quantity"
                                       id="maximum_order_quantity"
                                       placeholder="Max Order Qty">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="order_multiple" class="col-sm-4 control-label">Order Multiple</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="order_multiple"
                                       id="order_multiple"
                                       placeholder="Order Multiple">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="cons_adj_factor" class="col-sm-4 control-label">Cons Adj Factor %</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="cons_adj_factor"
                                       id="cons_adj_factor"
                                       placeholder="Cons Adj Factor %">
                            </div>
                        </div>

                    </div>

                </div>

            </tab>
            <tab header="Foreign Trade">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="tariff_no" class="col-sm-4 control-label">Tariff No</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="tariff_no"
                                        placeholder="Tariff No">
                                    <option selected></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="country_of_origin" class="col-sm-4 control-label">Country/Region Of Ori</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="country_of_origin"
                                        placeholder="Country/Region Of Ori">
                                    <option selected>SPAIN</option>
                                    <option>UK</option>
                                    <option>USA</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="gross_weight" class="col-sm-4 control-label">Gross Weight</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="gross_weight"
                                       id="gross_weight"
                                       placeholder="Gross Weight">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="unit_volume" class="col-sm-4 control-label">Unit Volume</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="unit_volume"
                                       id="unit_volume"
                                       placeholder="Unit Volume">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="barcode" class="col-sm-4 control-label">Barcode</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="barcode"
                                       id="barcode"
                                       placeholder="Barcode">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="Item Tracking">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="item_tracking_code" class="col-sm-4 control-label">Item Tracking Code</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="item_tracking_code"
                                        placeholder="Item Tracking Code">
                                    <option selected>D-XX100</option>
                                    <option>D-XX101</option>
                                    <option>D-XX102</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm form-group form-group-sm-sm">
                            <label for="serial_no" class="col-sm-4 control-label">Serial Nos</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="serial_no"
                                        placeholder="Serial Nos">
                                    <option selected>VARE</option>
                                    <option>VARE 1</option>
                                    <option>VARE 2</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="lot_no" class="col-sm-4 control-label">Lot Nos</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="lot_no"
                                        placeholder="Lot Nos">
                                    <option selected>VARE</option>
                                    <option>VARE 1</option>
                                    <option>VARE 2</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="name" class="col-sm-4 control-label">Expiration Calculation</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="expiration_calculation"
                                       id="expiration_calculation"
                                       placeholder="Expiration Calculation">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="E-commerce">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group form-group-sm">
                            <label for="common_item_no" class="col-sm-4 control-label">Common Item No</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="common_item_no"
                                       id="common_item_no"
                                       placeholder="Common Item No">
                            </div>
                        </div>
                    </div>
                </div>
            </tab>
            <tab header="Warehouse">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="special_equipment_code" class="col-sm-4 control-label">Special Equipment Code</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="special_equipment_code"
                                        placeholder="Special Equipment Code">
                                    <option selected></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="putaway_template_code" class="col-sm-4 control-label">Put-away Template Code</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="putaway_template_code"
                                        placeholder="Put-away Template Code">
                                    <option selected></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="putaway_unit_of_meas" class="col-sm-4 control-label">Put-away Unit Of Meas</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="putaway_unit_of_meas"
                                        placeholder="Put-away Unit Of Meas">
                                    <option selected>EA</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="phys_invt_counting_pe" class="col-sm-4 control-label">Phys Invt Counting Pe</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="phys_invt_counting_pe"
                                        placeholder="Phys Invt Counting Pe">
                                    <option selected></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="last_phys_invt_date" class="col-sm-4 control-label">Last Phys Invt Date</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="last_phys_invt_date"
                                       id="last_phys_invt_date"
                                       placeholder="Last Phys Invt Date">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="last_counting_period_u" class="col-sm-4 control-label">Last Counting Period U</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="last_counting_period_u"
                                       id="last_counting_period_u"
                                       placeholder="Last Counting Period U">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="next_counting_period_u" class="col-sm-4 control-label">Next Counting Period U</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="next_counting_period_u"
                                       id="next_counting_period_u"
                                       placeholder="Next Counting Period U">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="identifier_code" class="col-sm-4 control-label">Identifier Code</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="identifier_code"
                                       id="identifier_code"
                                       placeholder="Identifier Code">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="use_cross_docking" class="col-sm-4 control-label">Use Cross Docking</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="use_cross_docking" value="use_cross_docking" v-model="use_cross_docking">
                            </div>
                        </div>

                    </div>
                </div>
            </tab>
            <tab header="EPD">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="version" class="col-sm-4 control-label">Version</label>
                            <div class="col-sm-8">
                                <select class="form-control"
                                        id="version"
                                        placeholder="Version">
                                    <option selected>v1</option>
                                    <option>v2</option>
                                    <option>v3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="to_accessory_list" class="col-sm-4 control-label">To Accessory List</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="to_accessory_list" value="to_accessory_list" v-model="to_accessory_list">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="catalog_page" class="col-sm-4 control-label">Catalog Page</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="catalog_page"
                                       id="catalog_page"
                                       placeholder="Catalog Page">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="net_weight" class="col-sm-4 control-label">Net Weight</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="net_weight"
                                       id="net_weight"
                                       placeholder="Net Weight">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group form-group-sm">
                            <label for="assembly_time" class="col-sm-4 control-label">Assembly Time</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="assembly_time"
                                       id="assembly_time"
                                       placeholder="Assembly Time">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="units_per_parcel" class="col-sm-4 control-label">Units Per Parcel</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       v-model="units_per_parcel"
                                       id="units_per_parcel"
                                       placeholder="Units Per Parcel">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="add_to_epd" class="col-sm-4 control-label">Add To EPD</label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="add_to_epd" value="add_to_epd" v-model="add_to_epd">
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