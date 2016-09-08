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
            $table->string('barcode');
            $table->string('item_no');
            $table->string('location')->nullable();
            $table->string('rack_no')->nullable();
            $table->string('shelf_no')->nullable();
            $table->string('colour_id')->nullable();
            $table->decimal('system_stock');
            $table->decimal('physical_stock');
            $table->integer('verified_by');
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
