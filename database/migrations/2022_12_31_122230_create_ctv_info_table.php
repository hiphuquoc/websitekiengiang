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
        Schema::create('ctv_info', function (Blueprint $table) {
            $table->id();
            $table->text('code')->nullable();
            $table->text('code_parent')->nullable();
            $table->text('name');
            $table->string('phone', 20);
            $table->text('email')->nullable();
            $table->text('identity');
            $table->text('address')->nullable();
            $table->integer('type')->default(0);
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
        // Schema::dropIfExists('ctv_info');
    }
};
