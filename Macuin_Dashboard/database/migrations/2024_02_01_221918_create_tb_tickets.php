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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('departamento_id');
            $table->string('clasificacion');
            $table->text('detalles');
            $table->enum('estado', ['completado', 'asignado', 'en_proceso', 'nunca_solucionado', 'cancelado_por_cliente']);
            $table->timestamps();
        
            $table->foreign('autor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tickets');
    }
};
