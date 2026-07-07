<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::statement('ALTER TABLE payment_transactions ADD COLUMN fulfilled_at TIMESTAMP NULL DEFAULT NULL');
    }

    public function down()
    {
        DB::statement('ALTER TABLE payment_transactions DROP COLUMN fulfilled_at');
    }
};
