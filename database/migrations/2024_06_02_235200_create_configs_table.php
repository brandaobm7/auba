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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('rodape');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->text('google')->nullable();
            $table->text('endereco')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('analytcs')->nullable();
            $table->text('maps')->nullable();
            $table->text('pixel')->nullable();
            $table->text('download')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('atendimento')->nullable();
            $table->string('site')->nullable();
            $table->string('imagem')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
