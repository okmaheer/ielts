<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expert_review_requests', function (Blueprint $table) {
            $table->id(); // unsigned big integer primary key

            $table->unsignedBigInteger('submission_id');
            $table->unsignedBigInteger('user_id');

            $table->string('status', 50)->default('pending'); // pending, in_progress, completed, rejected

            $table->timestamp('requested_at')->useCurrent();
            $table->timestamp('reviewed_at')->nullable();

            $table->text('admin_notes')->nullable();

            $table->timestamps();

            // Unique constraint
            $table->unique('submission_id', 'expert_review_requests_submission_id_unique');

            // Indexes
            $table->index('user_id', 'expert_review_requests_user_id_index');
            $table->index('status', 'expert_review_requests_status_index');

            // Foreign Key → writing_submissions(id)
            $table->foreign('submission_id', 'expert_review_requests_submission_id_foreign')
                ->references(columns: 'id')
                ->on('writing_submissions')
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expert_review_requests');
    }
};
