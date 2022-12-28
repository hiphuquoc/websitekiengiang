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
        Schema::create('customer_info', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('phone', 20);
            $table->string('zalo', 20)->nullable();
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('company_name')->nullable();
            $table->text('company_phone')->nullable();
            $table->text('company_website')->nullable();
            $table->text('company_address')->nullable();
            $table->string('company_mst', 20)->nullable();
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
        // Schema::dropIfExists('customer_info');
    }
};
