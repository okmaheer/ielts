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
        Schema::table('tests', function (Blueprint $table) {
            // Reading Meta Fields
            $table->string('reading_meta_title', 255)->nullable()->after('paragraph5');
            $table->text('reading_meta_description')->nullable()->after('reading_meta_title');
            $table->string('reading_focus_keywords', 255)->nullable()->after('reading_meta_description');
            
            // Listening Meta Fields
            $table->string('listening_meta_title', 255)->nullable()->after('reading_focus_keywords');
            $table->text('listening_meta_description')->nullable()->after('listening_meta_title');
            $table->string('listening_focus_keywords', 255)->nullable()->after('listening_meta_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->dropColumn([
                'reading_meta_title',
                'reading_meta_description',
                'reading_focus_keywords',
                'listening_meta_title',
                'listening_meta_description',
                'listening_focus_keywords'
            ]);
        });
    }
};