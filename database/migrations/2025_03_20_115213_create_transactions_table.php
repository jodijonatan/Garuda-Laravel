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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('flight_id')->constrained()->cascadeOnDelete();
            $table->foreignId('flight_class_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('number_of_passengers');
            $table->foreignId('promo_code_id')->nullable()->constrained()->cascadeOnDelete();
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending');
            $table->integer('subtotal')->nullable();
            $table->integer('grandtotal')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
