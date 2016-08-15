<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class InventoryTest extends TestCase
{
    use DatabaseMigrations;

    function test_insert_item_to_inventory()
    {
        $item = factory(App\Inventory::class)->make();

        $this->post('/api/v1/inventories', $item->toArray())->seeStatusCode(201);

        $this->seeInDatabase('inventories', [
            'item_no' => $item->item_no
        ]);
    }

    function test_inventory_has_given_item()
    {
        $items = factory(App\Inventory::class, 5)->create();
        $first = $items->first();
        $last = $items->last();

        $this->get("/api/v1/inventories/{$first->item_no}")->seeJson([
            'item_no' => $first->item_no,
            'quantity' => $first->quantity
        ]);

        $this->get("/api/v1/inventories/{$last->item_no}")->seeJson([
            'item_no' => $last->item_no,
            'quantity' => $last->quantity
        ]);
    }

    function test_inform_when_inventory_item_does_not_exists()
    {
        factory(App\Inventory::class, 5)->create();

        $this->get("/api/v1/inventories/foobar")->seeJson([
            'status' => 'Item not found'
        ]);
    }
}