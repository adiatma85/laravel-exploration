<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable(false);
            $table->unsignedBigInteger('item_id')->nullable(false);
            $table->unsignedSmallInteger('quantity')->default(0);
            $table->unsignedSmallInteger('sub_total')->default(0);
            $table->timestamps();

            // Foreign
            $table->foreign('order_id', 'order_id_fk_1')->references('id')->on('orders');
            $table->foreign('item_id', 'item_id_fk_2')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_details');
    }
}
