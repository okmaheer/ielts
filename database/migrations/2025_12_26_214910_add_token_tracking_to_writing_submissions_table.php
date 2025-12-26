<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('writing_submissions', function (Blueprint $table) {
            // Add token usage tracking (after ai_evaluation column)
            $table->integer('tokens_used')->nullable()->after('ai_evaluation');

            // Add API cost tracking (10 digits total, 6 decimal places)
            // Example: 0.001234 or 1234.567890
            $table->decimal('api_cost', 10, 6)->nullable()->after('tokens_used');

            // Add expert overall score (if not already exists)
            // Check if column exists first to avoid errors
            if (!Schema::hasColumn('writing_submissions', 'expert_overall_score')) {
                $table->float('expert_overall_score')->nullable()->after('overall_band_score');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('writing_submissions', function (Blueprint $table) {
            $table->dropColumn(['tokens_used', 'api_cost']);

            // Only drop if it was added by this migration
            if (Schema::hasColumn('writing_submissions', 'expert_overall_score')) {
                $table->dropColumn('expert_overall_score');
            }
        });
    }
};
