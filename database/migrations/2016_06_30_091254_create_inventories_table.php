<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_no');
            $table->string('name');
            $table->text('description');
            $table->decimal('quantity');
            $table->string('item_type');
            $table->string('base_unit_of_measure');
            $table->decimal('unit_price');
            $table->decimal('gross_weight');
            $table->decimal('net_weight');
            $table->string('colour');
            $table->string('hex_colour_code');
            $table->decimal('width');
            $table->decimal('depth');
            $table->decimal('height');
            $table->string('rohs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inventories');
    }
}
