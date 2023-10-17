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
        Schema::create('catalogos_prendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_catalogo');
            $table->unsignedBigInteger('id_prenda');
            $table->timestamps();
        
            $table->foreign('id_catalogo')->references('id')->on('catalogos')
            ->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('id_prenda')->references('id')->on('prendas')
            ->onDelete('cascade')->onUpdate('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogos_prendas');
    }
};
