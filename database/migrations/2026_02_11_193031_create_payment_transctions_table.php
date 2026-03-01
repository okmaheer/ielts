<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('transaction_id', 50)->unique();
            $table->decimal('amount', 10, 2);
            $table->string('currency', 10)->default('PKR');
            $table->string('item', 500);
            $table->string('payment_status', 50)->default('pending');
            $table->string('payment_method', 100)->nullable();
            $table->longText('swichnow_response')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_transactions');
    }
};
