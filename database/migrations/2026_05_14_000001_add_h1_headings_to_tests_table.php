<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->string('listening_h1_heading')->nullable()->after('listening_focus_keywords');
            $table->string('reading_h1_heading')->nullable()->after('reading_focus_keywords');
        });
    }

    public function down(): void
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->dropColumn(['listening_h1_heading', 'reading_h1_heading']);
        });
    }
};
