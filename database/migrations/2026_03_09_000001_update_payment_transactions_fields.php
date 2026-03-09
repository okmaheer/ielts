<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Make user_id nullable using raw SQL (avoids doctrine/dbal dependency)
        DB::statement('ALTER TABLE payment_transactions MODIFY user_id BIGINT UNSIGNED NULL');

        Schema::table('payment_transactions', function (Blueprint $table) {
            $table->string('payer_name', 255)->nullable()->after('item');
            $table->string('payer_email', 255)->nullable()->after('payer_name');
            $table->string('payer_phone', 50)->nullable()->after('payer_email');
            $table->string('course_slug', 100)->nullable()->after('payer_phone');
        });
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE payment_transactions MODIFY user_id BIGINT UNSIGNED NOT NULL');

        Schema::table('payment_transactions', function (Blueprint $table) {
            $table->dropColumn(['payer_name', 'payer_email', 'payer_phone', 'course_slug']);
        });
    }
};
