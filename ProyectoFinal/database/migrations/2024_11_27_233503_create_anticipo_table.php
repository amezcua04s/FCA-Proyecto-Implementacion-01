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
            $table->unsignedBigInteger('proyecto')->nullable();
            $table->unsignedBigInteger('cliente')->nullable();
            $table->decimal('monto', 10, 2);
            $table->date('fecha');
            $table->enum('metodo',['Deposito', 'Transferencia'])->default('Transferencia');
            $table->string('referencia', 50)->default('pago');
           
            $table->timestamps();

           $table->foreign('proyecto')->references('id')->on('proyecto')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cliente')->references('id')->on('cliente')->onDelete('cascade')->onUpdate('cascade');
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
