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
    Schema::create('llamados', function (Blueprint $table) {
        $table->id();
        $table->foreignId('turno_id')->constrained()->onDelete('cascade');
        $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // Operador que llamó
        $table->foreignId('pantalla_id')->nullable()->constrained()->onDelete('set null');
        $table->enum('accion', ['llamar', 'atender', 'pausar', 'finalizar']);
        $table->timestamp('realizado_en')->useCurrent();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llamados');
    }
};
