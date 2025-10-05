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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('status');

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('restrict');

            $table->foreignId('carrier_id')
                  ->constrained('carriers')
                  ->onDelete('restrict');

             $table->foreignId('address_id')
                    ->nullable()
                    ->constrained('addresses')
                    ->onDelete('set null');

            $table->string('shipping_status')->nullable();
            $table->decimal('shipping_cost',10,2)->nullable();
            $table->decimal('tax',10,2)->nullable();
            $table->decimal('total',12,2)->nullable();
            $table->string('currency')->nullable();
            $table->dateTime('placed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
