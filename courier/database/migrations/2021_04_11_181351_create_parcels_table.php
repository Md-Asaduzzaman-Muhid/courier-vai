<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_id', 20);
            $table->bigInteger('merchant_id');
            $table->bigInteger('rider_id')->nullable();
            $table->string('weight')->nullable();
            $table->smallInteger('type')->nullable();
            $table->string('price')->nullable();
            $table->string('amount_to_collect')->nullable();
            $table->smallInteger('delivery_charge')->nullable();
            $table->smallInteger('status')->nullable();
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
        Schema::dropIfExists('parcels');
    }
}
