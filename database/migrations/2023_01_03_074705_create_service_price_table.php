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
        Schema::create('service_price', function (Blueprint $table) {
            $table->id();
            $table->integer('service_info_id');
            $table->text('name');
            $table->text('description')->nullable();
            $table->string('label', 20);
            $table->string('price_origin');
            $table->string('unit', 20)->nullable();
            $table->string('sale_off')->nullable();
            $table->text('time_sale_off')->nullable();
            $table->longText('detail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_price');
    }
};
