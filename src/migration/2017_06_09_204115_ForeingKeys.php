<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeingKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_roles', function($table) {
            $table->foreign('rol_id')->references('id')->on('roles');
        });
        Schema::table('user_roles', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('customers', function($table) {
            $table->foreign('customer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
