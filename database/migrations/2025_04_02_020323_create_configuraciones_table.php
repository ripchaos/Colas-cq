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
    Schema::create('configuraciones', function (Blueprint $table) {
        $table->id();
        $table->string('clave')->unique(); // Ej: url_video, nombre_sistema
        $table->text('valor')->nullable(); // Puede ser texto largo
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuraciones');
    }
};
