<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tests', function (Blueprint $table) {
            // Instructions/Show page meta
            $table->string('listening_show_meta_title')->nullable()->after('listening_h1_heading');
            $table->text('listening_show_meta_description')->nullable()->after('listening_show_meta_title');
            $table->string('listening_show_focus_keywords')->nullable()->after('listening_show_meta_description');
            $table->string('reading_show_meta_title')->nullable()->after('reading_h1_heading');
            $table->text('reading_show_meta_description')->nullable()->after('reading_show_meta_title');
            $table->string('reading_show_focus_keywords')->nullable()->after('reading_show_meta_description');

            // Results/Correct answers page meta
            $table->string('listening_result_meta_title')->nullable()->after('listening_show_focus_keywords');
            $table->text('listening_result_meta_description')->nullable()->after('listening_result_meta_title');
            $table->string('listening_result_focus_keywords')->nullable()->after('listening_result_meta_description');
            $table->string('reading_result_meta_title')->nullable()->after('reading_show_focus_keywords');
            $table->text('reading_result_meta_description')->nullable()->after('reading_result_meta_title');
            $table->string('reading_result_focus_keywords')->nullable()->after('reading_result_meta_description');
        });
    }

    public function down(): void
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->dropColumn([
                'listening_show_meta_title', 'listening_show_meta_description', 'listening_show_focus_keywords',
                'reading_show_meta_title', 'reading_show_meta_description', 'reading_show_focus_keywords',
                'listening_result_meta_title', 'listening_result_meta_description', 'listening_result_focus_keywords',
                'reading_result_meta_title', 'reading_result_meta_description', 'reading_result_focus_keywords',
            ]);
        });
    }
};
