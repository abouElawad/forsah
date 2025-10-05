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
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();

              // link to order
    $table->foreignId('order_id')
          ->constrained('orders')
          ->onDelete('cascade'); // if order deleted, items are deleted

    // link to product
    $table->foreignId('product_id')
          ->constrained('products')
          ->onDelete('restrict'); // don’t allow deleting product if used in order_items

    // snapshot fields (copy from product at order time)
    $table->string('product_name');
    $table->decimal('price', 10, 2); // unit price at purchase
    $table->unsignedSmallInteger('quantity'); // 0–65535
    $table->decimal('total', 12, 2); // price * quantity

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_orders');
    }
};
