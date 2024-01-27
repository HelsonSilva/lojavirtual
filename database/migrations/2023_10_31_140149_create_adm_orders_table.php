<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('adm_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('type');
            $table->double('vl_total',10,2);
            $table->integer('type_pay');
            $table->string('products');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('sts_clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adm_orders');
    }
};
