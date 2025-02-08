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
        Schema::create('ticket', function (Blueprint $table) {
            $table->string('id_ticket',10) -> primary();
            $table->string('id_users', 50); 
            $table->string('id_studio',50);
            $table->string('id_films',50);
            $table->string('price',50);
            $table->string('status', 10);
            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_studio')->references('id_studio')->on('studio');
            $table->foreign('id_films')->references('id_films')->on('films');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
