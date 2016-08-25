<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_verifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_no');
            $table->string('location');
            $table->string('rack_no');
            $table->string('shelf_no');
            $table->decimal('system_stock');
            $table->decimal('physical_stock');
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
        Schema::drop('inventory_verifications');
    }
}
