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
        Schema::create('adm_products', function (Blueprint $table) {
            $table->id();
            $table->integer('cod');
            $table->string('nome');
            $table->double('val',10,2);
            $table->double('val_prom',10,2);
            $table->integer('active');
            $table->text('descr');
            $table->integer('balance');
            $table->string('imagem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adm_products');
    }
};
