<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class InventoryVerificationTest extends TestCase
{
    use DatabaseMigrations;

    function test_stores_current_stock_taken_quantity_of_given_item()
    {
        $items = factory(App\Inventory::class, 5)->create();
        $last = $items->last();

        $this->post("/api/v1/inventories/{$last->item_no}/physical-stocks", ['quantity' => 50])
             ->seeStatusCode(201);

        $this->seeInDatabase('inventory_verifications', [
            'item_no' => $last->item_no,
            'system_stock' => $last->quantity,
            'physical_stock' => 50
        ]);
    }
}