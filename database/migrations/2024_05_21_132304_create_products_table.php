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
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('img');
            $table->string('description');
            $table->decimal('price', 10, 0);
            $table->decimal('sale_price', 10, 0)->nullable();
            $table->boolean('status')->default(0)->comment('0: sản phẩm bình thường, 1: sản phẩm mới, 2: sản phẩm hot');
            $table->unsignedBigInteger('sold')->default(0);
            $table->boolean('hidden')->default(0);
            $table->timestamps();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
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
