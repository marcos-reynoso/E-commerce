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
        Schema::create('option_buys', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('options_name')->nullable();
            $table->integer('customer_id')->nullable();

            $table->foreign('customer_id', 'option_buys_ibfk_1')->references('customer_id')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option_buys');
    }
};
