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
            $table->int('permissao');
            $table->int('ordem');
            $table->int('dropdown');
            $table->int('lib_menu');
            $table->int('adms_menu_id');
            $table->int('adms_niveis_acesso_id');
            $table->int('adms_pagina_id');
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
