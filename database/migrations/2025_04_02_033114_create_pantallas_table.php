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
        Schema::create('pantallas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('video_url')->nullable();
            $table->boolean('activa')->default(true);
            $table->foreignId('departamento_id')->nullable()->constrained()->onDelete('set null'); // <- Agregada
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pantallas');
    }
};

