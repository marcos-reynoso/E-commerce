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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('brand_id')->nullable();
            $table->integer('gender_id')->nullable();
            $table->string('name')->nullable();
            $table->string('descriptions')->nullable();
            $table->binary('product_image');
            $table->integer('id_category')->nullable();
            $table->date('entry_date')->nullable();

            $table->foreign('id_category', 'product_ibfk_1')->references('id')->on('category');
            $table->foreign('brand_id', 'product_ibfk_2')->references('id')->on('brand');
            $table->foreign('gender_id', 'product_ibfk_3')->references('id')->on('gender');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
