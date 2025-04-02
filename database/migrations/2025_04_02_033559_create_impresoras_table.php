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
        Schema::create('impresoras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique(); // Ej: "Impresora Principal"
            $table->enum('tipo', ['lan', 'usb', 'red'])->default('lan');
            $table->string('direccion')->nullable(); // IP, puerto o ruta local
            $table->foreignId('departamento_id')->nullable()->constrained()->onDelete('set null');
            $table->boolean('activa')->default(true);
            $table->string('path');
            $table->boolean('es_remota')->default(false); // ← Agregado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impresoras');
    }
};

