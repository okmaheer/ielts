<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::statement('ALTER TABLE users ADD COLUMN access_given_at TIMESTAMP NULL DEFAULT NULL');
    }

    public function down()
    {
        DB::statement('ALTER TABLE users DROP COLUMN access_given_at');
    }
};
