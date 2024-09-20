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
        Schema::create('bancos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('cor_titulo')->nullable();
            $table->text('descricao')->nullable();
            $table->string('exibir');
            $table->string('imagem')->nullable();
            $table->string('video')->nullable();
            $table->string('titulo_link')->nullable();
            $table->string('cor_link')->nullable();
            $table->string('link')->nullable();
            $table->string('bg_cor')->nullable();
            $table->string('bg_imagem')->nullable();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bancos');
    }
};
