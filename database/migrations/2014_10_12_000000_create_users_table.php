<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('employee_id');
            $table->integer('user_type');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('employee_status');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('title');
            $table->string('department');
            $table->string('home_phone');
            $table->string('mobile_phone');
            $table->string('primary_address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postal_code');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
