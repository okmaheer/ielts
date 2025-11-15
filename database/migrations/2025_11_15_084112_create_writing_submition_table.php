<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('writing_submissions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('test_id');

            $table->text('task1_answer')->nullable();
            $table->integer('task1_word_count')->nullable();

            $table->text('task2_answer')->nullable();
            $table->integer('task2_word_count')->nullable();

            $table->integer('time_taken');

            $table->longText('ai_evaluation')->nullable();
            $table->float('expert_score')->nullable();
            $table->text('expert_feedback')->nullable();

            $table->boolean('expert_feedback_sent')->default(false);

            $table->float('overall_band_score')->nullable();

            $table->string('status', 50)->default('pending');

            $table->timestamps();

            $table->index('user_id', 'writing_submissions_user_id_index');
            $table->index('test_id', 'writing_submissions_test_id_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('writing_submissions');
    }
};
