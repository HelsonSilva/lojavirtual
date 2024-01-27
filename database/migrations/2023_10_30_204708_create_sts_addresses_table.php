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
        Schema::create('sts_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('cep');
            $table->string('street');
            $table->integer('number');
            $table->string('district');
            $table->string('complement');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('sts_clients')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sts_addresses');
    }
};
