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
        Schema::create('adm_nivacs_pgs', function (Blueprint $table) {
            $table->id();
            $table->integer('permissao');
            $table->integer('ordem');
            $table->integer('dropdown');
            $table->integer('lib_menu');
            $table->unsignedBigInteger('id_adm_menu');
            $table->foreign('id_adm_menu')->references('id')->on('adm_menus');
            $table->unsignedBigInteger('id_adm_niveis_acesso');
            $table->foreign('id_adm_niveis_acesso')->references('id')->on('adm_niveis_acessos');
            $table->unsignedBigInteger('id_adm_pagina');
            $table->foreign('id_adm_pagina')->references('id')->on('adm_paginas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adm_nivacs_pgs');
    }
};
