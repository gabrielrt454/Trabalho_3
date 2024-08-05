<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   
    
    public function up() { 
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->decimal('valor', 8, 2);
            $table->date('data_validade');
            $table->foreignId('id_marca')->constrained('marcas');
            $table->timestamps(); 
        }); 
        
        }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
