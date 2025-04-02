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
    Schema::create('turnos', function (Blueprint $table) {
        $table->id();
        $table->string('codigo')->unique();
        $table->boolean('atendido')->default(false);
        $table->foreignId('departamento_id')->constrained()->onDelete('cascade');
        $table->timestamp('llamado_en')->nullable();
        $table->boolean('preferencial')->default(false);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
