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
        Schema::create('payment', function (Blueprint $table) {
            $table->string('id_payment',10) -> primary();
            $table->string('id_ticket', 50); 
            $table->string('payment_method',50);
            $table->string('total_price', 10);
            $table->string('status', 10);
            $table->string('amount', 10);
            $table->foreign('id_ticket')->references('id_ticket')->on('ticket');
            $table->date('payment_date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
