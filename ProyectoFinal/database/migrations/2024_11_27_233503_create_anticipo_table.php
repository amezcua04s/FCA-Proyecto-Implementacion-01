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
        Schema::create('anticipo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyecto_id')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->decimal('monto', 10, 2);
            $table->date('fecha');
            $table->enum('metodo',['Deposito', 'Transferencia'])->default('Transferencia');
            $table->string('referencia', 50)->default('pago');
           
            $table->timestamps();

           $table->foreign('proyecto_id')->references('id')->on('proyecto')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anticipo');
    }
};
