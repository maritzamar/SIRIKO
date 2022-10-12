<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('item_code');
            $table->foreignId('type_id');
            $table->foreignId('brand_id');
            $table->string('serial')->nullable();
            $table->integer('purchase_date')->nullable();
            $table->integer('mac_address')->nullable();
            $table->integer('ip_address')->nullable();
            $table->string('item_state');
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
        Schema::dropIfExists('goods');
    }
};
