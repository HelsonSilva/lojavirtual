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
        Schema::create('adm_menus', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('icone');
            $table->integer('ordem');
            $table->unsignedBigInteger('id_adm_sits');
            $table->foreign('id_adm_sits')->references('id')->on('adm_sits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adm_menus');
    }
};
